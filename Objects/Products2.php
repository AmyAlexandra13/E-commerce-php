<?php
Class Products2 {

  public  $idproduct;
  public $name;
  public $description;
  public $quantity;
  public $price;
  public $urlphoto;

  public function InizializeData($idproduct, $name, $description, $quantity, $price, $urlphoto){
      $this->idproduct = $idproduct;
      $this->name = $name;
      $this->description = $description;
      $this->quantity = $quantity;
      $this->price = $price;
      $this->urlphoto = $urlphoto;
  }

}
?>