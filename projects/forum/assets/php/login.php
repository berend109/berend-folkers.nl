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
            echo 'wrong password or username 
                <a href="../../index.php">TRY AGAIN !!</a>';
        }

    }

}

$login = new login(); // class
$login->login($con, $name, $pswd); // function
