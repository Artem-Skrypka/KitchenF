<div id="popup_AddNewRecipe" class="popup">
    <div class="popup_body">
        <div class="popup_content">
            <div class="close_icon">
                <a href="" class="popup_close close-popup">
                    <i class="fa-regular fa-circle-xmark fa-2xl" style="color: darkorange;"></i>
                </a>
            </div>
            <h1 class="nw_h1">Add new recipe: </h1>
            <form id="first_form" class="column_form" action="">
                <div class="group">      
                    <input type="text" required>
                    <span class="highlight"></span>
                    <span class="bar"></span>
                    <label>Recipe Name</label>
                </div>
                <div class="group_flex ingredients_Container" id="ingredientsContainer">      
                    <div class="ingredient">
                        <div class="group">
                            <input id="ingredients[0][name]" type="text" name="ingredients[0][name]" required>
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
                <input class="btn" type="button" value="Save recipe">
            </form>
        </div>
    </div>
</div>