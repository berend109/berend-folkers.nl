<?php
    include_once 'assets/php/connection.php';
?>

<!DOCTYPE html>
<html>

<head>
    <title>Forum</title>

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

    <h1>This page is made because of a school project NEVER submit personal info.</h1>

    <div class="jumbotron container form-group">
        <div class="row">
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <form action="assets/php/login.php" method="post">
                            <p>Log in</p>
                            <div class="form-group">
                                <label for="exampleInputName">Username</label>
                                <input name="username" type="text" class="form-control" placeholder="Username">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword">Password</label>
                                <input name="pswd" type="password" class="form-control" placeholder="Password">
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <form action="assets/php/register.php" method="post">
                            <p>Register</p>
                            <div class="form-group">
                                <label for="exampleInputName">Username</label>
                                <input name="username" type="text" class="form-control" placeholder="Username">
                            </div>
                            <!-- <div class="form-group">
                                <label for="exampleInputEmail1">Email</label>
                                <input name="mail" type="email" class="form-control" placeholder="Email">
                            </div> -->
                            <div class="form-group">
                                <label for="exampleInputPassword1">Password</label>
                                <input name="pswd" type="password" class="form-control" placeholder="Password">
                            </div>
                            <!-- <div class="form-group">
                                <label for="exampleInputPassword2">Password</label>
                                <input name="pswd" type="password" class="form-control" placeholder="Password">
                            </div> -->
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
            <?php
                echo "<br/>";
                echo "<br/>";
                $object = new connection;
                $object->connect();
                $object->usrInfo();
            ?>
        </div>
    </div>

</body>
</html>