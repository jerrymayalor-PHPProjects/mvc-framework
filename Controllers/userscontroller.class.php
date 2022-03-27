<?php


class UsersController extends Users {

    public function cntrlrMessage() {
        $getModelMessage = $this->userModelMessage();
        echo  $getModelMessage . "Controller-> ";
    }

    /* === INSERT DATA INTO DATABASE === */
    public function createUser( $name ){
        $this->insertUser( $name );
    }

    /* === INSERT DATA INTO DATABASE === */
    public function editUser( $id , $name){
        $this->updateUser( $id , $name);
    }
    
}



