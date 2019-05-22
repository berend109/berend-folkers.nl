<?php

session_start();

if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
    
} else {
    echo 'You are not logged in !!';
    header("Refresh:5; url=index.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Forum Page</title>

    <!--Favicon Image-->
    <link rel="icon" href="assets/img/FaviconIMG.jpg" type="image/gif" sizes="16x16">

    <!-- Stylesheets (Bootstrap) -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Javascript (JQuery + Bootstrap JS) -->
    <script src="http://code.jquery.com/jquery-3.3.1.min.js"
        integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>

    <!-- Fonts (Bootstrap + Google)-->
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet">

    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" 
        integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

    <!-- Custom Stylesheets -->
    <link rel="stylesheet" type="text/css" href="assets/css/main.css">
    <link rel="stylesheet" type="text/css" href="assets/css/frontPage.css">

</head>
<body>
    
    <div class="container">
        <div class="card text-center">
            <div class="card-header">
                <ul class="nav nav-tabs card-header-tabs">
                    <li class="nav-item">
                        <a class="nav-link" href="assets/php/logout.php">Sign out</a>
                    </li>
                </ul>
            </div>
            <div class="container">
                <div class="row">
                    <div class="container col-4" id="userInfo">
                        <div class="card-body">
                            <div class="card b-3">
                                <div class="card-header">
                                    <p>
                                        <?php
                                            if (isset ($_SESSION['loggedin']) == true) {
                                                echo $_SESSION['username'];
                                            } else {
                                                echo 'Username';
                                            }
                                        ?>
                                    </p>
                                </div>
                                <div class="card-body">
                                    <p class="card-text"></p>
                                    <p>Naam:</p>
                                    <p>Datum:</p>
                                    <p>Woonplaats:</p>
                                    <p>Member since:</p>
                                    <button type="button" class="btn btn-light">
                                        <i class="fas fa-sliders-h"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container col-8" id="userPost">
                        <div class="card-body">
                            <div class="card b-3">
                                <div class="card-header">
                                    <p>message</p>
                                </div>
                                <div class="card-body">
                                    <textarea class="form-control" rows="5"></textarea>
                                </div>
								<button type="button" class="btn btn-primary" id="messageSubmit">Submit</button>
								<!--<div class="custom-control custom-switch">
									<input type="checkbox" class="custom-control-input" id="switch1">
									<label class="custom-control-label" for="switch1">Privacy</label>
								</div>-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>
