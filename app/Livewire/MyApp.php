<?php

namespace App\Livewire;

use Livewire\Attributes\On;
use Livewire\Component;

class MyApp extends Component
{
    public bool $show = true;

    #[On('toggle-secret')]
    public function toggleSecret()
    {
        $this->show = ! $this->show;
    }

    public function render()
    {
        return view('livewire.my-app');
    }
}
