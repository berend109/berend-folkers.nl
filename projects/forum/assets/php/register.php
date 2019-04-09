<?php

require 'connection.php';

$name = $_POST['username'];
$pswd = $_POST['pswd'];

class register extends connection {

    public function register($name, $pswd) {

        $con = new connection;
        $connection = $con->connect();

        $sql = "INSERT INTO 'persons' ('name', 'PSWD') VALUES ($name, $pswd)";

        if($connection->query($sql) === TRUE) {
            echo "Je bent nu geregistreerd.";
        } else {
            echo "Error: " . $connection . "<br>" . $connection->error;
        }

    }

}

$reg = new register;
$reg->register();