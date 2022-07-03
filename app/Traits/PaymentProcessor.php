<?php

namespace App\Traits;

use Exception;
use App\Models\Payment;
use App\Models\RequestType;
use App\Models\Connectivity;
use App\Models\PaymentStatus;
use App\Models\CountryPaymentOption;

trait PaymentProcessor
{

    public  function getProcessor(CountryPaymentOption $payment_method, $request_body = [], RequestType $request_type)
    {
        try {
            $payment_method = $this->getRouter($payment_method, $request_type);
            $payment_class_handler = $payment_method->corresponding_file;

            //This is the Namespace that handles Payments
            //\App\Helpers\PaymentProcessors\Payouts
            $payment_class_handler = "\App\Helpers\PaymentProcessors\Payouts\\{$payment_class_handler}";

            // Check that the class exists before trying to use it
            if (!class_exists($payment_class_handler)) {
                throw new Exception("Class to Handle this payment not added. Contact system admin");
            }
            return new $payment_class_handler($payment_method, $request_body, $request_type);
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }
    }


    public  function getRouter(CountryPaymentOption $payment_method, RequestType $request_type)
    {
        try {
            return Connectivity::where(['country_payment_option_id' => $payment_method->id, 'request_type_id' => $request_type->id])->first();
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }
    }

    public function getPaymentProcessingDetails(Payment $payment)
    {
        $payment_method =  $payment->paymentProvider;
        $request_type =   $payment->getPaymentRequestType();
        $payment_details = $payment->only(
            "transaction_id",
            "amount",
            "currency",
            "sender_number",
            "receiver_number",
            "vendor_reference",
            "reason"
        );
        return array($payment_method, $request_type, $payment_details);
    }

    public function getPaymentStatusDetails(Payment $payment)
    {
        $payment_method =  $payment->paymentProvider;
        $request_type =   $payment->getPaymentStatusRequestType();
        $payment_details = $payment->only(
            "transaction_id",
            "amount",
            "sender_number",
            "receiver_number",
            "vendor_reference"
        );
        return array($payment_method, $request_type, $payment_details);
    }



    public function getPaymentRequestType()
    {
        return RequestType::firstOrNew(['name' => "Payment", 'code' => 'payment']);
    }

    public function getPaymentStatusRequestType()
    {
        return RequestType::firstOrNew(['name' => "Inquiry", 'code' => 'inquiry']);
    }

    public function getValidationRequestType()
    {
        return RequestType::firstOrNew(['name' => "Validation", 'code' => 'validation']);
    }



}
