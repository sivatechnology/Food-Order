<?php
?>
<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>Admin</title>

    <style>
        .circle{
            width: 150px;
            height: 150px;
            border-radius: 50%;
            position: absolute;
            top: -27%;
            left: calc(50% - 75px);
            background-color: #1d2124;
        }
        }

        h2{
            font-family: "Montserrat", sans-serif;
            font-weight: 400;
            margin: 0 0 20px 0;
            padding: 0;
            text-align: center;
            color:#fff;
        }
        .login-box{
            width: 420px;
            height: 320px;
            background: rgba(0,0,0,0.6);
            color: #fff;
            top: 50%;
            left: 75%;
            position:absolute;
            transform: translate(-50%,-50%);
            box-sizing: border-box;
            padding: 70px 20px;
            border-radius: 20px;
            text-align: center;
            opacity: 0.7;
        }
        .login-box input{
            width: 100%;
            margin-bottom: 20px;
        }
        .login-box input[type="text"],input[type="password"]
        {
            border:none;
            border-bottom: 1px solid #fff;
            border-top: 1px solid #fff;
            border-left: 1px solid #fff;
            border-right: 1px solid #fff;
            background: transparent;
            outline: none;
            height: 35px;
            color: #fff;
            font-size: 16px;
            border-radius: 13px;
            padding-left:15px;
        }


        .login-box input[type="submit"]
        {
            border:none;
            outline: none;
            height: 40px;
            background: black;
            color:#fff;
            font-size: 18px;
            border-radius: 13px;
            top: 30px;

        }

        .login-box input[type="submit"]:hover
        {
            cursor: pointer;
            background:green ;
            color: white;
        }
        .login-main-content{
            background-image:url("/Images/admin-bg.jpg");
            background-size: cover;
            height: 100%;
            width: 100%;
            background-position: center;
            position: absolute;
            background-repeat:no-repeat;
        }
        ::placeholder{
            color:#fff;
        }

    </style>
</head>
<body>
<div class="login-main-content">
    <div class="login-main">
            <div class="login-box">
                <div class="circle"></div>
                <h2><b>Admin</b></h2>
                <form action="#" method="POST">
                    <input type="text" id="user" placeholder="Username"  name="user" autocomplete="off" >
                    <br>
                    <input type="password"
                           placeholder="Password">
                    <br><br>
                    <input type="submit" id="btn" name="submit" value="Login">
                </form>
            </div>
    </div>
</div>
</body>
</html>
