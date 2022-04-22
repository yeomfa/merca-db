<?php

require_once ("DataBase.php");
require_once(__DIR__."/../entity/User.php");

class UserDAO{

    public function loginUser($email, $password){

        $dataBase = new DataBase();
        $dataTable = $dataBase->runQuery("SELECT * FROM user WHERE email=:email AND password=:password", array(':email'=>$email,':password'=>$password));

        $user = null;
        if (count($dataTable) == 1) {
            foreach ($dataTable as $i => $value) {
                $user = new User(
                                $dataTable[$i]["id"],
                                $dataTable[$i]["name"],
                                $dataTable[$i]["email"],
                                $dataTable[$i]["password"],
                                $dataTable[$i]["admin"]);
            }
        }
        return $user;
    }

    public function registerUser(User $user){
        $dataBase = new DataBase();

        $stmt1 = "INSERT INTO user VALUES (NULL, :name, :email, :password, :admin)";

        $result = $dataBase->runUpdate($stmt1, array(
            ':name'=>$user->getName(),
            ':email'=>$user->getEmail(),
            ':password'=>$user->getPassword(),
            ':admin'=>$user->admin()
            )
        );

        return $result;
    }

}

 ?>
