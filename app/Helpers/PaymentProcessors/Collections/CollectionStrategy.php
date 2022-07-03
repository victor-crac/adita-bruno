<?php

namespace App\Helpers\PaymentProcessors\Collections;

//Handle any collections-payment for services for Asomata related Issues
interface CollectionStrategy
{
    /*Algorithms for the pattern*/
    public function validate($request);
    public function collect($request);
    public function inquiry($request);
   
}
