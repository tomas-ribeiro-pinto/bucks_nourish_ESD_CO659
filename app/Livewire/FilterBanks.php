<?php

namespace App\Livewire;

use App\Http\Controllers\GiveAPIController;
use App\Http\Controllers\SearchController;
use App\Models\Foodbank;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Livewire\Component;

class FilterBanks extends Component
{
    public $filters;
    public $lat;
    public $lng;
    public $markers;
    public $foodbanks;
    public $s_foodbanks;

    public $currentFilters = [];

    public function mount($lat, $lng, $markers, $foodbanks, $s_foodbanks)
    {
        $this->lat = $lat;
        $this->lng = $lng;
        $this->markers = $markers;
        $this->foodbanks = $foodbanks;
        $this->s_foodbanks = $s_foodbanks;
    }
    public function render()
    {
        $this->filters = collect(["no-referral" => "No referrals needed", "volunteer" => "Volunteers needed"]);
        return view('livewire.filter-banks', [
            'filters' => $this->filters,
            'currentFilters' => $this->currentFilters,
        ]);
    }

    public function updateFilters($filter)
    {
        if (in_array($filter, $this->currentFilters)) {
            $this->currentFilters = array_diff($this->currentFilters, [$filter]);
        } else {
            $this->currentFilters[] = $filter;
        }
        $this->updateSearch();
        $this->foodbanks = $this->foodbanks->values();
    }

    public function updateSearch()
    {
        if (in_array("No referrals needed", $this->currentFilters)) {
            $this->foodbanks = $this->s_foodbanks->where('requires_referral', false);

            $temp_markers = collect();
            $i = 0;

            foreach($this->markers as $marker)
            {
                foreach($this->foodbanks as $foodbank)
                {
                    if($marker['slug'] == $foodbank->organization_slug)
                    {
                        $temp_markers = $temp_markers->push($marker);
                    }
                }
            }

            $this->markers = $temp_markers->toArray();
        }

        if (in_array("Volunteers needed", $this->currentFilters)) {
            $this->foodbanks = $this->foodbanks->where('requires_volunteer', true);

            $temp_markers = collect();

            foreach($this->markers as $marker)
            {
                foreach($this->foodbanks as $foodbank)
                {
                    if($marker['slug'] == $foodbank->organization_slug)
                    {
                        $temp_markers = $temp_markers->push($marker);
                    }
                }
            }

            $this->markers = $temp_markers->toArray();
        }
    }
}
