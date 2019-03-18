
<?php

    echo '<link rel="icon" href="../../img/FaviconIMG.jpg" type="image/gif" sizes="16x16">';

    $servername = 'localhost';
    $username = 'root';
    $password = '';
    $dbname = "database";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } // if successfully you get the message in screen and a link to go back to the main page.
    else {
        echo "Connection successfully";
        echo "<br>";
        echo "<br>";
        echo "<br>";
        echo "<a href='../../index.html'>Go back</a>"; 
    };
    
?>
