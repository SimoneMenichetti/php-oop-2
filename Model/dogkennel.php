<?php

require_once 'Product.php';

class dogKennel extends Product{
    public string $dimension;
    public string $color;

    public function __construct(string $_name,Category $_category,string $_image,float $_price, string $dimension, string $color){


        parent::__construct($name,$category, $image, $price,new ItemType('dogKennel'));
            $this->dimension= $dimension;
            $this->color= $color;

        
    }

    public function getDimension(){
        return $this->dimension;
    }

    public function getColor(){
        return $this->color;
    }
}
?>