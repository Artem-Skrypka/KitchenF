<?php

declare (strict_types = 1);

namespace App\Dto;

final class Ingredient
{
    public string $name;
    public float $weight;
    
    public function __construct(string $name, float $weight)
    {
        $this->name = $name;
        $this->weight = $weight;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getWeight(): float
    {
        return $this->weight;
    }

    public function setWeight(float $value): void
    {
        $this->weight = $value;
    }

    public function setName(string $value): void
    {
        $this->name = $value;
    }
}