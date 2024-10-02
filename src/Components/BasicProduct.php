<?php

// Componente Concreto: Es una implementación de la interfaz Product. Representa un producto básico.

namespace Components;

class BasicProduct implements Product {

    public function __construct(private string $description, private float $price) {}

    public function getDescription(): string {
        return $this->description;
    }

    public function getPrice(): float {
        return $this->price;
    }
}
