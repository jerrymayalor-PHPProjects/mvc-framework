<?php

namespace Views;

use Models\Users;
Use Views;


class UsersView extends Users{
    public function viewMessage() {
        $getModelMessage = $this->userModelMessage();
        echo  $getModelMessage . "Views-> ";
    }
}
