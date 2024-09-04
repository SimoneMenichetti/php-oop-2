<?php
// estendiamo Product classe Padre 

class Food extends Product{
    public string $taste;
    public int $weight;

    // richiamiamo il construct di product 
    public function __construct(string $_name,ItemTtype $_type,Category $_category,string $_image,float $_price){

    }
}

?>