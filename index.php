<?php
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);
// Inclusione dei file necessari
require_once __DIR__ . '/data/Productdb.php';
require_once __DIR__ . '/Model/Category.php';
require_once __DIR__ . '/Model/ItemType.php';
require_once __DIR__ . '/Model/Product.php';
require_once __DIR__ . '/Model/Food.php';
require_once __DIR__ . '/Model/Toy.php';
require_once __DIR__ . '/Model/DogKennel.php';


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-oop-2</title>
    <!-- Link al file CSS -->
    <link rel="stylesheet" href="Style/Style.css">
    <!-- Link a Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>


<body>
    <!-- contenitore prodotti -->
    <div class="product-section">
        <!-- Colonna Sinistra: Dog Products -->
        <div class="product-column">
            <h2>Dog Toys</h2>
            <div class="product-container">
                <?php
                foreach ($products as $product) {
                    if ($product->getCategory()->getName() === 'Dog' && $product->getType()->getName() === 'Toy') {
                ?>
                        <div class="product-card">
                            <img src="<?php echo $product->getImage(); ?>" alt="<?php echo $product->getName(); ?>">
                            <h3><?php echo $product->getName(); ?></h3>
                            <p>Price: €<?php echo $product->getPrice(); ?></p>
                            <p>Category: <i class="<?php echo $product->getCategory()->getIcon(); ?>"></i> <?php echo $product->getCategory()->getName(); ?></p>
                            <p>Type: <?php echo $product->getType()->getName(); ?></p>
                        </div>
                <?php
                    }
                }
                ?>
            </div>

            <h2>Dog Food</h2>
            <div class="product-container">
                <?php
                foreach ($products as $product) {
                    if ($product->getCategory()->getName() === 'Dog' && $product->getType()->getName() === 'Food') {
                ?>
                        <div class="product-card">
                            <img src="<?php echo $product->getImage(); ?>" alt="<?php echo $product->getName(); ?>">
                            <h3><?php echo $product->getName(); ?></h3>
                            <p>Price: €<?php echo $product->getPrice(); ?></p>
                            <p>Category: <i class="<?php echo $product->getCategory()->getIcon(); ?>"></i> <?php echo $product->getCategory()->getName(); ?></p>
                            <p>Type: <?php echo $product->getType()->getName(); ?></p>
                        </div>
                <?php
                    }
                }
                ?>
            </div>

            <h2>Dog Kennel</h2>
            <div class="product-container">
                <?php
                foreach ($products as $product) {
                    if ($product->getCategory()->getName() === 'Dog' && $product->getType()->getName() === 'DogKennel') {
                ?>
                        <div class="product-card">
                            <img src="<?php echo $product->getImage(); ?>" alt="<?php echo $product->getName(); ?>">
                            <h3><?php echo $product->getName(); ?></h3>
                            <p>Price: €<?php echo $product->getPrice(); ?></p>
                            <p>Category: <i class="<?php echo $product->getCategory()->getIcon(); ?>"></i> <?php echo $product->getCategory()->getName(); ?></p>
                            <p>Type: <?php echo $product->getType()->getName(); ?></p>
                        </div>
                <?php
                    }
                }
                ?>
            </div>
        </div>

        <!-- Colonna Destra: Cat Products -->
        <div class="product-column">
            <h2>Cat Toys</h2>
            <div class="product-container">
                <?php
                foreach ($products as $product) {
                    if ($product->getCategory()->getName() === 'Cat' && $product->getType()->getName() === 'Toy') {
                ?>
                        <div class="product-card">
                            <img src="<?php echo $product->getImage(); ?>" alt="<?php echo $product->getName(); ?>">
                            <h3><?php echo $product->getName(); ?></h3>
                            <p>Price: €<?php echo $product->getPrice(); ?></p>
                            <p>Category: <i class="<?php echo $product->getCategory()->getIcon(); ?>"></i> <?php echo $product->getCategory()->getName(); ?></p>
                            <p>Type: <?php echo $product->getType()->getName(); ?></p>
                        </div>
                <?php
                    }
                }
                ?>
            </div>

            <h2>Cat Food</h2>
            <div class="product-container">
                <?php
                foreach ($products as $product) {
                    if ($product->getCategory()->getName() === 'Cat' && $product->getType()->getName() === 'Food') {
                ?>
                        <div class="product-card">
                            <img src="<?php echo $product->getImage(); ?>" alt="<?php echo $product->getName(); ?>">
                            <h3><?php echo $product->getName(); ?></h3>
                            <p>Price: €<?php echo $product->getPrice(); ?></p>
                            <p>Category: <i class="<?php echo $product->getCategory()->getIcon(); ?>"></i> <?php echo $product->getCategory()->getName(); ?></p>
                            <p>Type: <?php echo $product->getType()->getName(); ?></p>
                        </div>
                <?php
                    }
                }
                ?>
            </div>

            <h2>Cat Kennel</h2>
            <div class="product-container">
                <?php
                foreach ($products as $product) {
                    if ($product->getCategory()->getName() === 'Cat' && $product->getType()->getName() === 'DogKennel') {
                ?>
                        <div class="product-card">
                            <img src="<?php echo $product->getImage(); ?>" alt="<?php echo $product->getName(); ?>">
                            <h3><?php echo $product->getName(); ?></h3>
                            <p>Price: €<?php echo $product->getPrice(); ?></p>
                            <p>Category: <i class="<?php echo $product->getCategory()->getIcon(); ?>"></i> <?php echo $product->getCategory()->getName(); ?></p>
                            <p>Type: <?php echo $product->getType()->getName(); ?></p>
                        </div>
                <?php
                    }
                }
                ?>
            </div>
        </div>
    </div>
</body>

</html>