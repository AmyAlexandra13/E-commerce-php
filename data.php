<?php
require_once 'FileHandler\JsonFileHandler.php';
require_once 'databaseHandler\databaseConnection.php';
require_once 'Objects\TempCart.php';
require_once 'Services\TempCartHandler.php';

$servicetempcart = new TempCartHandler('databaseHandler');

if(isset($_POST['id_product'])){
$servicetempcart->DeleteById($_POST['id_product']);
header("Location: cart.php");
exit();
//delete

}
?>