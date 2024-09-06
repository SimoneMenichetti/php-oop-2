<?php

class Product
{
    private string $name;
    public ItemType $type;
    public Category $category;
    public string $image;
    public float $price;

    // Costruttore
    public function __construct(string $name, Category $category, string $image, float $price, ItemType $type)
    {
        // uso di setName try per prendere la funzione e catch per catturare l evento error 
        try {
            $this->setName($name);
            // uso di exception e la variabile $e per prendere e stampare il valore di exception
        } catch (Exception $e) {
            echo 'Errore' . $e->getMessage();
        }

        $this->type = $type;
        $this->category = $category;
        $this->image = $image;
        $this->price = $price;
    }

    // debug 

    // inizializzo validazione name 

    // utilizzo del setting 

    function setName(string $name)
    {

        // condizione e throw per generare l'errore in caso di validazione
        if (empty($name)) {
            throw new Exception("Il nome del prodotto non può essere vuoto ");
        }

        if (strlen($name) < 3) {
            throw new Exception("il nome del prodotto non può essere inferiore a 3 caratteri");
        } else {

            $this->name = $name;
        }
    }

    // Getter
    public function getName()
    {
        return $this->name;
    }

    public function getType()
    {
        return $this->type;
    }

    public function getCategory()
    {
        return $this->category;
    }

    public function getImage()
    {
        return $this->image;
    }

    public function getPrice()
    {
        return $this->price;
    }
}
