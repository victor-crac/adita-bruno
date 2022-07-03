<?php

namespace App\Services;

use App\Models\Campaign;

use App\Traits\UserTrait;

class CampaignService
{
    use UserTrait;

    public function __construct()
    {
        $this->campaigns = new Campaign();
    }

    public function listCampaigns()
    {
        try{
        $campaigns = $this->campaigns->orderBy("created_at")->get();
        return $campaigns;
        }catch(\Exception $e){
            throw new \Exception("Error listing campaigns : {$e->getMessage()}");
        }
    }

    public function storeCampaign($request)
    {
        try {
            \DB::beginTransaction();

            $campaign = $this->saveCampaign($request);
            //upload and move any photos if provided
            if ($request->hasFile('banner')) {
                list($path, $file_name) = $this->moveFile($request->banner);
                $campaign->banner = $path;
                $campaign->save();
                $campaign->files()->create(['description' => $file_name, 'path' => $path]);
            }

            \DB::commit();
        } catch (\Exception $e) {
            \DB::rollback();
            throw new \Exception("Failed to add campaign {$e->getMessage()}");
        }
    }


    private function saveCampaign($request)
    {
        try {

            if ($request->filled("business_name")) {
                $business_data =   $request->only(
                    "business_name",
                    "email",
                    "phone",
                    "registration_number",
                    "physical_address",
                    "website"
                );

                $business_data["name"] = $business_data["business_name"];
                unset($business_data["business_name"]);
            }
            $campaign_data = $request->except([
                "business_name",
                "email",
                "banner",
                "phone",
                "registration_number",
                "physical_address",
                "website"
            ]);

            $loggedInUser = $this->returnLoggedInUser();
            $business = $loggedInUser->campaignUsers()->create($business_data);

            $campaign = $business->campaigns()->create($campaign_data);
            $campaign->user()->associate($loggedInUser);
            $campaign->save();
            // Now add tags
            if ($request->filled('tags'))
                $campaign->tag(explode(',', $request->tags));
        } catch (\Exception $e) {
            throw new \Exception($e->getMessage());
        }
        return $campaign;
    }


    private function moveFile($file)
    {
        //create the photos
        $directory = 'uploads/causes/banners/';
        $file_name = md5(microtime(true) . mt_Rand()) . '.' . $file->getClientOriginalExtension();
        $path = $directory . $file_name;
        $file->move(storage_path('app/public/' . $directory), $file_name);
        return array($path, $file_name);
    }
}
