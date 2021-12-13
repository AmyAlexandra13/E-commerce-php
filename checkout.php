<?php 
require_once 'layout\layout2.php';
require_once 'Objects\Products2.php';
require_once 'ProductHandler\ProductHandler.php';
require_once 'FileHandler\JsonFileHandler.php';
require_once 'databaseHandler\databaseConnection.php';
require_once 'Objects\TempCart.php';
require_once 'Services\TempCartHandler.php';


session_start();

$layout = New Layout('Checkout');




?>

<?php $layout->printheader("css/cart.css");?>
<main>

<div class="checkout-container">

<div class="infocheck-container">

<section class="indicator">
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="cart.php">Cart</a></li>
    <li class="breadcrumb-item active" aria-current="page">Checkout</li>
  </ol>
</nav>
</section>

<form action="done.php" method="POST">
<div class="card">
            <div class="card header" style="background-color: pink;">
 <h2 class="text-center">Payment information</h2> 
            </div>

            <div class="card-body">

                <div class="card-title">
                    <h4 class="text-center">Complete the information</h4>
                </div>

                <input hidden type="text" name="id_user" value="0">
                <div class="mb-3">
                    <label class="form-label">Name:</label>
                    <input type="text" name="name" class="form-control">
                </div>

                <div class="mb-3">
                    <label class="form-label">Last name:</label>
                    <input type="text" name="lastname" class="form-control">
                </div>

                <div class="mb-3">
                    <label class="form-label">Email:</label>
                    <input name="email" class="form-control">
                </div>

                <div class="mb-3">
                    <label class="form-label">Password:</label>
                    <input type="password" name="contra" class="form-control">
                </div>

                <div class="mb-3">
                    <label  class="form-label">Payment:</label> <!--Fijate en el form-label-->
                    <select name="payment" id="payment" class="form-select"> <!--Fijate en el form-select-->
                        <option value="">Select a payment </option>
                        <option value="credit" >Credit card</option>
                        <option value="cash">Cash</option>
                        
                    </select>
                </div>

                <div class="mb-3">
                    <button type="submit" id="btn-done" class="btn btn-success">Pay</button>
                </div>

</form>



</div> <!-- tthe checkout container ends here -->
</div> <!-- tthe info-check container ends here -->


</main>

<?php $layout->printfooter();?>