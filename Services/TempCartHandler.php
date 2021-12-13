<?php


class TempCartHandler{
    private $connection;

    function __construct($directory)
    {
        $this->connection = new databaseConnection($directory);
    }

    function Addproducts($object)
    {
        $stm = $this->connection->db->prepare('insert into tempcart (id_product, quantity_product) Values(?, ?)');
        $stm->bind_param('ii', $object->id_product, $object->quantity_product); //try to put 1 here
        $stm->execute();
        $stm->close();
    }
    

    function GetTempCart(){
        $tableList = array();

        $stm = $this->connection->db->prepare('Select * FROM tempcart');
        $stm->execute();

        $result = $stm->get_result();

        if($result->num_rows === 0)
        {
            return $tableList;
        } else{
            while ($row = $result->fetch_object()){
                $tempcart = new TempCart(); //taking the propertie from the class
                $tempcart->id_product = $row->id_product;
                $tempcart->quantity_product = $row->quantity_product;

                array_push($tableList, $tempcart); //push objects
            }

            $stm->close();
            return $tableList;
        }
    }

    function GetSpecificInformation()
    {
        $tableList = array();


        $stm = $this->connection->db->prepare("Select products.idproduct, products.urlphoto, products.name, products.price, tempcart.quantity_product from tempcart INNER JOIN products on products.idproduct = tempcart.id_product;");
        $stm->execute();

        $result = $stm->get_result();

        if($result->num_rows === 0){
            return $tableList;
        } else{
            while($row = $result->fetch_object()){
                $row->idproduct = $row->idproduct;
                $row->urlphoto = $row->urlphoto;
                $row->name = $row->name;
                $row->price =  $row->price;
                $row->quantity_product = $row->quantity_product;

                array_push($tableList, $row);
            }

            $stm->close();
            return $tableList;
        }
    }
    


  
}//closing class
?>