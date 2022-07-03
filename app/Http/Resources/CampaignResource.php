<?php

namespace App\Http\Resources;

// use Vinkla\Hashids\Facades\Hashids;
use Illuminate\Http\Resources\Json\JsonResource;

class CampaignResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' =>   $this->id,  // \Hashids::encode($this->id),  //didn't know what this meant but t could throw errors
            'slug' => $this->slug,
            'user' => $this->user,
            'name' => $this->name,
            'tags' => $this->tags,
            'banner' => asset("storage/{$this->banner}"),
            'owner' =>$this->campaigner,
            'min_amount' => $this->min_amount,
            'target_amount' => $this->target_amount,
            'currency' => $this->currency->code ?? "UGX",
            'is_open' => $this->is_open,
            'allow_installment_payments' => $this->allow_installment_payments,
            'description' => $this->description,
            'active' => $this->active,
            'created_at' => $this->created_at,
            'last_created' => $this->created_at->diffForHumans(),
        ];
    }
}
