<?php

namespace Models;
namespace Views;

Use Models;
Use Views;


class UsersView extends Models\Users {
    public function displayMessage() {

        $message = $this->showMessage();
        return $message;
    }
}
