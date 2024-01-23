<?php

namespace App\Livewire;

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

    public function mount($search, $currentFilters, $foodbanks, $markers)
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
    }

    public function render()
    {
        $this->filters = collect(["no-referral" => "No referrals needed", "volunteer" => "Volunteers needed"]);
        return view('livewire.filter-banks', [
            'filters' => $this->filters,
            'currentFilters' => $this->currentFilters,
            'selectedFoodbank' => $this->selectedFoodbank,
            'selectedFoddbankNeeds' => $this->selectedFoodbankNeeds,
            'foodbanks' => $this->foodbanks,
            'markers' => $this->markers,
        ]);
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
        $this->selectedFoodbankNeeds = $this->foodbankNeeds[$foodbank['organization_slug']] ?: collect();
        $this->selectedFoodbank = $foodbank;
    }
}
