<?php

require 'connection.php';

$name = $_POST['username'];
$pswd = $_POST['pswd'];

class Register {

    public function __construct() {

    }

    public function register($name, $pswd) {

        try {
        $con = new connection;
        $connection = $con->connect();

        $sql = "INSERT INTO `persons` (`name`, `PSWD`) VALUES ('$name', '$pswd')";

        $stmt = $connection->prepare($sql);
        $stmt->execute();

        } catch (PDOException $e) {
            echo "Something went wrong: " . $e->getMessage();
        }

    }

}

$reg = new Register();
$reg->register($name, $pswd);