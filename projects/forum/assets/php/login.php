<?php

require 'connection.php';

$name = $_POST['username'];
$pswd = md5($_POST['pswd']);

class login extends connection {

    public function __construct() {}
    
    public function login($name, $pswd) {

        try {
        $con = new connection;
        $connection = $con->connect();

        $sql = "SELECT `name`, `PSWD` FROM `persons` WHERE `name`=? AND `PSWD`=? ";
        $query = $connection->prepare($sql);
        $query->execute(array($name,$pswd));

        } catch (PDOException $e) {
            echo "Something went wrong: " . $e->getMessage();
        }

    }

}

$login = new login();
$login->login($name, $pswd);