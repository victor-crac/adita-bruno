<?php

namespace App\Http\Controllers\Api;

use App\Traits\ApiResponse;
use App\Models\CountryPaymentOption;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\CountryPaymentOptionResource;

class CountryPaymentOptionController extends Controller
{
    use ApiResponse;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        try {
            $payment_options = CountryPaymentOption::orderBy('id', 'DESC')->get();
            return $this->sendResponse(CountryPaymentOptionResource::collection($payment_options), '');
        } catch (\Exception $e) {
            return $this->sendExceptionError($e);
        }
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CountryPaymentOption  $countryPaymentOption
     * @return \Illuminate\Http\Response
     */
    public function show(CountryPaymentOption $countryPaymentOption)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CountryPaymentOption  $countryPaymentOption
     * @return \Illuminate\Http\Response
     */
    public function edit(CountryPaymentOption $countryPaymentOption)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CountryPaymentOption  $countryPaymentOption
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CountryPaymentOption $countryPaymentOption)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CountryPaymentOption  $countryPaymentOption
     * @return \Illuminate\Http\Response
     */
    public function destroy(CountryPaymentOption $countryPaymentOption)
    {
        //
    }
}
