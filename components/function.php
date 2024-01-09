<?php

require_once __DIR__ . '/../Models/db.php';





function createProductCard($product)
{
    $html = '<div class="card">';
    $html .= '<img src="' . $product->getImage() . '" alt="' . $product->getName() . '">';
    $html .= '<h3>' . $product->getName() . '</h3>';
    $html .= '<p>Price: $' . $product->getPrice() . '</p>';
    $html .= '<p>Category: ' . $product->getCategory()->getName() . '</p>';

    if ($product instanceof Beds) {
        $html .= '<p>Type: ' . $product->getType() . '</p>';
        $html .= '<p>Size: ' . $product->getSize() . '</p>';
    } elseif ($product instanceof Toys) {
        $html .= '<p>Material: ' . $product->getMaterial() . '</p>';
    }
    

    $html .= '</div>';
    return $html;
}
?>