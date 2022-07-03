<?php

namespace App\Http\Controllers\Api;

use App\Models\Payment;
use App\Traits\ApiResponse;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Traits\PaymentProcessor;
use Vinkla\Hashids\Facades\Hashids;
use App\Http\Resources\PaymentResource;
use App\Models\CountryPaymentOption;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;

class PaymentController extends Controller
{
    use ApiResponse, PaymentProcessor;

    public function __construct()
    {
        $this->payments = new Payment();
        $this->payment_methods = new CountryPaymentOption();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try {
            $payments = Payment::orderBy('id', 'DESC')->get();
        } catch (\Exception $e) {
            return $this->sendExceptionError($e);
        }
        return $this->sendResponse(PaymentResource::collection($payments), 'Payments fetched.');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
        $validator = Validator::make($input, [
            'amount' => 'required',
            'currency' => 'required',
            'email' => 'required',
            'phone_number' => 'required',
            'sender_number' => 'required',
            'payment_method' => 'required',
            'request_type' => 'required'
        ]);
        if ($validator->fails()) {
            return $this->sendError("Invalid Input", $validator->errors(),  new ValidationException($validator));
        }

        try {
            $payment_method_id = Hashids::decode($request->input('payment_method'))[0];
            $payment_method = $this->payment_methods->findOrFail($payment_method_id);
            $request_type = $this->payments->getPaymentRequestType();
            list($payment, $payment_request) = $this->storePayment($request->except('payment_method'), $payment_method);
            $payment_processor = $this->getProcessor($payment_method, $payment_request, $request_type);

            $response = $payment_processor->sendRequest($payment_request);
            $payment = $this->updatePayment($payment, $response);

            return $this->sendResponse(new PaymentResource($payment), 'Payment created.');
        } catch (\Exception $e) {
            return $this->sendExceptionError($e);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function show(Payment $payment)
    {
        try {
            return $this->sendResponse(new PaymentResource($payment), $payment->message);
        } catch (\Exception $e) {
            return $this->sendExceptionError($e);
        }
    }

    /**
     * Repost a payment for processing
     *
     * @param  \App\Models\Payment  $payment
     * @return \Illuminate\Http\Response
     */

    public function repost(Payment $payment)
    {
        try {
            $payment->allowReposting();
            list($payment_method, $request_type, $payment_request) = $this->getPaymentProcessingDetails($payment);
            $payment_processor = $this->getProcessor($payment_method, $payment_request, $request_type);

            $response = $payment_processor->sendRequest($payment_request);
            $payment = $this->updatePayment($payment, $response);

            return $this->sendResponse(new PaymentResource($payment), ($payment->message ?? "Payment Reposted Succesfully"));
        } catch (\Exception $e) {
            return $this->sendExceptionError($e);
        }
    }

    /**
     * Check Payment Status
     *
     * @param  \App\Models\Payment  $payment
     * @return \Illuminate\Http\Response
     */

    public function checkStatus(Payment $payment)
    {
        try {
            list($payment_method, $request_type, $payment_request) = $this->getPaymentStatusDetails($payment);
            $payment_processor = $this->getProcessor($payment_method, $payment_request, $request_type);

            $response = $payment_processor->sendRequest($payment_request);
            $payment = $this->updatePayment($payment, $response);

            return $this->sendResponse(new PaymentResource($payment), ($payment->message ?? "Payment Staus retrived Succesfully"));
        } catch (\Exception $e) {
            return $this->sendExceptionError($e);
        }
    }

    /**
     *     *
     * Validate Payments accounts
     */

    public function validateAccount(Request $request)
    {
        try {

            $input = $request->all();
            $validator = Validator::make($input, [
                'sender_number' => 'required',
                'payment_method' => 'required'
            ]);
            if ($validator->fails()) {
                return $this->sendError("Invalid Input", $validator->errors(),  new ValidationException($validator));
            }

            $payment_method_id = Hashids::decode($request->input('payment_method'))[0];
            $payment_method = $this->payment_methods->findOrFail($payment_method_id);
            $request_type = $this->payments->getValidationRequestType();

            $payment_request = $request->only('sender_number');
            $payment_processor = $this->getProcessor($payment_method, $payment_request, $request_type);

            $response = $payment_processor->sendRequest($payment_request);
            return $this->sendResponse($response, "");
        } catch (\Exception $e) {
            return $this->sendExceptionError($e);
        }
    }
}
