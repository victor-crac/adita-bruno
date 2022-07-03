<?php

namespace App\Http\Resources;

use App\Models\RequestType;
use Vinkla\Hashids\Facades\Hashids;
use Illuminate\Http\Resources\Json\JsonResource;

class CountryPaymentOptionResource extends JsonResource
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
            'id' => Hashids::encode($this->id),
            'name' => $this->paymentOption,
            'payment_option' => $this->payment_option_id,
            'country' => $this->country->code,
            'name' => $this->name,
            'image' => $this->logo,
            'website' => $this->website,
            'supported_request_types' => RequestType::pluck('code')->implode(',')
        ];
    }
}
