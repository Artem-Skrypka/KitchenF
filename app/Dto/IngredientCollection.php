<?php

declare(strict_types=1);

namespace App\Dto;

use Livewire\Wireable;

final class IngredientCollection implements Wireable
{
    /**
     * @var Ingredient[]
     */
    public array $ingredients;

    public function __construct(array $ingredients)
    {
        $this->ingredients = $ingredients;
    }

    public function toLivewire()
    {
        $result = [];
        foreach ($this->ingredients as $ingredient) {
            $result[] = [
                'name' => $ingredient['name'],
                'weight' => $ingredient['weight'],
            ];
        }

        return $result;
    }

    public static function fromLivewire($data)
    {
        $ingredients = [];
        foreach ($data as $item) {
            $ingredients[] = new Ingredient($item['name'], $item['weight']);
        }
        
        return new self($ingredients);
    }
}
