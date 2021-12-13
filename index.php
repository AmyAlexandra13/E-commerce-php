<?php

require_once 'layout\layout2.php';
require_once 'Objects\Products2.php';
require_once 'databaseHandler\databaseConnection.php';
require_once 'FileHandler\JsonFileHandler.php';
require_once 'ProductHandler\ProductHandler.php';





session_start();


$dataproducts = new ProductHandler('databaseHandler'); //first fx, it was not supposed to point one folder back
$productos = $dataproducts->GetAllProducts();

$layout = New Layout('Cart');
?>

<?php $layout->printheader("css/index.css");?>



        <div class="firstinfo"><!--It can be the container of the photo and image-->
      <div class="image1">
        <img src="images/shopp1.jpg" alt="I am loading..." >
      </div>

      <div class="image1-text">
        <h1>Start shopping</h1>
        <p>The best way to go shopping it's online</p>
        <a href="products.php" class="btn btn-outline-light">Go shopping</a>
      </div>
     </div> <!--the container ends -->

      <div class="best-deals-container">
        <div class="letter">
        <h2 id="ha">Top best deals2</h2> 
      </div>

    </div>   <!-- best deals container  ends-->

      <div class="deals-items">
        <?php foreach($productos as $product) : ?>
          <?php if($product->price > 230) : ?>
            <form action="cart.php" method="POST">
        <div class="card" style="width: 18rem;">
        <img class="card-img-top" width="60" height="200" src="<?php echo $product->urlphoto?>" alt="Product image">
  <div class="card-body">
  <input hidden class="card-text" name="id_product" value="<?php echo$product->idproduct?>">
    <h5 class="card-title"><?php echo$product->name?></h5>
    <p class="card-text"><?php echo$product->description?></p>
    <p id="price" class="card-text">$<?php echo$product->price?></p>
    <button id="btn-addproduct2" onclick="done2()" type="submit" class="btn btn-primary">Add to the cart</button>
       </form>
  </div>
</div>

<script>
  function done2(){
alert("You have added a product to the cart");
  }
          </script>
        <?php endif; ?>
        <?php endforeach; ?>
       
      </div>  <!-- deals items container  ends-->

      
    
    
    

 
   

    <?php $layout->printfooter();?>
