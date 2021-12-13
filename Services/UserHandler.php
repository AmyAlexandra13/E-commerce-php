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

    function GetUsers(){
        $tableList = array();

        $stm = $this->connection->db->prepare('Select * FROM users');
        $stm->execute();

        $result = $stm->get_result();

        if($result->nums_rows === 0)
        {
            return $tableList;
        } else{
            while($row = $result->fetch_onject()){
                $user = new Users();
                $user->id_user = $row->id_user;
                $user->name = $row->name;
                $user->lastname = $row->lastname;
                $user->email = $row->email;
                $user->contra = $row->contra;
                $user->payment = $row->payment;
                $user->role = $row->role;

                array_push($tableList, $user);
            }

            $stm->close();
            return $tableList;
        }
    }


    function GetLastInformation()
    {
        $tableList = array();

        $stm = $this->connection->db->prepare("Select id_user, name, lastname, email from users order by id_user desc LIMIT 1;");
        $stm->execute();

        $result = $stm->get_result();

        if($result->num_rows === 0){
            return $tableList;
        } else{
            while($row = $result->fetch_object()){
                $row->id_user = $row->id_user;
                $row->name = $row->name;
                $row->lastname = $row->lastname;
                $row->email = $row->email;

                array_push($tableList, $row);
            }

            $stm->close();
            return $tableList;
        }

    }
  
    

}
?>