<?php
require_once "Product.php";

class Kennels extends Product
{
    protected $type; 
    protected $size;

  

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