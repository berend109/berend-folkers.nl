<?php

session_start();

require 'connection.php';

$name = $_POST['username'];
$pswd = $_POST['pswd'];
$pswd = password_hash($pswd, PASSWORD_DEFAULT);

class register {

    public function __construct() {}
    
    public function register($name, $pswd) {

        try {		
		$pdo = new connection; // class
		$con = $pdo->connect(); // function
		
		$stmt = $con->prepare("SELECT * FROM persons WHERE name = ?");
        $stmt->execute([$name]);
        $user = $stmt->fetch();

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