<?php
require_once "Product.php";

class Toys extends Product
{
    protected $material; // Additional attribute for Toys

    public function getMaterial()
    {
        return $this->material;
    }

    public function setMaterial($_material)
    {
        $this->material = $_material;
    }
}
