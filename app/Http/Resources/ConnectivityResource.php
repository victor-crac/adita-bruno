<?php

namespace App\Http\Resources;

use Vinkla\Hashids\Facades\Hashids;
use Illuminate\Http\Resources\Json\JsonResource;

class ConnectivityResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'code' => Hashids::encode($this->id),
            'name' => ($this->requestType->name ?? ""),
            'url' => $this->api_url,
            'provider' =>  $this->countryPaymentOption->paymentOption->name,
            'country' =>  $this->countryPaymentOption->country->name,
            'remark' =>  $this->requestType->description,
            'logo' =>  $this->countryPaymentOption->logo,
        ];
    }
}
