<?php

require 'connection.php';

$name = $_POST['username'];
$pswd = md5($_POST['pswd']);

class login extends connection {

    public function __construct() {}

    public function login($name, $pswd) {

        $stmt = $con->prepare("SELECT username FROM users WHERE username = :name");
        $stmt->bindParam(':name', $username);
        $stmt->execute();

        if($stmt->rowCount() > 0){
            echo "exists!";
        } else {
            echo "non existant";
        }

    }

}

$login = new login();
$login->login($name, $pswd);