<?php
class RealCartHandler{
    function __construct($directory)
    {
        $this->connection = new databaseConnection($directory);
    }  

    function AddRealCart($object){
        $stm = $this->connection->db->prepare('insert into realcart (id_user2, id_product2, id_coupon2, quantityproduct) Values(?,?,?,?)');
        $stm->bind_param('iiii', $object->id_user2, $object->id_product2, $object->id_coupon2, $object->quantityproduct);
        $stm->execute();
    }
}
?>