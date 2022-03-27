<?php

namespace Models;
namespace Controllers;

Use Models;
Use Controllers;


class UsersController extends User {

    public function controllerMessage(){
        echo "Controller-> ";
    }
    
}