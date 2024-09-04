<?php
require_once 'Product.php';
require_once 'ItemType.php';

class Toy extends Product {
    public string $material;
    public string $size;

    // Costruttore
    public function __construct(string $name, Category $category, string $image, float $price, string $material, string $size) {
        parent::__construct($name, $category, $image, $price, new ItemType('Toy'));
        $this->material = $material;
        $this->size = $size;
    }

    // Getter
    public function getMaterial() {
        return $this->material;
    }

    public function getSize() {
        return $this->size;
    }
}
?>