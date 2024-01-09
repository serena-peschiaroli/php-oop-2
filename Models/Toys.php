<?php
require_once __DIR__ . '/Product.php';

class Toys extends Product
{
    protected $material;

    // Constructor
    public function __construct($_name, $_price, $_image, $_category, $_material)
    {
        // chiama il constructor di product
        parent::__construct($_name, $_price, $_image, $_category);

        // attr materia di toys
        $this->setMaterial($_material);
    }

    // getters e setters
    public function getMaterial()
    {
        return $this->material;
    }

    public function setMaterial($_material)
    {
        $this->material = $_material;
    }
}

