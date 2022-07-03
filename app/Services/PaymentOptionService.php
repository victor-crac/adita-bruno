<?php

namespace App\Services;

use App\Models\PaymentOption;
use App\Traits\UserTrait;

class PaymentOptionService
{
    use UserTrait;

    public function __construct()
    {
        $this->paymentOption = new PaymentOption();
    }


    public function add($request)
    {
        try {
            $data = $request->input();
            return $this->paymentOption->create($data);
        } catch (\Exception $e) {
            throw new \Exception("Failed to save payment option due to error: {$e->getMessage()}");
        }
    }

    private function uploadLogo($request)
    {
        try {
            $logo = $request->file('logo');
            $directory = 'uploads/' . \Str::snake($this->name) . 'logos/';
            //Generate a unique randrom number as file name
            $file_name = md5(microtime(true) . mt_Rand()) . '.' . $logo->getClientOriginalExtension();
            $path = $directory . $file_name;
            $logo->move(storage_path('app/public/' . $directory), $file_name);
        } catch (\Exception $e) {
            throw new \Exception($e->getMessage());
        }
        return $path;
    }
}
