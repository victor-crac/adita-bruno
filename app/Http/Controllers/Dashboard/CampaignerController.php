<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Requests\StoreCampaignerRequest;
use App\Http\Requests\UpdateCampaignerRequest;
use App\Models\Campaigner;
use App\Http\Controllers\Controller;

class CampaignerController extends Controller
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
     * @param  \App\Http\Requests\StoreCampaignerRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCampaignerRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Campaigner  $campaigner
     * @return \Illuminate\Http\Response
     */
    public function show(Campaigner $campaigner)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Campaigner  $campaigner
     * @return \Illuminate\Http\Response
     */
    public function edit(Campaigner $campaigner)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCampaignerRequest  $request
     * @param  \App\Models\Campaigner  $campaigner
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCampaignerRequest $request, Campaigner $campaigner)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Campaigner  $campaigner
     * @return \Illuminate\Http\Response
     */
    public function destroy(Campaigner $campaigner)
    {
        //
    }
}
