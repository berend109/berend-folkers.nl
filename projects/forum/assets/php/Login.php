<?php
    
    require 'Connection.php';

    $mail = $_POST['mail'];
    $pswd = $_POST['pswd'];

    echo '<br>';
    echo '<br>';
    echo 'mail = ';
    echo $mail;
    echo '<br>';
    echo '<br>';
    echo 'pswd = ';
    echo $pswd;
    echo '<br>';
    echo '<br>';

	// make conection
	if ($conn->connect_error) {
	    die('Connection failed: ' . $conn->connect_error);
	} 
	else {
	    echo "string";
	}

?>