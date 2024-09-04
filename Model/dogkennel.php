<?php
require_once 'Product.php';
require_once 'ItemType.php';

class DogKennel extends Product {
    public string $dimension;
    public string $color;

    // Costruttore
    public function __construct(string $name, Category $category, string $image, float $price, string $dimension, string $color) {
        parent::__construct($name, $category, $image, $price, new ItemType('DogKennel'));
        $this->dimension = $dimension;
        $this->color = $color;
    }

    // Getter
    public function getDimension() {
        return $this->dimension;
    }

    public function getColor() {
        return $this->color;
    }
}
?>