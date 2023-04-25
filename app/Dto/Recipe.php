<?php

declare (strict_types = 1);

namespace App\dto;

use App\dto\Ingredient;

final class Recipe
{
    private string $name;
    private string $description;
    private Ingredient $ingredients;
    
    public function __construct(string $name, string $description = null, Ingredient ...$ingredients)
    {
        $this->name = $name;
        $this->description = $description;
        $this->ingredients = $ingredients;
    }
    
    public function getName(): string
    {
        return $this->name;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function getIngredients(): Ingredient
    {
        return $this->ingredients;
    }
}