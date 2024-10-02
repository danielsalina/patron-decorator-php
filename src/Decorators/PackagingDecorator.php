<?php

// Decoradores Concretos: PackagingDecorator y WarrantyDecorator añaden comportamientos adicionales (descripción y precio) al producto original.

namespace Decorators;

use Components\Product;

class PackagingDecorator extends ProductDecorator {
    public function getDescription(): string {
        return $this->product->getDescription() . ' + Embalaje especial';
    }

    public function getPrice(): float {
        return $this->product->getPrice() + 10.00; // Precio del embalaje
    }
}
