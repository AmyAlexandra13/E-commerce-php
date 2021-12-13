<?php
require_once 'layout\layout2.php';
require_once 'Objects\Products2.php';
require_once 'ProductHandler\ProductHandler.php';
require_once 'FileHandler\JsonFileHandler.php';
require_once 'databaseHandler\databaseConnection.php';
require_once 'Objects\TempCart.php';
require_once 'Services\TempCartHandler.php';
require_once 'Services\UserHandler.php';
require_once 'Objects\Users.php';
require_once 'Services\RealCartHandler.php';
require_once 'Objects\RealCart.php';



session_start();

$layout = New Layout('Checkout');

$servicetempcart = new TempCartHandler('databaseHandler');
$serviceuser = new UserHandler('databaseHandler');
$servicerealcart = new RealCartHandler('databaseHandler');

$newuser = new Users();
$newrealcart = new RealCart();


$dataspecificcart = $servicetempcart->GetSpecificInformation();//

if(isset($_POST['name'])){
    $newuser = new Users();
    $newuser->InizializeData(0, $_POST['name'],$_POST['lastname'], $_POST['email'], $_POST['contra'], $_POST['payment'], "normal");
        var_dump($newuser);
    $serviceuser->AddUser($newuser);
    header("Location: done.php");
    exit();
}//Add user works!

$dataspecificcart = $servicetempcart->GetSpecificInformation();
$userspecificdata = $serviceuser->GetLastInformation();

foreach($userspecificdata as $user) :
$getlastid = $user->id_user;
$getlastemail = $user->email;
endforeach;
//getting last information works!

// if(empty($dataspecificcart)) : 
//   echo "fine";
//   else :
//     $newrealcart = new RealCart();
//     $newrealcart->InizializeData(0,$getlastid,2,0,1);
//     $servicerealcart->AddRealCart($newrealcart);
//   endif;


// if(isset($_POST['id_user'])){

foreach ($dataspecificcart as $tempcartdata):
  $newrealcart = new RealCart();
  $newrealcart->InizializeData(0,$getlastid,$tempcartdata->idproduct,0,$tempcartdata->quantity_product);
  $servicerealcart->AddRealCart($newrealcart);
endforeach; //add every product from tempcart, it works!


?>

<?php $layout->printheader("css/done.css");?>
<main>
<div class="done-container">


<?php $lastinforealcart = $servicerealcart->GetLastInfo($getlastid) ?>

<section class="indicator2">
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="cart.php">Cart</a></li>
    <li class="breadcrumb-item"><a href="checkout.php">Checkout</a></li>
    <li class="breadcrumb-item active" aria-current="page">Total price</li>
  </ol>
</nav>
</section>

<div class="doneinfo-container">

  <h1>Thank you for shopping at Shoapmy</h1>
  <p>We sent an email with more information about your cart </p>
  <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Product name</th>
      <th scope="col">Price</th>
      <th scope="col">Quantity</th>
    </tr>
  </thead>
  <tbody>
  <?php foreach($lastinforealcart as $info) : ?>
    <tr>
      <th scope="row"><?php echo $info->name?></th>
      <td><?php echo $info->price?></td>
      <td><?php echo $info->quantityproduct?></td>
     
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>



</div><!-- the done info container ends -->

</div> <!-- the done container ends -->
</main>

<?php $layout->printfooter("css/checkout.css");?>


