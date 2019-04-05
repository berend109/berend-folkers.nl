<?php

    require 'connection.php';

    // echo "usrname | pswd";
    // echo "<br/>";
    // echo "<br/>";
    // echo implode(" | ",$_POST);
    // echo "<br/>";
    // echo "<br/>"; 

class register extends connection {
    public function userInfo() {
        $stmt = $this->connect()->query("SELECT * FROM users");
    }
}
