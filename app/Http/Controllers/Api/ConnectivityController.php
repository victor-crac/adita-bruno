<?php

namespace App\Http\Controllers\Api;

use App\Traits\ApiResponse;
use App\Models\Connectivity;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\ConnectivityResource;

class ConnectivityController extends Controller
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
            $connections = Connectivity::orderBy('id', 'DESC')->get();
            return $this->sendResponse(ConnectivityResource::collection($connections), '');
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
     * @param  \App\Models\Connectivity  $connectivity
     * @return \Illuminate\Http\Response
     */
    public function show(Connectivity $connectivity)
    {
        try {
            return $this->sendResponse(new ConnectivityResource($connectivity), '');
        } catch (\Exception $e) {
            return $this->sendExceptionError($e);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Connectivity  $connectivity
     * @return \Illuminate\Http\Response
     */
    public function edit(Connectivity $connectivity)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Connectivity  $connectivity
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Connectivity $connectivity)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Connectivity  $connectivity
     * @return \Illuminate\Http\Response
     */
    public function destroy(Connectivity $connectivity)
    {
        //
    }
}
