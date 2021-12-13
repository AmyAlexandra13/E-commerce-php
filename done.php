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
endforeach;




?>

<?php $layout->printheader("css/checkout.css");?>

<div class="done-container">
<div class="doneinfo-container">
<h1><?php echo $getlastid?> </h1>
<?php var_dump($newrealcart); ?>

</div><!-- the done info container ends -->

</div> <!-- the done container ends -->


<?php $layout->printfooter("css/checkout.css");?>


