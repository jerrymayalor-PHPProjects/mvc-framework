<?php

use Controllers\UsersController;
use Database\Dbh;
use Database\Users;
use LDAP\Result;
use Models\Users as ModelsUsers;
use Views\UsersView;

  include 'class-autoloader.php' ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="main">
            <center>
                <?php 
                //    $db = new Database\Dbh();
                //    echo $db->databaseMessage();
                //    $userCls = new Models\Users();
                //    echo $userCls->userModelMessage();
                   $userControler = new Controllers\UsersController();
                   echo $userControler->controllerMessage(); 

                   echo "<hr>";

                   $userView = new Views\UsersView;
                   echo $userView->viewMessage(); 
                ?>
            </center>
        </div>
    </div>

    
</body>
</html>