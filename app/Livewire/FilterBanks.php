<?php

namespace App\Livewire;

use Livewire\Component;

class FilterBanks extends Component
{
    public $filters;
    public $search;
    public $currentFilters;

    public function mount($search, $currentFilters)
    {
        $this->search = $search;
        $this->currentFilters = $currentFilters;
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
    }
}
