<?php

class connection {
    protected $servername;
    protected $username;
    protected $password;
    protected $dbname;

    function Dbconfig() {
        $this -> servername = 'localhost';
        $this -> username = 'root';
        $this -> password = '';
        $this -> dbname = 'dbase';
    }
}

?>