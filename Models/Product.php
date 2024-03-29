<?php
require_once __DIR__ . '/Category.php' ;
require_once __DIR__ . '/../components/Discountable.php';


class Product {
    use Discountable;
    protected $name;
    protected $price;
    protected $image;
    protected $category;
    

    // Constructor
    public function __construct($_name, $_price, $_image, $_category)
    {
        $this->setName($_name);
        $this->setPrice($_price);
        $this->setImage($_image);
        $this->setCategory($_category);
        if ($_price < 0) {
            throw new Exception("Price cannot be negative.");
        }
        
    }

    // Getters
    public function getName() {
        return $this->name;
    }

    public function getPrice() {
        return $this->price;
    }

    public function getImage() {
        return $this->image;
    }

    public function getCategory() {
        return $this->category;
    }

    // Setters
    public function setName($name) {
        $this->name = $name;
    }

    public function setPrice($price) {
        $this->price = $price;
    }

    public function setImage($image) {
        $this->image = $image;
    }

    public function setCategory($category) {
        $this->category = $category;
    }


}
?>

