<?php

namespace App\Traits;

Trait HttpRequestProcessor
{
     /* Transform the Processor's request for our own use  */
     public function standardizeHttpResponse($response)
     {
         return $response;
     }
}
