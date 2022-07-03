<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\Campaign;
use App\Http\Resources\CampaignResource;
use App\Services\CampaignService;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->campaignService = new CampaignService();
    }

    public function index()
    {

        $campaigns  = $this->campaignService->listCampaigns();

        return Inertia::render(
            'Home',
            [
                'campaigns' => CampaignResource::collection($campaigns)
            ]
        ); //Inertia::render('componentname',['key'=>'data']);
    }
}
