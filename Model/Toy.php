<?php
require_once 'Product.php';
require_once 'ItemType.php';

class Toy extends Product{
    public string $material;
    public string $size;


    public function __construct(string $_name,Category $_category,string $_image,float $_price,string $material, string $size){

        parent::__construct($name, new ItemType('Toy'), $category, $image, $price);
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