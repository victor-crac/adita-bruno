<?php

namespace App\Traits;

trait UserTrait
{
    public function returnLoggedInUser()
    {
        return auth()->check() ? auth()->user() : NULL;
    }

}
