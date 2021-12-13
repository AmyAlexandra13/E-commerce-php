<?php

Class Users{
    public $id_user;
    public $name;
    public $lastname;
    public $email;
    public $contra;
    public $payment;
    public $role;


    public function InizializeData($id_user, $name,$lastname,$email,$contra,$payment,$role){
        $this->id_user = $id_user;
        $this->name = $name;
        $this->lastname = $lastname;
        $this->email = $email;
        $this->contra = $contra;
        $this->payment = $payment;
        $this->role = $role;
    }

}

?>