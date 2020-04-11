<?php
session_start();
if(!isset($_SESSION['user'])){
    header("validate.php");
}
?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Admin Home</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <link href="css/style.css" rel="stylesheet">

</head>


<body>

<header id="header">
    <div class="container-fluid">

        <div id="logo" class="pull-left">
            <h1>Admin Home</h1>
        </div>

        <nav id="nav-menu-container">
            <ul class="nav-menu">
                <li><a href="">Dashboard</a></li>
                <li><a href="">Add rider</a></li>
                <li><a href="">Add hotel</a></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
        </nav>
    </div>
</header>


</body>
</html>
