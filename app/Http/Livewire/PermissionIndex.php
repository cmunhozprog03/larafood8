<?php

namespace App\Http\Livewire;

use App\Models\Permission;
use Livewire\Component;
use Livewire\WithPagination;

class PermissionIndex extends Component
{
    use WithPagination;

    public $search;

    protected $paginationTheme = 'bootstrap';

    public function render()
    {
        $permissions = Permission::where('name', 'LIKE', '%' . $this->search . '%')
                            ->orWhere('description', 'LIKE', '%' . $this->search . '%')
                            ->paginate();
                            
        return view('livewire.permission-index', compact('permissions'));
    }
}
