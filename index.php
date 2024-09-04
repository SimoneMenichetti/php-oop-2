<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
// Inclusione dei file necessari
require_once __DIR__ . '/Data/Productdb.php';
require_once __DIR__ . '/Model/Category.php';
require_once __DIR__ . '/Model/ItemType.php';
require_once __DIR__ . '/Model/Product.php';
require_once __DIR__ . '/Model/Food.php';
require_once __DIR__ . '/Model/Toy.php';
require_once __DIR__ . '/Model/DogKennel.php';

// Recupera tutti i prodotti
$products = getProducts();
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
    <div class="product-container">
        <?php foreach ($products as $product): ?>
            <div class="product-card">
                <img src="<?php echo htmlspecialchars($product->getImage()); ?>" alt="<?php echo htmlspecialchars($product->getName()); ?>">
                <h3><?php echo htmlspecialchars($product->getName()); ?></h3>
                <p>Price: €<?php echo htmlspecialchars($product->getPrice()); ?></p>
                <p>Category: <i class="<?php echo htmlspecialchars($product->getCategory()->getIcon()); ?>"></i> <?php echo htmlspecialchars($product->getCategory()->getName()); ?></p>
                <p>Type: <?php echo htmlspecialchars($product->getType()->getName()); ?></p>
            </div>
        <?php endforeach; ?>
    </div>
</body>
</html>