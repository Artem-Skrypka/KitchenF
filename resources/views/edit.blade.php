@extends('layouts.layout')

@section('content')
    <div class="box_full">
        <form id="recipeForm" method="POST" class="column_form" action="/recipe/{{ $recipe->id }}">
            @csrf
            @method('PUT')
            <div class="group">
                <input id="recipeName" name="recipeName" type="text" value="{{ $recipe->title }}" required>
                <span class="highlight"></span>
                <span class="bar"></span>
                <label>Recipe Name</label>
            </div>
            <div class="group_flex ingredients_Container" id="ingredientsContainer">
                @php
                    $ingredientCount = -1;
                @endphp
                @foreach ($recipe->ingredients as $ingredient)
                @php
                    $ingredientCount++;
                @endphp
                <div class="ingredient">
                    <div class="group">
                        <input id="ingredients[{{ $ingredientCount }}][name]" type="text" name="ingredients[0][name]" value="{{ $ingredient['name'] }}"  required>
                        <span class="highlight"></span>
                        <span class="bar"></span>
                        <label for="ingredients[{{ $ingredientCount }}][name]">Ingredient</label>
                    </div>
                    <div class="group">
                        <input id="ingredients[{{ $ingredientCount }}][mass]" type="text" name="ingredients[0][mass]" value="{{ $ingredient['mass'] }}"  required>
                        <span class="highlight"></span>
                        <span class="bar"></span>
                        <label for="ingredients[{{ $ingredientCount }}][mass]">Weight:</label>
                    </div>
                </div>
                @endforeach
            </div>
            <button type="button" id="addIngredientButton" class="btn">Add another Ingredient</button>
            <div class="group group_max-width">
                <textarea name="description" id="description" cols="30" rows="10" class="description" type="text">{{ $recipe->description }}</textarea>
                <span class="highlight"></span>
                <span class="bar"></span>
                <label class="descLabel" for="description">How to cook</label>
            </div>
            <input class="btn" type="submit" value="Edit recipe">
            {{-- <button type="submit">Save recipe</button> --}}
        </form>
    </div>
@endsection

@section('js_src')
    <script src="{{ asset('https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js') }}"></script>
    <script src="{{ asset('js/header_dropdown.js') }}"></script>
    <script src="{{ asset('js/custom_inputs.js') }}"></script>
    <script src="{{ asset('js/custom_select.js') }}"></script>
@endsection
