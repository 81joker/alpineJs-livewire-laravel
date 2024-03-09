<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;

class ShowFiles extends Component
{
    public function render()
    {
        $files = User::all();
        return view('livewire.show-files',['items' => $files]);
    }
}
