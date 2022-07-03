<?php

namespace App\Services;

use Exception;
use App\Models\Payment;
use App\Models\RequestType;
use App\Models\PaymentStatus;
use App\Models\CountryPaymentOption;

class PaymentService
{
    public function __construct()
    {
        $this->payment = new Payment();
    }

    public function storePayment($payment_details = [], CountryPaymentOption $payment_method)
    {
        try {
            //Get Status
            $payment_status = PaymentStatus::firstOrNew(['name' => "PLACED"]);
            $payment_details['transaction_id'] = $this->generatePaymentRef();
            $payment_details['country_payment_option_id'] = $payment_method->id;
            $payment_details['payment_status_id'] =  $payment_status->id;

            $payment = $this->payment->create($payment_details);
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }
        return array($payment, $payment_details);
    }

    public function  updatePayment(Payment $payment, $response)
    {
        return $payment;
    }

    private function generatePaymentRef()
    {
        return time() . '' . mt_rand();
    }

    public function allowReposting()
    {
        if (strcasecmp($this->payment->paymentStatus->name, "PLACED") === 0) {
            return true;
        }

        if (strcasecmp($this->payment->paymentStatus->name, "PAID") === 0) {
            throw new \Exception("Payment {$this->payment->transaction_id} can't be reposted. It's already succesfully completed");
        } else
    if (strcasecmp($this->payment->paymentStatus->name, "PENDING") === 0) {
            throw new \Exception("Payment {$this->payment->transaction_id} can't be reposted. Wait till we confirm its final status");
        } else {
            throw new \Exception("Payment {$this->payment->transaction_id} can't be reposted. Try another purchase");
        }
    }
}
