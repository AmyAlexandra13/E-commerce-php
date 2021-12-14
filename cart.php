<?php


require_once 'layout\layout2.php';
require_once 'Objects\Products2.php';
require_once 'ProductHandler\ProductHandler.php';
require_once 'FileHandler\JsonFileHandler.php';
require_once 'databaseHandler\databaseConnection.php';
require_once 'Objects\TempCart.php';
require_once 'Services\TempCartHandler.php';


session_start();

$layout = New Layout('Cart');

$servicetempcart = new TempCartHandler('databaseHandler');
$newtempcart = new TempCart();

if(isset($_POST['id_product'])){
   $newtempcart = new TempCart();
   $newtempcart->InizializeData($_POST['id_product'], 1);
    var_dump($newtempcart);
   $servicetempcart->Addproducts($newtempcart);
   header("Location: cart.php");
   exit();
}

$dataspecific = $servicetempcart->GetSpecificInformation();


?>

<?php $layout->printheader("css/cart.css");?>
<main>
  

   <div class="cart-container">
   <nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item active" aria-current="page">Cart</li>
  </ol>
</nav>
   <h1>Your cart</h1>
      <div class="product-container2">
   <?php if(empty($dataspecific)) : ?>
      <h2>No products in the cart </h2>
      <?php $notif = true; ?>

      <?php else: ?>
         <?php foreach($dataspecific as $data) : ?>
            <div class="card">
            <form action="ajax.php" method="POST">
  <img src="<?php echo $data->urlphoto?>"  width="60" height="200" class="card-img-top" alt="Product image">
  <div class="card-body">
  <input hidden class="card-text" name="id_product" value="<?php echo$data->idproduct?>">
    <h5 class="card-title"><?php echo $data->name?></h5>
    <p class="card-text">Price: <?php echo $data->price?></p>
    <select class="form-select form-select-sm" aria-label=".form-select-sm example">
  <option selected value="<?php echo $data->quantity_product?>"><?php echo $data->quantity_product?></option>
  <option value="2">2</option>
  <option value="3">3</option>
</select>
<button type="button" onclick="deleteproduct2(<?php echo$data->idproduct?>)" id="deleteproduct" class="btn btn-danger">Delete</button>
         </form>
   
  </div>
</div>
<script> //the function is supposed to be withing the foreach to call every id
   async function postData(url = '', data = {}) {
    const response = await fetch(url, {
      method: 'POST', // *GET, POST, PUT, DELETE, etc.
      mode: 'cors', // no-cors, *cors, same-origin
      cache: 'no-cache', // *default, no-cache, reload, force-cache, only-if-cached
      credentials: 'same-origin', // include, *same-origin, omit
      headers: {
         'Content-Type': 'application/json'
         // 'Content-Type': 'application/x-www-form-urlencoded',
      },
      redirect: 'follow', // manual, *follow, error
      referrerPolicy: 'no-referrer', // no-referrer, *no-referrer-when-downgrade, origin, origin-when-cross-origin, same-origin, strict-origin, strict-origin-when-cross-origin, unsafe-url
      body: JSON.stringify(data) // body data type must match "Content-Type" header
   });
   return response.json(); // parses JSON response into native JavaScript objects
   }

   function deleteproduct2(id){
      postData(`http://localhost:8090/finalprojectweb1/ajax.php?id_product=${id}`)
      .then(data => location.reload());

   }

   </script>

            <?php endforeach; ?>
            <?php endif; ?>


   
         </div><!--product-container ends -->

       
         <?php if(empty($dataspecific)) : ?>
            <?php else: ?>
         <div class="buttoncheckout">
         <a href="checkout.php" id="btn-pay" class="btn btn-success btn-lg">Checkout and pay</a>        
       </div>
         <?php endif; ?>
       


   </div>  <!--cart-container ends -->
</main>

<?php $layout->printfooter();?>