<?php

namespace App\Livewire;

use App\Http\Controllers\GiveAPIController;
use App\Http\Controllers\SearchController;
use App\Models\Foodbank;
use Livewire\Component;

class FilterBanks extends Component
{
    public $filters;
    public $search;
    public $currentFilters;
    public $foodbanks;
    public $foodbankNeeds;
    public $markers;
    public $selectedFoodbank;
    public $selectedFoodbankNeeds;

    public $lat;
    public $lng;

    public function mount($search, $currentFilters, $foodbanks, $markers, $lat, $lng)
    {
        $this->search = $search;
        $this->currentFilters = $currentFilters;
        $this->selectedFoodbank = new Foodbank();
        $this->foodbankNeeds = collect();
        $tempFoodbanks = collect();

        foreach ($foodbanks as $foodbank)
        {
            $needs = $foodbank['needs'];
            $this->foodbankNeeds->put($foodbank->organization_slug, $needs);
            data_forget($foodbank, 'needs');
            $tempFoodbanks->push($foodbank);
        }

        $this->foodbanks = $tempFoodbanks;
        $this->markers = $markers;
        $this->lat = $lat;
        $this->lng = $lng;
    }

    public function render()
    {
        // Re-render the results list fetching information from the GiveAPI TODO:: Improve efficiency by fixing bug
        $new_search = (new GiveAPIController)->search($this->lat, $this->lng);
        $this->foodbanks = $new_search[0];
        $this->markers = $new_search[1];
        $this->filters = collect(["no-referral" => "No referrals needed", "volunteer" => "Volunteers needed"]);
        return view('livewire.filter-banks');
    }

    public function updateFilters($filter)
    {
        if (in_array($filter, $this->currentFilters)) {
            $this->currentFilters = array_diff($this->currentFilters, [$filter]);
        } else {
            $this->currentFilters[] = $filter;
        }
    }

    public function selectFoodbank($foodbank)
    {
        $this->selectedFoodbankNeeds = $this->foodbankNeeds[$foodbank['organization_slug']] ?? collect();
        $this->selectedFoodbank = $foodbank;
    }
}
