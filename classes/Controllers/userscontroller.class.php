<?php

namespace Controllers;

Use Controllers;
use Models\Users;

class UsersController extends Users{

    // public function controllerMessage(){
    //     $getModelMessage = $this->userModelMessage();
    //     echo  $getModelMessage . "Controller-> ";
    // }

    /* === INSERT DATA INTO DATABASE === */
    public function createUser( $name ){
        $this->insertUser( $name );
    }

    /* === INSERT DATA INTO DATABASE === */
    public function editUser( $id , $name){
        $this->updateUser( $id , $name);
    }
    
}
