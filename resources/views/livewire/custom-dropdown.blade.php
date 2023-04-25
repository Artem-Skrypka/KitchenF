<div>
    <div class="main">
        <div class="parent">
            <div class="child">
                <form id="recipeForm" method="POST" class="column_form" action="{{ route('home') }}">
                    @csrf
                    <div class="group">      
                        <input id="recipeName" name="recipeName" type="text" required>
                        <span class="highlight"></span>
                        <span class="bar"></span>
                        <label>Recipe Name</label>
                    </div>
                    <div class="group_flex ingredients_Container" id="ingredientsContainer">      
                        <div class="ingredient">
                            <div class="group">
                                <input id="ingredients[0][name]" type="text" name="ingredients[0][name]" wire:model="ingredients.0" wire:change="updateIngredients" required>
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label for="ingredients[0][name]">Ingredient</label>
                            </div>
                            <div class="group">
                                <input id="ingredients[0][mass]" type="text" name="ingredients[0][mass]" required>
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label for="ingredients[0][mass]">Weight:</label>
                            </div>
                        </div>
                    </div>
                    <button type="button" id="addIngredientButton" class="btn">Add another Ingredient</button>
                    <div class="group group_max-width">
                        <textarea name="description" id="description" cols="30" rows="10" class="description" type="text"></textarea>
                        <span class="highlight"></span>
                        <span class="bar"></span>
                        <label class="descLabel" for="description">How to cook</label>
                    </div>
                    <input class="btn" type="submit" value="Save recipe">
                    {{-- <button type="submit">Save recipe</button> --}}
                </form>
            </div>
            <div class="child">
                <h1>
                    CALCULATED INGREDIENTS
                </h1>
                <form class="column_form" id="calculateForm" action="">
                    <div class="flexed_groups">
                        <div class="group_flex">
                            <div class="group">
    
                                {{-- Custom Select --}}
                                
                                        <select name="" onchange="" onclick="return false;" id="selectIngredient">
                                                @foreach ($ingredients as $ingredient)
                                                    <option value="{{ $ingredient }}">{{ $ingredient }}</option>
                                                @endforeach
                                        </select>
                                        
                                    <!-- Custom select structure --> 
                            
                            
                                </div> <!-- End div center   -->
                                
                            </div>
                        </div>
                        <div class="group_flex">
                            <div class="group">      
                                <input type="text" class="new_weight" required>
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Type new weight</label>
                            </div>
    
                        </div>
                        <input type="button" name="sumbit" data-popup='popup_new__proportion' class="popup-link btn" value="calculate">
                        <!-- <a href="#popup_new__proportion" class="popup-link">Calculate</a> -->
                    </div>
    
                </form>
            </div>
        </div>
    </div>
        <script>
            $(window).scroll(function() {
                if ($(document).scrollTop() > 50) {
                    $('.nav').addClass('affix');
                    console.log("OK");
                } else {
                    $('.nav').removeClass('affix');
                }
            });
        </script>
        <script src="{{ asset('https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js') }}"></script>
        <script src="{{ asset('assets/parallax/parallax.js') }}"></script>
        <script src="{{ asset('js/main.js') }}"></script>
        <script src="{{ asset('js/popups.js') }}"></script>
        <script src="{{ asset('https://kit.fontawesome.com/4ca2ece672.js') }}" crossorigin="anonymous"></script>
</div>
