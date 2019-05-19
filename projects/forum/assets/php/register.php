<?php

session_start();

require 'connection.php';

$name = $_POST['username'];
$pswd = $_POST['pswd'];
<<<<<<< HEAD
$pswd = md5($pswd);
=======
$pswd = password_hash($pswd, PASSWORD_DEFAULT);
>>>>>>> 6ace0b0b2df88ba3973141c52ae6b081888e6006

class register {

    public function __construct() {}
<<<<<<< HEAD
=======
    
    public function register($name, $pswd) {

        try {		
		$pdo = new connection; // class
		$con = $pdo->connect(); // function
		
		$stmt = $con->prepare("SELECT * FROM persons WHERE name = ?");
        $stmt->execute([$name]);
        $user = $stmt->fetch();
>>>>>>> 6ace0b0b2df88ba3973141c52ae6b081888e6006

		if ($user) {
	    	$_SESSION['username'] = $_POST['username'];
			echo "Username taken";
			header( "Refresh:5; url=../../index.php");
		} else {
			$sql = "INSERT INTO `persons` (`name`, `PSWD`) VALUES ('$name', '$pswd')";
			$stmt = $con->prepare($sql);
			$stmt->execute();
			
			echo "You are now registered !!";
			header( "Refresh:5; url=../../index.php");
		}

        echo "You are now registered !!";

        header( "Refresh:5; url=../../index.php");

        } catch (PDOException $e) {
            echo "Something went wrong: " . $e->getMessage();
        }

    }

}

$reg = new register(); // class
$reg->register($name, $pswd); // function