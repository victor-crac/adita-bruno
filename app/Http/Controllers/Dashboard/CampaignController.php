<?php

namespace App\Http\Controllers\Dashboard;

use Inertia\Inertia;
use App\Models\Campaign;
use App\Traits\UserTrait;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCampaignRequest;
use App\Http\Requests\UpdateCampaignRequest;
use App\Services\CampaignService;

class CampaignController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Inertia::render(
            'Dashboard/Campaigns/Index',
            [
                'filters' => request()->all('search', 'trashed'),
                'campaigns' => Campaign::query()->when(request()->input("search"), function ($query, $search) {
                    $query->where('name', 'like', "%{$search}");
                })->with(['user', 'files'])
                    ->orderBy("name", 'DESC')
                    ->paginate(10)
                    ->withQueryString()
            ]
        );
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return Inertia::render('Dashboard/Campaigns/Create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCampaignRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCampaignRequest $request, CampaignService $campaignService)
    {
        try {

            $campaignService->storeCampaign($request);
        } catch (\Exception $e) {
            return redirect()->back()->withInput()->withErrors(['message' => "Failed to add campaign {$e->getMessage()}"]);
        }


        session()->flash('success_message', 'Campaign successfully succesfully added!');

        return redirect()->route('campaigns.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Campaign  $campaign
     * @return \Illuminate\Http\Response
     */
    public function show(Campaign $campaign) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Campaign  $campaign
     * @return \Illuminate\Http\Response
     */
    public function edit(Campaign $campaign) {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCampaignRequest  $request
     * @param  \App\Models\Campaign  $campaign
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCampaignRequest $request, Campaign $campaign) {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Campaign  $campaign
     * @return \Illuminate\Http\Response
     */
    public function destroy(Campaign $campaign){
        //
    }
}
