<?php

namespace App\Helpers\PaymentProcessors\Payouts;

use Exception;
use App\Models\PaymentOption;
use App\Traits\PaymentProcessor;
use App\Helpers\PaymentProcessors\Payouts\PayoutStrategy;


class PayoutByAirtelMoney implements PayoutStrategy
{
    use PaymentProcessor;
    
    public function __construct(PaymentOption $method)
    {
        $this->processor = $this->getProcessor($method);
        $this->provider = $this->getPaymentProvider($method);
    }

    
    public function validate($request)
    {
        try {
            $router = $this->getPaymentRouter($this->processor, 'pay_validate');
            $http_response = $this->provider->sendHttp($router, $request);
            return $http_response;
        } catch (Exception $e) {
            throw new Exception($e);
        }
    }

    public function pay($request)
    {
        try {
            $router = $this->getPaymentRouter($this->processor, 'pay');
            $http_response = $this->provider->sendHttp($router, $request);
            return $http_response;
        } catch (Exception $e) {
            throw new Exception($e);
        }
    }

    public function inquiry($request)
    {
        try {
            $router = $this->getPaymentRouter($this->processor, 'pay_inquiry');
            $http_response = $this->provider->sendHttp($router, $request);
            return $http_response;
        } catch (Exception $e) {
            throwException($e);
        }
    }

}
