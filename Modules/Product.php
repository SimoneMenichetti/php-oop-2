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

// getting per salvare i valori 

// name
public function getName(){
    return $this->name;
}

// type
public function getType(){
    return $this->type;
}
//category

public function getCategory(){
    return $this->category;

}

// image

public function getImage(){
    return $this->image;
}

// price

public function getPrice(){
    return $this->price;
}


}



?>