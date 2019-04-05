<?php

    require 'connection.php';

    // echo "usrname | pswd";
    // echo "<br/>";
    // echo "<br/>";
    // echo implode(" | ",$_POST);
    // echo "<br/>";
    // echo "<br/>"; 
<<<<<<< HEAD
    
    class register extends connection {
        public function userInfo() {
            $stmt = $this->connect()->query("SELECT * FROM users");
        }
    }
=======

class register extends connection {
    public function userInfo() {
        $stmt = $this->connect()->query("SELECT * FROM users");
    }
}
>>>>>>> 52fd95513ac99f4eaf0f84e87325b035df6f9f2a
