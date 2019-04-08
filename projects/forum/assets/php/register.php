<?php

require 'connection.php';
// session_start();
$name = $_POST['username'];
$pswd = $_POST['pswd'];

class register extends connection {

    public function register($name, $pswd) {

        $con = new connection;
        $con->connect();

        $sql = "INSERT INTO 'persons' ('name', 'PSWD') VALUES ($name, $pswd)";

        if($con->query($sql) === TRUE) {
            echo "Je bent nu geregistreerd.";
        } else {
            echo "Error: " . $con . "<br>" . $con->error;
        }

    }

}

// echo "\$_POST['username']";
// echo "<br />";
// echo $_POST['username'];
// echo "<br />";
// echo "<br />";
// echo "\$_POST['pswd']";
// echo "<br />";
// echo $_POST['pswd'];
// echo "<br />";
// echo "<br />";
// echo implode(" | ",$_POST);
// echo "<br/>";
// echo "<br/>";
// $con = new connection;
// $con->connect();