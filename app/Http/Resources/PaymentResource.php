<?php

namespace App\Http\Resources;

use Carbon\Carbon;
use Vinkla\Hashids\Facades\Hashids;
use Illuminate\Http\Resources\Json\JsonResource;

class PaymentResource extends JsonResource
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
            'transaction_id'=> $this->transaction_id,
            'amount' => $this->amount,
            'currency' => $this->currency,
            'status' => $this->paymentStatus->name,
            'customer_email' => $this->email,
            'customer_phone' => $this->phone_number,
            'sender' => $this->sender_number,
            'receiver' => $this->receiver_number,
            'reference'=> $this->vendor_reference,
            'message' => $this->vendor_message,
            'reason' => $this->reason,
            'payment_method' => ($this->paymentProvider->paymentOption->name),
            'country' => ($this->paymentProvider->country->code),          
            'payment_date' => $this->created_at->format("Y-m-d H:m")
        ];
    }
}
