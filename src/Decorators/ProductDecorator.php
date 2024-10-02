<?php

// Decorador Base: Es una clase abstracta que implementa la interfaz Product y permite que otros decoradores extiendan su comportamiento.

namespace Decorators;

use Components\Product;

abstract class ProductDecorator implements Product {

    public function __construct(protected Product $product) {}

    public function getDescription(): string {
        return $this->product->getDescription();
    }

    public function getPrice(): float {
        return $this->product->getPrice();
    }
}
