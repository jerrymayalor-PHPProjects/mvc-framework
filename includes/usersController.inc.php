<?php

include 'class-autoloader.inc.php';

$name = $_POST['name'];
$age = $_POST['age'];

$userObj = new Users( $name, $age );
$userObj->insertUser( $name, $age);


// class UsersController extends Users {

//     public $name;
//     public $age;

//     public function cntrlrMessage() {
//         $getModelMessage = $this->userModelMessage();
//         echo  $getModelMessage . "Controller-> ";
//     }

//     /* === INSERT DATA INTO DATABASE === */
//     public function createUser( $name, $age ){
//         $this->insertUser( $name, $age );
//     }

//     /* === INSERT DATA INTO DATABASE === */
//     public function editUser( $id , $name){
//         $this->updateUser( $id , $name );
//     }
    
// }



