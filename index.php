<?php


include __DIR__ . '/Models/Category.php';
include __DIR__ . '/Models/Product.php';

$catCategory = new Category('Cat', '/assets/cat.png');
$dogCategory = new Category('Dog', '/assets/dog.png');

var_dump($catCategory, $dogCategory);






?>