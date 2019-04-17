<?php

require 'connection.php';

$name = $_POST['username'];
$pswd = $_POST['pswd'];
$pswd = password_hash($pswd, PASSWORD_DEFAULT);

class register {

    public function __construct() {}
    
    public function register($name, $pswd) {

        try {
        $con = new connection;
        $connection = $con->connect();

        $sql = "INSERT INTO `persons` (`name`, `PSWD`) VALUES ('$name', '$pswd')";

        $stmt = $connection->prepare($sql);
        $stmt->execute();

        echo "You are now registered !!";

        header( "Refresh:5; url=../../index.php");

        } catch (PDOException $e) {
            echo "Something went wrong: " . $e->getMessage();
        }

    }

}

$reg = new register();
$reg->register($name, $pswd);