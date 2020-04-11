<?php
session_start();

include("validate.php");



?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <title>Online Food Order Management System</title>
</head>
<body>
<?php

?>
    <div class="admin-header full-height">
        <div class="container">
            <div class="row text-center">
                <div class="col-sm-4">
                </div>
                <div class="col-sm-4">
                </div>
                <div class="col-sm-4">
                        <div class="admin-login">
                            <div class="avatar">
                                <img class="admin-avatar" src="../img/Admin.png">
                            </div>
                            <div class="admin-section">

                                <div class="form-section">
                                    <form action="index.php" method="POST">
                                        <input class="form-control admin-username" name="uname" id="user" placeholder="Username" type="text">
                                        <input class="form-control admin-password" name="passwd" id="pass" placeholder="Password" type="password">
                                        <input class="form-control admin-submit" name="submit" type="submit" value="Submit">
                                    </form>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
