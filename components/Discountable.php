<?php

trait Discountable
{
    public function getDiscount($percent)
    {
        $this->price -= ($this->price * $percent / 100);
    }
}




?>