<?php

declare (strict_types = 1);

namespace App\Services;

use App\dto\Ingredient;


interface MassCounterInterface
{
    /**
    * @return Ingredient[]
    */
    public function massCountToDTO(string $afterIngredient, float $afterWeight, array $ingredients): array;
    /**
    * @return array
    */
    public function massCountToArray(string $afterIngredient, float $afterWeight, array $ingredients): array;
}