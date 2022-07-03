<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCampaignRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'business_name' => ['required', 'max:100'],
            'registration_number' => ['required', 'max:100'],
            'physical_address' => ['required'],
            'phone' => ['required','max:12'],
            'email' => ['required', 'email'],
            'name' => ['required', 'min:6'],
            'banner' => ['required', 'file', 'mimes:jpeg,jpg,png,gif','max:5000' ],
            'target_amount' => ['required'],
            'description' => ['required']
        ];
    }
}
