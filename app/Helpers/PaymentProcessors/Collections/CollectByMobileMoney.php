<?php

namespace App\Helpers\PaymentProcessors\Collections;

use App\Models\PaymentOption;
use App\PaymentMethod;
use APp\Traits\PaymentProcessor;
use Exception;

class CollectByMobileMoney implements CollectionStrategy
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
            $router = $this->getPaymentRouter($this->processor, 'validate');
            $http_response = $this->provider->sendHttp($router, $request);
            return $http_response;
        } catch (Exception $e) {
            throw new Exception($e);
        }
    }

    public function collect($request)
    {
        //dd($this->processor);
        try {        
            $router = $this->getPaymentRouter($this->processor, 'collect');
            $http_response = $this->provider->sendHttp($router, $request);
            return $http_response;
        } catch (Exception $e) {
            throw new Exception($e);
        }
    }

    public function inquiry($request)
    {
        try {
            $router = $this->getPaymentRouter($this->processor, 'inquiry');
            $http_response = $this->provider->sendHttp($router, $request);
            return $http_response;
        } catch (Exception $e) {
            throw new Exception($e);
        }
    }

}
