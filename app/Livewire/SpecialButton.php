<?php

namespace App\Livewire;

use Livewire\Component;

class SpecialButton extends Component
{
    public function toggleSecret()
    {
        $this->dispatch('toggle-secret');
    }

    public function render()
    {
        return view('livewire.special-button');
    }
}
