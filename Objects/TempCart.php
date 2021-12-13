<?php
Class TempCart{
    public $id_product;
    public $quantity_product;


public function InizializeData($id_product,$quantity_product){
    $this->id_product = $id_product;
    $this->quantity_product = $quantity_product;
}


}


?>