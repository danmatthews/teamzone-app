<?php

namespace App\Livewire\Components;

use Livewire\Component;

class Header extends Component
{

    public string $backTo;
    public string $title;

    public function render()
    {
        return view('livewire.components.header');
    }
}
