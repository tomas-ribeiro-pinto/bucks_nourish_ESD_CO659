<?php

namespace App\Http\Controllers;

use App\Models\Foodbank;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class SearchController extends Controller
{
    public function index(): View
    {
        // Default location is set to the center of high Wycombe
        $lat = 51.6297;
        $lng = -0.7493;

        // Get the High Wycombe's closest foodbanks
        $search = (new GiveAPIController)->search($lat, $lng);
        $foodbanks = $search[0] ?: [];
        $markers = $search[1] ?: [];

        $s_foodbanks = $this->getSavedFoodbanks($foodbanks);

        return view('welcome', compact("lat", "lng", "markers", "foodbanks", "s_foodbanks"));
    }

    public function search(Request $request): View
    {
        $search = $request->input('search');

        // Call MapBox API
        $response = Http::get('https://api.mapbox.com/geocoding/v5/mapbox.places/' . $search . '.json', [
            'access_token' => env('MAPS_MAPBOX_ACCESS_TOKEN'),
        ]);

        // Get the latitude and longitude of the search location TODO: Handle errors
        $response = json_decode($response);
        $lat = $response->features[0]->center[1];
        $lng = $response->features[0]->center[0];

        $search = (new GiveAPIController)->search($lat, $lng);
        $foodbanks = $search[0];
        $markers = $search[1];

        $s_foodbanks = $this->getSavedFoodbanks($foodbanks);

        return view('welcome', compact("lat", "lng", "markers", "foodbanks", "s_foodbanks"));
    }

    public function getSavedFoodbanks($foodbanks)
    {
        $s_foodbanks = Foodbank::all();
        $temp_foodbanks = collect();

        foreach ($foodbanks as $foodbank)
        {
            foreach($s_foodbanks as $s_foodbank)
            {
                if($foodbank->organization_slug == $s_foodbank->organization_slug)
                {
                    $foodbank->requires_referral = $s_foodbank->requires_referral;
                    $foodbank->requires_volunteer = $s_foodbank->requires_volunteer;
                    $temp_foodbanks->push($s_foodbank);
                }
            }
        }

        return $temp_foodbanks;
    }
}