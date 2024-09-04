<?php
require_once 'Product.php';
require_once 'ItemType.php';

class Food extends Product {
    public string $taste;
    public int $weight;

    // Costruttore
    public function __construct(string $name, Category $category, string $image, float $price, string $taste, int $weight) {
        parent::__construct($name, $category, $image, $price, new ItemType('Food'));
        $this->taste = $taste;
        $this->weight = $weight;
    }

    // Getter
    public function getTaste() {
        return $this->taste;
    }

    public function getWeight() {
        return $this->weight;
    }
}
?>