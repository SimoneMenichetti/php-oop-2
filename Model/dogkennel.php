<?php
require_once 'Product.php';

class DogKennel extends Product {  // Correggi il nome della classe in maiuscolo per coerenza
    public string $dimension;
    public string $color;

    public function __construct(string $name, Category $category, string $image, float $price, string $dimension, string $color){
        parent::__construct($name, $category, $image, $price, new ItemType('DogKennel'));
        $this->dimension = $dimension;
        $this->color = $color;
    }

    public function getDimension(){
        return $this->dimension;
    }

    public function getColor(){
        return $this->color;
    }
}

?>