<?php

class ItemType{
    public string $name;

    public function __construct(string $name){
        $this->name=$name;

    }

    // getting

    public function getName(){
        return $this->name;
    
    }
}

?>