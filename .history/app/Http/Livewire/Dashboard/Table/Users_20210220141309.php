<?php

namespace App\Http\Livewire\Dashboard\Table;

use App\Models\User;
use Livewire\Component;

class Users extends Component
{

    public $users;
    public $name;

    public function render()
    {
        $query = User::query();
        if($this->name != '') {
            $this->users = $query->where('name', 'LIKE', '%'.$this->name.'%');
        }
        $this->users = $query->get();
        return view('livewire.dashboard.table.users');
    }
}