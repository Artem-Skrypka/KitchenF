$('.navTrigger').click(function () {
  $(this).toggleClass('active');
  console.log("Clicked menu");
  $("#mainListDiv").toggleClass("show_list");
  $("#mainListDiv").fadeIn();

});

const addButton = document.getElementById('addIngredientButton');
const container = document.getElementById('ingredientsContainer');
let ingredientCount = 1;

addButton.addEventListener('click', () => {
  const newIngredient = document.createElement('div');
  newIngredient.classList.add('ingredient');

  newIngredient.innerHTML = `
            <label for="ingredients[${ingredientCount}][name]">Ingredient:</label>
            <input id="ingredients[${ingredientCount}][name]" type="text" name="ingredients[${ingredientCount}][name]" placeholder="Type name of Ingredient..." required>

            <label for="ingredients[${ingredientCount}][mass]">Mass:</label>
            <input id="ingredients[${ingredientCount}][mass]" type="text" name="ingredients[${ingredientCount}][mass]" placeholder="Type mass of Ingredient" required>
        `;

  container.appendChild(newIngredient);
  ingredientCount++;
});

// var rowNum = 1;

// $('#add').click(function () {
//   rowNum++;
//   var ing = $('#ingredient');
//   var mass = $('#mass');
//   var ingC = ing.clone(false);
//   var massC = mass.clone(false);
//   var ingText = 'ingredient' + rowNum;
//   var massText = 'mass' + rowNum;
//   ingC.attr('id', ingText);
//   massC.attr('id', massText);
//   ingC.attr('name', ingText);
//   massC.attr('name', massText);
//   var new_ing = $('<label for="ingredient">'+ ingText +'</label>');
//   var new_mass = $('<label for="mass">'+ massText +'</label>');
//   var new_ingClone = new_ing.clone(false);
//   var new_massClone = new_mass.clone(false);
//   new_ingClone.attr('for', ingText);
//   new_massClone.attr('for', massText);
//   var ing_div = $('<div class="ingredient Number'+ rowNum +'"></div>').append(new_ingClone, ingC, new_massClone, massC);
//   $('#add').before(ing_div);

// });
