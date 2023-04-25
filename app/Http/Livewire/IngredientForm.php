<?php

namespace App\Http\Livewire;

use Livewire\Component;

class IngredientForm extends Component
{
    public array $ingredients;
    
    protected $rules = [
        'ingredients.*.name' => 'required|string',
        'ingredients.*.weight' => 'required|numeric',
    ];

    public function mount()
    {
        $this->ingredients[] = [
            'name' => '',
            'weight' => ''
        ];
        $this->emit('ingredientsUpdated', $this->ingredients);
    }

    public function addIngredient()
    {
        $this->validate(['ingredients.*.name' => 'required|string', 'ingredients.*.weight' => 'required|numeric']);
        array_push($this->ingredients, ['name' => '', 'weight' => '']);
        $this->emit('ingredientsUpdated', $this->ingredients);
    }

    public function updateIngredients()
    {
        $this->validate(['ingredients.*.name' => 'required|string', 'ingredients.*.weight' => 'required|numeric']);
        $this->ingredients = array_values($this->ingredients); // re-index the array
        $this->emit('ingredientsUpdated', $this->ingredients);
    }

    public function removeIngredient($index)
    {
        unset($this->ingredients[$index]);
        $this->updateIngredients();
        $this->emit('ingredientsUpdated', $this->ingredients);
    }


    public function render()
    {
        return view('livewire.ingredient-form');
    }
}
