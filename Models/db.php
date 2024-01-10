<?php

// includere classi necessarie
include __DIR__ . '/Category.php';
include __DIR__ . '/Food.php';
include __DIR__ . '/Beds.php';
include __DIR__ . '/Toys.php';


try {
        // categorie
    $catCategory = new Category('Cat', '/assets/cat.png');
    $dogCategory = new Category('Dog', '/assets/dog.png');


    $products = [
        new Food("Salmon Dry Cat Food", 10.00, './assets/dry-cat-food.jpg', $catCategory, "2024-12-31"),
        new Toys("Part Cat Toy Set", 3.79, './assets/cat-toys.jpg', $catCategory, 'polyester'),
        new Beds("Circular Cat Bed", 14.89, './assets/cat-bed.jpg', $catCategory, 'indoor', 'S'),
        new Food("Tuna Dry Cat Food", 12.00, './assets/dry-cat-food.jpg', $catCategory, "2024-12-31"),
        new Toys("Part Cat Toy Set", 3.79, './assets/cat-toys.jpg', $catCategory, 'polyester'),
        new Beds("Rectangular Cat Bed", 14.89, './assets/cat-bed.jpg', $catCategory, 'indoor', 'S'),
        new Beds("Circular dog bed", 45.00, './assets/dog-bed.jpg', $dogCategory, 'indoor', 'XL'),
        new Food("N&D Pumpkin Grain Free Lamb", 23.00, './assets/dog-dry-food.jpg', $dogCategory, "2024-12-31"),
        new Toys("Chewable dog toy rope", 7.50, './assets/dog-toy.jpg', $dogCategory, 'Cordura'),
        new Beds("Circular dog bed", 40.00, './assets/dog-bed.jpg', $dogCategory, 'indoor', 'L'),
        new Food("Sensitive - Turkey & Chicken", 25.00, './assets/dog-dry-food.jpg', $dogCategory, "2024-12-31"),
        new Toys("Chewable squeaky toy", 7.50, './assets/dog-toy.jpg', $dogCategory, 'Cordura'),
    ];


   //debug
    // $products[6]->applyDiscount(100);

    // var_dump($products[6]);

    return $products;

    
} catch (Exception $e) {
    echo "Errore nell'inserimento dei prodotti: " . $e->getMessage();
   $products = [];

}
?>