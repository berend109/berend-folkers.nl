<?php

class connection {

    private $servername;
    private $username;
    private $password;
    private $dbname;
    private $charset;

    public function connect() {
        
        $this->servername = "localhost";
        $this->username = "root";
        $this->password = "";
        $this->dbname = "forum";
        $this->charset = "utf8mb4";

        try {
            $dsn = "mysql:host=".$this->servername.";dbname=".$this->dbname.";charset=".$this->charset;
            $pdo = new PDO($dsn, $this->username, $this->password);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $pdo;
        } catch (PDOException $e) {
            echo "Connection failed: ".$e->getMessage();
        }

    }

    public function usrInfo() {
        $stmt = $this->connect()->query("SELECT * FROM persons");
        while ($row = $stmt->fetch()) {
            $uid = $row['name'];
            $pswd = $row['PSWD'];
            echo ($uid);
            echo ($pswd);
            return $uid;
        }
    }

}