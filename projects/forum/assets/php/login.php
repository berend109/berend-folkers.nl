<?php

session_start();

require 'connection.php';

$pdo = new connection;
$con = $pdo->connect();
$name = $_POST['username'];
$pswd = $_POST['pswd'];

class login {

    public function __construct() {}

    public function login($con, $name, $pswd) {

        $stmt = $con->prepare("SELECT * FROM persons WHERE name = ?");
        $stmt->execute([$name]);
        $user = $stmt->fetch();

        if ($user && password_verify($pswd, $user['PSWD'])) {
	    echo 'You  are logged in loading forum page for you.';
	    $_SESSION['username'] = $_POST['username'];	
            header( "Refresh:5; url=../../frondPage.php");
        } else {
            echo 'You put in the wrong info to log in TRY AGAIN !!';
            header( "Refresh:5; url=../../index.php");
        }

    }

}

$login = new login();
$login->login($con, $name, $pswd);
