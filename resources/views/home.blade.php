@extends('layouts.layout')

@section('content')
                <div class="container">
                    <div class="main">
                        <div class="parent">
                            <div class="child">
                                @livewire('ingredient-form')
                            </div>
                            <div class="child">
                                <h1>
                                    CALCULATED INGREDIENTS
                                </h1>
                                @livewire('ingredient-selector')
                            </div>
                        </div>
                    </div>
                </div>
@endsection

@section('js_src')
    <script src="{{ asset('https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/parallax/parallax.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
    <script src="{{ asset('js/popups.js') }}"></script>
    <script src="{{ asset('https://kit.fontawesome.com/4ca2ece672.js') }}" crossorigin="anonymous"></script>
@endsection
