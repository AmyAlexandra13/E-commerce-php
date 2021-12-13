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


session_start();

$layout = New Layout('Checkout');


$serviceuser = new UserHandler('databaseHandler');
$newuser = new Users();



if(isset($_POST['name'])){
    $newuser = new Users();
    $newuser->InizializeData(0, $_POST['name'],$_POST['lastname'], $_POST['email'], $_POST['contra'], $_POST['payment'], "normal");
        var_dump($newuser);
    $serviceuser->AddUser($newuser);
    header("Location: done.php");
    exit();
}

?>

<?php $layout->printheader("css/checkout.css");?>

<div class="done-container">
<div class="doneinfo-container">
    

</div><!-- the done info container ends -->

</div> <!-- the done container ends -->


<?php $layout->printfooter("css/checkout.css");?>


