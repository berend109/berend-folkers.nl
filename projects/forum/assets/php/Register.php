<?php
    
    require 'Connection.php';

    // make conection
	if ($conn->connect_error) {
	    die('Connection failed: ' . $conn->connect_error);
	} 
	else {
	    echo "string";
	}

?>