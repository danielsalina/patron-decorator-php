<?php

// Componente Base: La interfaz Product define las operaciones comunes a todos los productos: getDescription() y getPrice().

namespace Components;

interface Product {
    public function getDescription(): string;
    public function getPrice(): float;
}
