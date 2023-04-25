<?php

declare(strict_types=1);

namespace App\Services;

use App\Dto\Ingredient;

class MassCounter implements MassCounterInterface
{
    /**
     * @return Ingredient[]
     */
    public function massCountToDTO(string $afterIngredient, float $afterWeight, array $ingredients): array
    {
        $ingredients = $this->toDTO($ingredients);

        foreach ($ingredients as $ingredient) {
            if ($ingredient->getName() === $afterIngredient) {
                $percent = (($afterWeight - $ingredient->getWeight()) / $ingredient->getWeight()) * 100;
            }
        }

        foreach ($ingredients as $ingredient) {
            if ($ingredient->getName() === $afterIngredient) {
                $ingredient->setWeight($afterWeight);
            } else {
                if ($percent === 0 or $percent > 0) {
                    $changedWeight = (($ingredient->getweight() / 100) * $percent) + $ingredient->getweight();
                } else {
                    $changedWeight = (($ingredient->getweight() / 100) * $percent) + $ingredient->getweight();
                }
    
                $ingredient->setWeight($changedWeight);
            }
        }

        return $ingredients;
    }

    public function massCountToArray(string $afterIngredient, float $afterWeight, array $ingredients): array
    {
        foreach ($ingredients as &$ingredient) {
            if ($ingredient['name'] === $afterIngredient) {
                $percent = (($afterWeight - $ingredient['weight']) / $ingredient['weight']) * 100;
            }
        }

        foreach ($ingredients as &$ingredient) {
            if ($ingredient['name'] === $afterIngredient) {
                $ingredient['weight'] = $afterWeight;
            } else {
                $changedWeight = (($ingredient['weight'] / 100) * $percent) + $ingredient['weight'];
                $ingredient['weight'] = $changedWeight;
            }
        }
        
        return $ingredients;
    }

    /**
     * @return Ingredient[]
    */
    private function toDTO(array $rawIngredients): array
    {
        foreach ($rawIngredients as $ingredient) {
            $newVal = intval($ingredient['weight']);
            $ingredients[] = new Ingredient($ingredient['name'], $newVal);
        }

        return $ingredients;
    }

}
