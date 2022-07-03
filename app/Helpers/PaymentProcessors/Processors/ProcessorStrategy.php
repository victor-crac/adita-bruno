<?php

namespace App\Helpers\PaymentProcessors\Processors;

interface ProcessorStrategy
{
    /* We'll need to standardize the request for use by the Payment Processor */
    public function prepareRequest($router,$request);
    /* We'll need to standardize the response for our own use */
    public function prepareResponse($response);
    public function sendHttp($router,$request);

}
