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
    public $markers;
    public $selectedFoodbank;

    public function mount($search, $currentFilters, $foodbanks, $markers)
    {
        $this->search = $search;
        $this->currentFilters = $currentFilters;
        $this->selectedFoodbank = new Foodbank();
        $this->foodbanks = $foodbanks;
        $this->markers = $markers;
    }

    public function render()
    {
        $this->filters = collect(["no-referral" => "No referrals needed", "volunteer" => "Volunteers needed"]);
        return view('livewire.filter-banks', [
            'filters' => $this->filters,
            'currentFilters' => $this->currentFilters,
            'selectedFoodbank' => $this->selectedFoodbank,
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
        $this->selectedFoodbank = $foodbank;
    }
}
