<?php
class databaseConnection
{
    public $db;
 private $json;

 function __construct($directory)
 {
     $this->json = new JsonFileHandler($directory,'config');
     $read = $this->json->getJSON();//Desqualize the JSON
     $this->db = new mysqli($read->server,$read->user,$read->password,$read->database);

     if($this->db->connect_error) {

         exit('Error connecting to DB');
     }
 }


}

?>