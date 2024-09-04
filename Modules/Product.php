<?php

class Product {
    public string $name;
    public $type;
    public $category;
    public string $image;
    public float $price;

// inizializiamo il costruttore 

    function __constructor(string $_name,$_type,$_category,string $_image,float $_price){

        $this->name = $name;
        $this->type = $type;
        $this->category = $category;
        $this->image = $image;
        $this->price = $price;
        
    }

}


?>