<?php

require 'connection.php';

$name = $_POST['username'];
$pswd = $_POST['pswd'];
$pswd = md5($pswd);

class Register {

    public function __construct() {}

    public function register($name, $pswd) {

        try {
        $con = new connection;
        $connection = $con->connect();

        $sql = "INSERT INTO `persons` (`name`, `PSWD`) VALUES ('$name', '$pswd')";

        $stmt = $connection->prepare($sql);
        $stmt->execute();

        echo "You are now registered !!";

        header( "Refresh:5; url=../../index.php", true, 303);

        } catch (PDOException $e) {
            echo "Something went wrong: " . $e->getMessage();
        }

    }

}

$reg = new Register();
$reg->register($name, $pswd);