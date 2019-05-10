<?php

session_start();

// print_r($_SESSION);

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

    <!-- Custom Stylesheets -->
    <link rel="stylesheet" type="text/css" href="assets/css/main.css">

</head>
<body>
    
    <div class="container">
        <div class="card text-center bg-dark">
            <div class="card-header bg-dark">
                <ul class="nav nav-tabs card-header-tabs">
                    <li class="nav-item">
                        <a class="nav-link bg-dark" href="assets/php/logout.php">Sign out</a>
                    </li>
                </ul>
            </div>
            <div class="container" id="userInfo">
                <div class="card-body">
                    <div class="card text-white bg-secondary mb-3" style="max-width: 18rem;">
                        <div class="card-header">
							<p>
							<?php
    							if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
									echo $_SESSION['username'];
								} else {
									echo 'Username';
								}
							?>
							</p>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Your Info</h5>
                            <p class="card-text"></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container" id="userPost">

            </div>
        </div>
    </div>

</body>
</html>
