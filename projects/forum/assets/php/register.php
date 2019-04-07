<?php

require 'connection.php';

class register {

    public function register($name, $pswd) {

        $name = $_POST['username'];
        $pswd = $_POST['pswd'];

        $sql = "INSERT INTO persons ('name', 'PSWD')
        VALUES ($name, $pswd)";

        if ($conn->query($sql) === true) {
            echo "Geregistreerd";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }$conn->close();

    }

}

echo "\$_POST['username']";
echo "<br />";
echo $_POST['username'];
echo "<br />";
echo "<br />";
echo "\$_POST['pswd']";
echo "<br />";
echo $_POST['pswd'];
echo "<br />";
echo "<br />";
echo implode(" | ",$_POST);