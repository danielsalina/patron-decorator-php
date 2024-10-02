<?php

// Decoradores Concretos: PackagingDecorator y WarrantyDecorator añaden comportamientos adicionales (descripción y precio) al producto original.

namespace Decorators;

use Components\Product;

class WarrantyDecorator extends ProductDecorator {
    public function getDescription(): string {
        return $this->product->getDescription() . ' + Garantía extendida';
    }

    public function getPrice(): float {
        return $this->product->getPrice() + 50.00; // Precio de la garantía
    }
}
