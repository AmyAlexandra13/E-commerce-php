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


    function GetLastInfo($lastid)
    {
        $tableList = array();
        $stm = $this->connection->db->prepare('select users.email, products.name, products.price, realcart.quantityproduct from realcart INNER JOIN products on products.idproduct = realcart.id_product2 INNER JOIN users on users.id_user = ?');
        $stm->bind_param('i', $lastid);
        $stm->execute();

        $result = $stm->get_result();

        if($result->num_rows === 0){
            return $tableList;
        } else{
            while($row = $result->fetch_object()){
                $row->email = $row->email;
                $row->name = $row->name;
                $row->price = $row->price;
                $row->quantityproduct =  $row->quantityproduct;

                array_push($tableList, $row);
            }

            $stm->close();
            return $tableList;
        }



    }
}
?>