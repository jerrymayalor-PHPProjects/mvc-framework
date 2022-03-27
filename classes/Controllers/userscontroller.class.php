<?php

namespace Controllers;

Use Controllers;
use Models\Users;

class UsersController extends Users{

    public function controllerMessage(){
        $getModelMessage = $this->userModelMessage();
        echo  $getModelMessage . "Controller-> ";
    }
    
}