<?php

session_start();

require 'connection.php';

$pdo = new connection; // class
$con = $pdo->connect(); // function
$name = $_POST['username'];
$pswd = $_POST['pswd'];

class login {

    public function __construct() {}

    public function login($con, $name, $pswd) {

        $stmt = $con->prepare("SELECT * FROM persons WHERE name = ?");
        $stmt->execute([$name]);
        $user = $stmt->fetch();

        if ($user && password_verify($pswd, $user['PSWD'])) {
	    	$_SESSION['username'] = $_POST['username'];
			$_SESSION['loggedin'] = true;
            header( "Refresh:0; url=../../frontPage.php");
        } else {
            echo 'You put in the wrong info to log in TRY AGAIN !!';
            header( "Refresh:5; url=../../index.php");
        }

    }

}

$login = new login(); // class
$login->login($con, $name, $pswd); // function
