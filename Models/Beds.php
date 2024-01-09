<?php
require_once __DIR__ . '/Product.php';

class Beds extends Product
{
    protected $type; 
    protected $size;

    public function __construct($_name, $_price, $_image, $_category, $_type, $_size)
    {
        parent::__construct($_name, $_price, $_image, $_category);
        $this->setType($_type);
        $this->setSize($_size);
    }

    


  

    public function setType($_type)
    {
        $this->type = $_type;
    }
    public function setSize($_size)
    {
        $this->size = $_size;
    }
}


?>