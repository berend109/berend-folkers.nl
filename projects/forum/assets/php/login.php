<?php

session_start();

require 'connection.php';

<<<<<<< HEAD
$name = $_POST['username'];
$pswd = $_POST['pswd'];
$pswd = md5($pswd);

class login extends connection {
    
    public function login() {
=======
$pdo = new connection;
$con = $pdo->connect();
$name = $_POST['username'];
$pswd = $_POST['pswd'];

class login {

    public function __construct() {}
>>>>>>> 6ace0b0b2df88ba3973141c52ae6b081888e6006

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

<<<<<<< HEAD
$login = new login();
$login->login($name, $pswd);
=======
$login = new login(); // class
$login->login($con, $name, $pswd); // function
>>>>>>> 6ace0b0b2df88ba3973141c52ae6b081888e6006
