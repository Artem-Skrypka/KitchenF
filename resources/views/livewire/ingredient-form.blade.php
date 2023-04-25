<div id="ingredientsContainer">
    <form id="first_form" class="column_form" action="{{ route('home') }}" method="POST">
        @csrf
        <div class="group">
            <input type="text" required>
            <span class="highlight"></span>
            <span class="bar"></span>
            <label>Recipe Name</label>
        </div>
        <div class="group_flex ingredients_Container" id="ingredientsContainer">
            @foreach ($ingredients as $index => $ingredient)
                <div class="ingredient">
                    <div class="group">
                        @error('ingredients.*.name')
                            {{ $message }}
                        @enderror
                        <input type="text" wire:model="ingredients.{{ $index }}.name" wire:change="updateIngredients" required>
                        <span class="highlight"></span>
                        <span class="bar"></span>
                        <label for="ingredient[{{$index}}][name]">Ingredient</label>
                    </div>
                    <div class="group"> 
                        @error('ingredients.*.weight')
                            {{ $message }}
                        @enderror
                        <input type="text" wire:model="ingredients.{{ $index }}.weight" wire:change="updateIngredients" required>
                        <span class="highlight"></span>
                        <span class="bar"></span>
                        <label for="ingredient[{{$index}}][weight]">Weight:</label>
                    </div>
                    <button type="button" wire:click.prevent="removeIngredient({{ $index }})">Remove</button>
                </div>
            @endforeach
        </div>
        <button type="button" wire:click.prevent="addIngredient">Add Ingredient</button>
        <div class="group group_max-width">
            <textarea name="description" id="description" cols="30" rows="10" class="description" type="text"></textarea>
            <span class="highlight"></span>
            <span class="bar"></span>
            <label class="descLabel" for="description">How to cook</label>
        </div>
        <input class="btn" type="button" value="Save recipe" name="addRecipe">
    </form>
    <ul>
            @foreach ($ingredients as $index => $ingredient)
                <li>{{ $ingredient['name'] }}</li>
            @endforeach
    </ul>
</div>





