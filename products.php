<?php

require_once 'layout\layout2.php';
require_once 'Objects\Products2.php';
require_once 'ProductHandler\ProductHandler.php';
require_once 'FileHandler\JsonFileHandler.php';
require_once 'databaseHandler\databaseConnection.php';


session_start();


$dataproducts = new ProductHandler('databaseHandler'); //first fx, it was not supposed to point one folder back
$productos = $dataproducts->GetAllProducts();

$layout = New Layout('Products');
?>

<?php $layout->printheader();?>
<main>
    <div>
        <h2>Products</h2>
        <?php if(empty($productos)) : ?>
            <h2>No hay productos, gloria a Dios </h2>

            <?php else: ?>
                <?php foreach ($productos as $product) : ?>
                    <div class="card" style="width: 18rem;">
  <img class="card-img-top" src="<?php echo $product->urlphoto?>" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title"><?php echo$product->name?></h5>
    <h5 class="card-title">gloria a Dios!</h5>
    <p class="card-text"><?php echo$product->description?></p>
    <p class="card-text"><?php echo$product->price?></p>
    <a href="#" class="btn btn-primary">Add to the cart</a>
  </div>
</div>

<?php endforeach; ?>
            <?php endif; ?>
         

         

</div>

</main>

<?php $layout->printfooter();?>




