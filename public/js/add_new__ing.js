const addButton = document.getElementById('addIngredientButton');
const container = document.getElementById('ingredientsContainer');
let ingredientCount = 1;

addButton.addEventListener('click', () => {
  const newIngredient = document.createElement('div');
  newIngredient.classList.add('ingredient');

  newIngredient.innerHTML = `
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
  `;

  container.appendChild(newIngredient);
  ingredientCount++;
});