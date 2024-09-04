<?php
// estendiamo Product classe Padre 

class Food extends Product{
    public string $taste;
    public int $weight;

    // richiamiamo il construct di product 
    public function __construct(string $_name,ItemTtype $_type,Category $_category,string $_image,float $_price,string $taste,int $weight){

         // utilizziamo Parent::__construct per relazionare figlio con il padre

         parent::__construct($name, $type, $category, $image,$price,new ItemType('Food'));
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