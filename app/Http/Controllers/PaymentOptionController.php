<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePaymentOptionRequest;
use App\Http\Requests\UpdatePaymentOptionRequest;
use App\Models\PaymentOption;

class PaymentOptionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\StorePaymentOptionRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePaymentOptionRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PaymentOption  $paymentOption
     * @return \Illuminate\Http\Response
     */
    public function show(PaymentOption $paymentOption)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PaymentOption  $paymentOption
     * @return \Illuminate\Http\Response
     */
    public function edit(PaymentOption $paymentOption)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePaymentOptionRequest  $request
     * @param  \App\Models\PaymentOption  $paymentOption
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePaymentOptionRequest $request, PaymentOption $paymentOption)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PaymentOption  $paymentOption
     * @return \Illuminate\Http\Response
     */
    public function destroy(PaymentOption $paymentOption)
    {
        //
    }
}
