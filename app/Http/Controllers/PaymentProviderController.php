<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePaymentProviderRequest;
use App\Http\Requests\UpdatePaymentProviderRequest;
use App\Models\PaymentProvider;

class PaymentProviderController extends Controller
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
     * @param  \App\Http\Requests\StorePaymentProviderRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePaymentProviderRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PaymentProvider  $paymentProvider
     * @return \Illuminate\Http\Response
     */
    public function show(PaymentProvider $paymentProvider)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PaymentProvider  $paymentProvider
     * @return \Illuminate\Http\Response
     */
    public function edit(PaymentProvider $paymentProvider)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePaymentProviderRequest  $request
     * @param  \App\Models\PaymentProvider  $paymentProvider
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePaymentProviderRequest $request, PaymentProvider $paymentProvider)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PaymentProvider  $paymentProvider
     * @return \Illuminate\Http\Response
     */
    public function destroy(PaymentProvider $paymentProvider)
    {
        //
    }
}
