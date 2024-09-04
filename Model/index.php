<?php
    require_once __DIR__ . '/Data/Productdb.php';
    require_once __DIR__ . '/Model/Product.php';


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-oop-2</title>
      <!-- Link a Font Awesome -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
       <!-- Link al file CSS -->
    <link rel="stylesheet" href="Style/Style.css">
</head>
<body>
    <!-- contenitore prodotti -->
     <div class="product-container">
        <?php $products = getProducts();
        foreach($products as $product){
            ?>
            <div  class='product-card'>
                <img src="<?php echo $product->getImage();?>" alt='<?php echo $product->getName(); ?>'/>
                <h3><?php echo $product->getName(); ?></h3>
                <p>Price: €<?php echo $product->getPrice(); ?></p>
                <p>Category: <i class='<?php echo $product->getCategory()->getIcon(); ?>'>
                    </i> <?php echo $product->getCategory()->getName(); ?></p>
                <p>Type: <?php echo $product->getType()->getName(); ?></p>
            </div>
            <?php
        }
        ?>

    </div>
</body>
</html>