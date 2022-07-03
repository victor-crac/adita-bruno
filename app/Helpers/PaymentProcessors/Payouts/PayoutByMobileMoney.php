<?php

namespace App\Helpers\PaymentProcessors\Payouts;

use App\Helpers\PaymentProcessors\Payouts\PayoutStrategy;
use App\PaymentMethod;
use App\ProviderPaymentMethod;
use APp\Traits\PaymentProcessor;
use Exception;

class PayoutByMobileMoney implements PayoutStrategy
{
    use PaymentProcessor;
    
    public function __construct(PaymentMethod $method)
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
            throwException($e);
        }
    }

    public function pay($request)
    {
        try {
            $router = $this->getPaymentRouter($this->processor, 'pay');
            $http_response = $this->provider->sendHttp($router, $request);
            return $http_response;
        } catch (Exception $e) {
            throwException($e);
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
