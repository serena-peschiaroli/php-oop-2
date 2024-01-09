<?php

error_reporting(E_ALL);
ini_set("display_errors", 1);

$products = include __DIR__ . '/Models/db.php';
require_once __DIR__ . '/components/function.php';

/*
// includere classi necessarie
include __DIR__ . '/Models/Category.php';
include __DIR__ . '/Models/Food.php';
include __DIR__ . '/Models/Beds.php';
include __DIR__ . '/Models/Toys.php';

// categorie
$catCategory = new Category('Cat', '/assets/cat.png');
$dogCategory = new Category('Dog', '/assets/dog.png');

// prodotti
$catFood1 = new Food("Salmon Dry Cat Food", 10.00, '../assets/dry-cat-food', $catCategory, "2024-12-31");
$catToys1 = new Toys("Part Cat Toy Set", 3.79, './assets/cat-toys.jpg', $catCategory, 'polyester');
$catBed1 = new Beds("Circular Cat Bed", 14.89, '/assets/cat-bed.jpg', $catCategory, 'indoor', 'S');
$catFood2 = new Food("Tuna Dry Cat Food", 12.00, '../assets/dry-cat-food', $catCategory, "2024-12-31");
$catToys2 = new Toys("Part Cat Toy Set", 3.79, './assets/cat-toys.jpg', $catCategory, 'polyester');
$catBed2 = new Beds("Rectangular Cat Bed", 14.89, '/assets/cat-bed.jpg', $catCategory, 'indoor', 'S');

$dogFood1 = new Food("N&D Pumpkin Grain Free Lamb", 23.00, '../assets/dog-dry-food', $dogCategory, "2024-12-31");
$dogToy1 = new Toys("Chewable dog toy rope", 7.50, '/assets/dog-toy.png', $dogCategory, 'Cordura');
$dogBed1 = new Beds("Circular dog bed", 40.00, 'assets/dog-bed.jpg', $dogCategory, 'indoor', 'L');
$dogFood2 = new Food("Sensitive - Turkey & Chicken", 25.00, '../assets/dog-dry-food', $dogCategory, "2024-12-31");
$dogToy2 = new Toys("Chewable squeaky toy", 7.50, '/assets/dog-toy.png', $dogCategory, 'Cordura');
$dogBed2 = new Beds("Circular dog bed", 45.00, 'assets/dog-bed.jpg', $dogCategory, 'indoor', 'XL');
*/

// Debugging 
// var_dump($products);


?>

<!DOCTYPE html>
<html lang="en">
<?php include __DIR__ . '/partials/head.php'; ?>

<body>
    <?php include __DIR__ . '/partials/header.php'; ?>
    <main>
        <div class="container">
            <div class="row">
                
                    <?php
                    foreach ($products as $product) {
                        echo createProductCard($product);
                    }
                    ?>
                
            </div>
        </div>
        
    </main>

    <?php include 'partials/footer.php'; ?>
</body>

</html>
</body>