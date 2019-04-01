<?php

class Connection {

    private $servername;
    private $username;
    private $password;
    private $dbname;
    private $charset;

    protected function connect() {
        $this->servername = "localhost";
        $this->username = "root";
        $this->password = "";
        $this->dbname = "database";
        $this->charset = "utf8";
    }

}

?>
