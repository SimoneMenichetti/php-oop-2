<?php
require_once __DIR__ . '/../Model/Category.php';
require_once __DIR__ . '/../Model/ItemType.php';
require_once __DIR__ . '/../Model/Food.php';
require_once __DIR__ . '/../Model/Toy.php';
require_once __DIR__ . '/../Model/DogKennel.php';

// Definizione delle categorie
$dogCategory = new Category("Dog", "fa-solid fa-dog");
$catCategory = new Category("Cat", "fa-solid fa-cat");

// Definizione dei prodotti
$products = [
    new Food("Simba Dog Food", $dogCategory, "https://x.cloudsdata.net/4r/images/products/originals/584e7f89e08ca_1.png", 17.99, "Chicken", 500),
    new Food("Whiskas Cat Food", $catCategory, "https://www.isoladeitesori.it/dw/image/v2/BGRZ_PRD/on/demandware.static/-/Sites-it-master-catalog/default/dwf0f814df/503043.jpg?sw=800&sh=800", 14.99, "Fish", 400),
    new Toy("Cat Toy", $catCategory, "https://petmarket.it/11571-large_default/gioco-gatto-gomitolo-c-sonaglio-cm-9.jpg", 10.50, "Plastic", "Small"),
    new Toy("Dog Ball", $dogCategory, "https://www.lelepetshop.it/images/thumbs/0002949_gioco-cane-palla-tennis-gigante-maxi-15-cm-diametro_550.png", 8.99, "Rubber", "Medium"),
    new DogKennel("Dog Kennel", $dogCategory, "https://www.gardenbedettishop.com/16599-large_default/cuccia-per-cani-charles-50-ferplast.jpg", 35.00, "Large", "Grey"),
    new DogKennel("Cat Kennel", $catCategory, "https://www.gardenbedettishop.com/16599-large_default/cuccia-per-gatti.jpg", 30.00, "Medium", "Beige"),

];
