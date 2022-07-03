<?php

namespace App\Helpers\PaymentProcessors\Payouts;

use App\PaymentMethod;

//Handle any payments off Asomata Account
interface PayoutStrategy
{
    /*Algorithms for the pattern*/
    public function validate($request);
    public function pay($request);
    public function inquiry($request);
}
