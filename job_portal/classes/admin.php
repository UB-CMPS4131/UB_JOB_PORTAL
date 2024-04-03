<?php

class Admin extends User{
    private $username;
    private $email;
    public function __construct($username, $email)
    {
        $this->username = $username;
        $this->email = $email;
    }
    public function getAdminInfo(){
        return array(
            'username' => $this->usernazme,
            'email' => $this->email
        );
    }
}