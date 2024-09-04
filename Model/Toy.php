<?php
require_once 'Product.php';

class Toy extends Product{
    public string $material;
    public string $size;


    public function __construct(string $_name,Category $_category,string $_image,float $_price,string $material, string $size){

        parent::__construct($name, $price, $image, $category, new ItemType('Toy'));
        $this->material= $material;
        $this->size=$size;

     

    
    }

    // getting

        public function getMaterial(){
            return $this-> material;
        }

        public function getSize(){
            return $this->size;
        }
}
?>