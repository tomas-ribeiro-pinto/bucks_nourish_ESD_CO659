<?php

namespace App\Http\Controllers;

use App\Models\Foodbank;
use App\Models\Item;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class GiveAPIController extends Controller
{
    protected $base_url = "https://www.givefood.org.uk/api/2/";
    protected $foodbanks_search_endpoint ="foodbanks/search/";
    public function search($lat, $lng)
    {
        // Call GiveAPI
        $call = Http::get($this->base_url . $this->foodbanks_search_endpoint, [
            'lat_lng' => $lat . "," . $lng
        ]);

        // Get the latitude and longitude of the search location TODO: Handle errors
        $response = json_decode($call);

        //['lat' => $lat ?: 0, 'long' => $lng ?: 0]

        // Create a collection with the latitude and longitude of each foodbank
        $markers = collect();
        $foodbanks = collect();

        if($response != null)
        {
            foreach ($response as $foodbank) {
                $lat_lng = $foodbank->lat_lng;
                $lat_lng = explode(",", $lat_lng);

                $markers->push([
                    'lat' => $lat_lng[0],
                    'long' => $lat_lng[1],
                    'info' => $foodbank->name,
                    'slug' => $foodbank->slug,
                ]);

                if(Foodbank::all()->where('organization_slug', $foodbank->slug)->first() != null)
                {
                    $bank = Foodbank::all()->where('organization_slug', $foodbank->slug)->first();
                }
                else
                {
                    $bank = new Foodbank();
                    $bank->name = $foodbank->name;
                    $bank->type = null;
                    $bank->logo_annex_id = null;
                    $bank->organization_slug = $foodbank->slug;
                    $bank->phone = $foodbank->phone;
                    $bank->email = $foodbank->email;
                    $bank->address = $foodbank->address;
                    $bank->website_url = $foodbank->urls->homepage;
                    $bank->requires_referral = null;
                    $bank->requires_volunteer = null;
                    $bank->volunteer_information = null;
                    $bank->opening_hours = null;
                    $bank->accessibility = null;
                    $bank->comments = null;
                }
                $items = explode(PHP_EOL, $foodbank->needs->needs);
                $bank->needs = $items;
                $foodbanks->push($bank);
            }
        }
        else{
            $foodbanks = [];
        }

        $search_results = [$foodbanks, $markers->toArray()];

        return $search_results;
    }
}
