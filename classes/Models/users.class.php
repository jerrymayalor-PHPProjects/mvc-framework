<?php

namespace Models;

use Database\Dbh;
use Models;

class Users extends Dbh{

    public function userModelMessage(){
       $getDbMessage = $this->databaseMessage(); 
       echo $getDbMessage . "Model-> ";
    }

    
}


