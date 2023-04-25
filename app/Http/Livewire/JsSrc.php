<?php

namespace App\Http\Livewire;

use Livewire\Component;

class JsSrc extends Component
{
    public function render()
    {
        return <<<'blade'
            <script src="{{ asset('https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js') }}"></script>
            <script src="{{ asset('assets/parallax/parallax.js') }}"></script>
            <script src="{{ asset('js/main.js') }}"></script>
            <script src="{{ asset('js/popups.js') }}"></script>
            <script src="{{ asset('https://kit.fontawesome.com/4ca2ece672.js') }}" crossorigin="anonymous"></script>
        blade;
    }
}
