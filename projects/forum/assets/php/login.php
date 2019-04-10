<?php

require 'connection.php';

$name = $_POST['username'];
$pswd = $_POST['pswd'];
$pswd = md5($pswd);

class login extends connection {
    
    public function login() {

        

    }

}

$login = new login();
$login->login($name, $pswd);