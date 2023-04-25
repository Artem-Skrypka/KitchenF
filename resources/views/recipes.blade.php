@extends('layouts.layout')

@section('content')
    <x-popup_add_new_recipe />
    <main class="grid">
        @foreach ($recipes as $recipe)
            <article class="card">
                <img src="https://picsum.photos/600/400?image=1083" alt="Sample photo">
                <div class="text">
                    <h2>{{ $recipe->title }}</h2>
                    <p>{{ Str::limit($recipe->description, 200) }}</p>
                    <div class="btns">
                        <a href="/recipe/{{ $recipe->id }}">
                            <div class="btn_box btn_read">
                                <i class="fa-solid fa-book fa-2xl"></i>
                                <span class="btn_span">Read</span>
                            </div>
                        </a>
                        <a href="/recipe/{{ $recipe->id }}/edit">
                            <div class="btn_box btn_edit">
                                <i class="fa-solid fa-pencil fa-2xl"></i>
                                <span class="btn_span">Edit</span>
                            </div>
                        </a>
                        <a href="#">
                            <div class="btn_box btn_delete">
                                <i class="fa-solid fa-trash-can fa-2xl"></i>
                                <span class="btn_span">Delete</span>
                            </div>
                        </a>
                    </div>
                </div>
            </article>
        @endforeach
    </main>
@endsection

@section('js_src')
    <script src="{{ asset('https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js') }}"></script>
    <script src="{{ asset('js/header_dropdown.js') }}"></script>
    <script src="{{ asset('js/custom_select.js') }}"></script>
    <script src="{{ asset('js/custom_inputs.js') }}"></script>
    <script src="{{ asset('js/popups.js') }}"></script>
    <script src="{{ asset('js/show_ingredients.js') }}"></script>
@endsection
