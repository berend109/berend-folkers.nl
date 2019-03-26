<?php
    
    require 'Connection.php';

    $username = $_POST['username'];
    $pswd = $_POST['pswd'];

    echo '<br>';
    echo '<br>';
    echo 'username = ';
    echo $username;
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