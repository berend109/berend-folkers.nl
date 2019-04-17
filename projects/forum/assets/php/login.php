<?php

require 'connection.php';

$pdo = new connection;
$con = $pdo->connect();
$name = $_POST['username'];
$pswd = $_POST['pswd'];
// $pswd = md5($pswd);

class login {

    public function __construct() {}

    public function login($con, $name, $pswd) {

        $stmt = $con->prepare("SELECT * FROM persons WHERE name = ?");
        $stmt->execute([$name]);
        $user = $stmt->fetch();
        print_r($user);
        echo "<br>";
        echo "<br>";
        
        if ($user && password_verify($pswd, $user['PSWD'])) {
            echo 'CAN THIS WORK ??';
        } else {
            echo 'NO THIS IS NOT WORKING';
        }

    }

}

$login = new login();
$login->login($con, $name, $pswd);