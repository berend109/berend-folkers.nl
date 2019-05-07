<?php

session_start();

session_destroy();

header( "Refresh:5; url=../../index.php");

?>
