<?php

Class RealCart{
    public $id_realcart;
    public $id_user2;
    public $id_product2;
    public $id_coupon2;
    public $quantityproduct;


    public function InizializeData($id_realcart, $id_user2,$id_product2,$id_coupon2, $quantityproduct)
{
        $this->id_realcart = $id_realcart;
        $this->id_user2 = $id_user2;
        $this->id_product2 = $id_product2;
        $this->id_coupon2 = $id_coupon2;
        $this->quantityproduct = $quantityproduct;
    }


}




?>