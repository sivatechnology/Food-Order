<?php
session_start();
if(isset($_SESSION['username']))
{
    header("location:admin_home.php");
}


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
                                    <form action="#" method="POST">
                                        <input class="form-control admin-username" name="user" id="user" placeholder="Username" type="text" autocomplete="off">
                                        <input class="form-control admin-username" data-toggle="password" class="form-control" type="password" style="outline:none" placeholder="Enter Password" name="pass">
                                        <br><br>
                                        <input type="submit" id="btn" name="submit" value="Login">

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
<?php

if(isset($_POST['submit']))
{

    $username= $_POST['user'];
    $password= $_POST['pass'];


    $link=mysqli_connect("localhost","root","","project") or die($link);
    $username =mysqli_real_escape_string($link,$username);
    $password =mysqli_real_escape_string($link,$password);

    $result=mysqli_query($link,"select * from admin where id='$username' and password='$password'") or die("failed to query database".mysqli_error($link));

    if(mysqli_num_rows($result)>0)
    {
        session_start();
        $_SESSION["username"] = $username;
        if(!isset($_SESSION['username']))
        {
            echo "<script>alert('Invalid ID or Password. You are in admin page if you are not admin then go to employee Login.')</script>";
        }
        else
        {
            echo"<script>location.href='admin_home.php'</script>";
        }
    }
    else
    {
        echo "<script>alert('Invalid ID or Password. You are in admin page if you are not admin then go to employee Login.')</script>";
    }

}
?>