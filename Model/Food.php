<?php
require_once 'Product.php';
require_once 'ItemType.php';

// estendiamo Product classe Padre 

class Food extends Product{
    public string $taste;
    public int $weight;

    // richiamiamo il construct di product 
    public function __construct(string $_name,Category $_category,string $_image,float $_price,string $taste,int $weight){

         // utilizziamo Parent::__construct per relazionare figlio con il padre

         parent::__construct($name, new ItemType('Food'), $category, $image, $price);
         $this->taste=$taste;
         $this->weight=$weight;

    }

    // getting

    public function getTaste(){
        return $this->taste;

    }

    public function getWeight(){
        return $this->weight;
    }

   

}

?>