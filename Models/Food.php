<?php
require __DIR__ . '/Product.php';

class Food extends Product
{
    protected $expire; 

    

    // Getter / setter
    public function getExpire()
    {
        return $this->expire;
    }

    public function setExpire($_expire)
    {
        $this->expire = $_expire;
    }
}
