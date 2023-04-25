<?php

namespace App\Http\Livewire;

use App\Services\MassCounterInterface;
use Livewire\Component;

class IngredientSelector extends Component
{
    public array $ingredients = [];
    public string $afterName = '';
    public int $afterWeight;
    public $newProportion = [];

    protected $listeners = ['ingredientsUpdated' => 'updateIngredients'];

    public function updateIngredients($ingredients)
    {
        $this->ingredients = $ingredients;
    }

    public function calculate(MassCounterInterface $counter)
    {
        $this->newProportion = $counter->massCountToArray($this->afterName, $this->afterWeight, $this->ingredients);
    }

    public function render()
    {
        return view('livewire.ingredient-selector', [
            'newProportion' => $this->newProportion,
        ]);
    }
}
