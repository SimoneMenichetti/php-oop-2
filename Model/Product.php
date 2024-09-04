<?php

class Product {
    public string $name;
    public ItemType $type;
    public Category $category;
    public string $image;
    public float $price;

    // Costruttore
    public function __construct(string $name, Category $category, string $image, float $price, ItemType $type) {
        $this->name = $name;
        $this->type = $type;
        $this->category = $category;
        $this->image = $image;
        $this->price = $price;
    }

    // Getter
    public function getName() {
        return $this->name;
    }

    public function getType() {
        return $this->type;
    }

    public function getCategory() {
        return $this->category;
    }

    public function getImage() {
        return $this->image;
    }

    public function getPrice() {
        return $this->price;
    }
}
?>