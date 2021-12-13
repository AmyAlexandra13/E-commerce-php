<?php

require_once 'layout\layout2.php';
require_once 'Objects\Products2.php';
require_once 'ProductHandler\ProductHandler.php';
require_once 'FileHandler\JsonFileHandler.php';
require_once 'databaseHandler\databaseConnection.php';
require_once 'Objects\TempCart.php';
require_once 'Services\TempCartHandler.php';



session_start();


$dataproducts = new ProductHandler('databaseHandler'); //first fx, it was not supposed to point one folder back
$productos = $dataproducts->GetAllProducts();

$layout = New Layout('Products');
?>

<?php $layout->printheader("css/products.css");?>
<header class ="headerproducts">
  <h1>Technological products </h1>
  <p>Start shopping the best technological products<br> around the world </p>

</header>
<main>
 
    <div class="containerProducts">
      
        <?php if(empty($productos)) : ?>
            <h2>No hay productos, gloria a Dios </h2>

            <?php else: ?>
                <?php foreach ($productos as $product) : ?>
                  <form action="cart.php" method="POST">
                    <div class="card">
  <img class="card-img-top" width="60" height="200" src="<?php echo $product->urlphoto?>" alt="Product image">
  <div class="card-body">
  <input hidden class="card-text" name="id_product" value="<?php echo$product->idproduct?>">
    <h5 class="card-title"><?php echo$product->name?></h5>
    <p class="card-text"><?php echo$product->description?></p>
    <p id="price" class="card-text">$<?php echo$product->price?></p>
    <button id="btn-addproduct" onclick="done()" type="submit" class="btn btn-primary">Add to the cart</button>
       </form>
  </div>
</div>

              

<?php endforeach; ?>
            <?php endif; ?>


          
                </div>
         
</div> <!-- Container ends -->

</main>

<script>
  function done(){
    alert("You have added a product to the cart");
  }
  </script>

<?php $layout->printfooter();?>




