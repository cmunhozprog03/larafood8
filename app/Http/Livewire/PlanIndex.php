<?php

namespace App\Http\Livewire;

use App\Models\Plan;
use Livewire\WithPagination;

use Livewire\Component;

class PlanIndex extends Component
{
    use WithPagination;

    public $search;

    protected $paginationTheme = 'bootstrap';

    public function render()
    {
        $plans = Plan::where('name', 'LIKE', '%' . $this->search . '%')
                     ->orWhere('description', 'LIKE', '%' . $this->search . '%')
                     ->orWhere('price', 'LIKE', '%' . $this->search . '%')
                     ->paginate();
        return view('livewire.plan-index', compact('plans'));
    }
}
