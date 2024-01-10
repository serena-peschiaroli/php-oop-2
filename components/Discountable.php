<?php

trait Discountable
{
    public function applyDiscount($percent)
    {
        if ($percent > 0 && $percent <= 100) {
            $this->price -= ($this->price * $percent / 100);
        } else {
            throw new Exception("Percentuale di sconto non valida!");
        }
    }

}




?>