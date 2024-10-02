<?php

require 'vendor/autoload.php';

use Components\BasicProduct;
use Decorators\PackagingDecorator;
use Decorators\WarrantyDecorator;

// Crear un producto básico
$product = new BasicProduct("Teléfono móvil", 500.00);

// Decorar el producto con embalaje especial
$productWithPackaging = new PackagingDecorator($product);

// Decorar el producto con garantía extendida
$productWithPackagingAndWarranty = new WarrantyDecorator($productWithPackaging);

// Mostrar descripción y precio final del producto decorado
echo $productWithPackagingAndWarranty->getDescription() . "\n"; // Salida: "Teléfono móvil + Embalaje especial + Garantía extendida"
echo "Precio total: " . $productWithPackagingAndWarranty->getPrice() . "\n"; // Salida: 560.00
