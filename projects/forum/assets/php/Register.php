<?php
    
    require 'Connection.php';
    
    // test code
    print_r(pdo_drivers());
    echo "<br/>";
    echo "<br/>";
    echo "usrname | pswd";
    echo "<br/>";
    echo "<br/>";
    echo implode(" | ",$_POST);
    echo "<br/>";
    echo "<br/>";
    $object = new Connection;
    $object->connect();

?>