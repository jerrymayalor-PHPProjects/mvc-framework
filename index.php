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
                    // $userContrlr = new UsersController();
                    // $userContrlr->createUser('Glayden');
                    $userContrlr = new UsersController();
                    $userContrlr->editUser( 1, 'Jerry May' );

                    $viewUsers = new UsersView();
                    $viewUsers->showAllUsers();
              
                ?>
            </center>
        </div>
    </div>

    
</body>
</html>