<?php

namespace App\Http\Controllers\Api;

use App\Traits\ApiResponse;
use App\Models\PaymentOption;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;
use App\Http\Resources\PaymentOptionResource;

class PaymentOptionController extends Controller
{
    use ApiResponse;

    public function index()
    {
        try {
            $paymentOptions = PaymentOption::all();
        } catch (\Exception $e) {
            return $this->sendExceptionError($e);
        }
        return $this->sendResponse(PaymentOptionResource::collection($paymentOptions), 'Payment options fetched.');
    }

    public function store(Request $request)
    {
        $input = $request->all();
        $validator = Validator::make($input, [
            'name',
            'description'
        ]);
        if ($validator->fails()) {
            return $this->sendError("Invalid Input", $validator->errors(),  new ValidationException($validator));
        }

        try {
            $paymentOption = PaymentOption::create($input);
        } catch (\Exception $e) {
            return $this->sendExceptionError($e);
        }    
        if ($request->hasFile('logo')) {
            $logo = $paymentOption->uploadLogo($request);
            //Upload a photo
            $paymentOption->logo = $logo;
            $paymentOption->save();
        }
        return $this->sendResponse(new PaymentOptionResource($paymentOption), 'Payment Option created.');
    }


    public function show($id)
    {
        $paymentOption = PaymentOption::find($id);
        if (is_null($paymentOption)) {
            return $this->sendError('Payment Option does not exist.');
        }
        return $this->sendResponse(new PaymentOption($paymentOption), 'PaymentOption fetched.');
    }


    public function update(Request $request, PaymentOption $paymentOption)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'description' => 'required'
        ]);

        if ($validator->fails()) {
            return $this->sendError($validator->errors());
        }

        $paymentOption->update($request->all());

        return $this->sendResponse(new PaymentOptionResource($paymentOption), 'Payment Option updated.');
    }

    public function destroy(PaymentOption $paymentOption)
    {
        $paymentOption->delete();
        return $this->sendResponse([], 'Payment Option deleted.');
    }
}
