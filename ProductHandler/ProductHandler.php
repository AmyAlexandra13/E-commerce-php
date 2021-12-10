<?php

Class ProductHandler{

    private $connection;

    function __construct($directory) //getting the databbaseconnection
    {
        $this->connection = new databaseConnection($directory);
    }


     function GetAllProducts()
    {
        $tableList = array();

        $stm = $this->connection->db->prepare('Select * FROM products');
        $stm->execute();

        $result = $stm->get_result();

        if($result->num_rows === 0)
        {
            return $tableList;

        } else{
            while ($row = $result->fetch_object()){
                $products = new Products2();//Take the properties from the class

                $products->idproduct = $row->idproduct;
                $products->name = $row->name;
                $products->description = $row->description;
                $products->quantity = $row->quantity;
                $products->price = $row->price;
                $products->urlphoto = $row->urlphoto;

                array_push($tableList, $products);//push objects
            }


            $stm->close();
            return $tableList;


        }

    }

}//That closes the class




?>