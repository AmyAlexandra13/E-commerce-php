<?php

require_once 'FileHandler\JsonFileHandler.php';
require_once 'databaseHandler\databaseConnection.php';
require_once 'Services\TempCartHandler.php';

$services = new TempCartHandler('databaseHandler');


$queries = array();
parse_str($_SERVER['QUERY_STRING'], $queries);

$services->DeleteById($queries['id_product']);

echo json_encode($queries);


?>