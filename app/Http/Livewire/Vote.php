<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Vote extends Component
{
    public $question;

    public function mount($question)
    {
        $this->question = $question;
    }

    public function render()
    {
        return view('livewire.vote');
    }
}
