<?php

class UserHandler{
    private $connection;

    function __construct($directory)
    {
        $this->connection = new databaseConnection($directory);
    }

    function AddUser($object)
    {
        $stm = $this->connection->db->prepare('insert into users (name, lastname, email, contra, payment, role) Values(?,?,?,?,?,?)');
        $stm->bind_param('ssssss', $object->name, $object->lastname, $object->email, $object->contra, $object->payment, $object->role);
        $stm->execute();
        $stm->close();
    }

    

}
?>