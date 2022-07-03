<?php

namespace App\Helpers\PaymentProcessors\Collections;

use App\Helpers\PaymentProcessors\Processors\ProcessorStrategy;

use Exception;
use anlutro\cURL\cURL;
use App\Traits\PaymentProcessor;

class AfricanBoma implements ProcessorStrategy
{
    use PaymentProcessor;

    public function __construct()
    {
        $this->curl = new cURL();
        $this->transfer_type = 2;
        $this->debitAccount = 1100; //My Africa Boma Account Here
    }

    /* Transform our request in accordance with the Processor  */

    public function prepareRequest($router, $request)
    {
        $api_key = $router->provider->api_key;
        $route_name = $router->route;
        switch ($route_name) {
            case stripos($route_name, 'collect'):
                $request = [
                    'api_key' => $api_key,
                    'transferType' => $this->transfer_type,
                    'sourceReference' => $request->input('customer_number'),
                    'amount' => (float)($request->input('amount')),
                    'reason' => $request->input('reason'),
                    'requestRef' => $this->generatePaymentRef()
                ];
                break;
            case stripos($route_name, 'pay'):
                    $request = [
                        'api_key' => $api_key,
                        'transferType' => $this->transfer_type,
                        'debitAccount' => $this->debitAccount,
                        'currency' => $request->input('currency'),
                        'amount' => $request->input('amount'),
                        'reason' => $request->input('reason'),
                        'receiverReference'=> $request->input('customer_number'),
                        'senderRef' => $this->generatePaymentRef()
                    ];
                    break;
            case  stripos($route_name, 'inquiry'):
                $request = [
                    'api_key' => $api_key,
                    'requestId' => $request->input('vendor_reference')
                ];
                break;
            case  stripos($route_name, 'pay_inquiry'):
                    $request = [
                        'api_key' => $api_key,
                        'paymentId' => $request->input('vendor_reference')
                    ];
                    break;
            
        }
        return json_encode($request);
    }

    /* Transform the Processor's request for our own use  */
    public function prepareResponse($response)
    {
        return $response;
    }

    /*  SPecify if its a POST OR GET  */
    public function  sendHttp($router, $request)
    {
        try {
            // newRequest, newJsonRequest and newRawRequest returns a Request object
            $request_body = $this->prepareRequest($router, $request);
            $request = $this->curl->newRawRequest($router->http_method, $router->url, $request_body)
                                  ->setHeader('Accept', 'application/json')
                                  ->setHeader('Content-Type', 'application/json');
            $response =  $request->send();
            if($response->statusCode != 200)
                throw new Exception('Server error encountered from provider');
            return $this->prepareResponse($response->body);

        } catch (Exception $e) {
            throw new Exception($e);
        }
    }
}
