<?php
?>

<!Doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <title>Admin Home Page</title>

    <style>
        .normal-header{
            font-size: 16px;
        }
        .content{
            font-size: 14px;
        }
        p{
            margin-top: 0.5rem;
            margin-bottom: 0.5rem;
        }
        .admin-home{
            padding-top: 50px;
            padding-bottom: 10px;
            padding-right: 10px;
            padding-left: 10px;
        }
        .admin-home-top{
            border: 1px black;
            border-style: solid;
            padding-top: 15px;
            padding-left: 10px;
            padding-right: 10px;
            padding-bottom: 10px;
        }
        .admin-home-bottom-main{
            align-items: center;
        }
        .admin-home-bottom{
            padding:10px;
            border: 3px white;
            border-style: solid;
        }
        .admin-home-button
        {
            border: 1px white;
            border-style: solid;
            padding: 10px;
        }
        .navbtn{
            padding: 5px;
        }
        .admin-home-navbtn{
            text-align: center;
            padding-top: 2px;
            padding-bottom: 2px;
            padding-left: 10px;
            padding-right: 10px;
            width: 90px;
        }
        .min-container{
            height: auto;
            width: 100%;
            padding-top: 15px;
            padding-right: 8px;
            padding-left: 8px;
            padding-bottom: 8px;
        }
        .min-con-left{
            text-align: left;
            position: relative;
        }
        .min-con-right{
            text-align: right;
            position: relative;
        }
        .min-container-button{
            width: 50px;
        }
    </style>
</head>
<body>
<div class="container-fluid admin-home">
  <div class="container admin-home-top">
    <div class="row">
        <div class="col-sm-4">
            <div class="admin-home-top-logo">
                <img class="img-thumbnail" src="../img/biryani.jpg" alt="Image not Found" height="auto">
            </div>
        </div>
        <div  class="col-sm-8">
            <div class="container admin-home-content">
                <h1><b>Parambriyam</b></h1>
                <p class="content">Biryani  Bangladeshi  Rice  Beverage</p>
                <p class="normal-header">59Fashion St, Chennai.</p>
                rate  |  15Mins  |  $
                <br>
                <p class="content">It is made with Indian spices, rice, meat (chicken, beef, goat, pork, lamb, prawn, or fish), vegetables or eggs. The word 'biryani' is derived from a Persian word, birian, which means fried before cooking. It is one of the most popular dishes, which has acquired a niche for itself in South Asian cuisine.</p>
            </div>
        </div>
    </div>
  </div><br>

    <div class="container admin-home-bottom-main">
        <div class="container admin-home-bottom">
            <div class="container admin-home-button">
                <div class="row">
                    <div class="col-sm-1 container navbtn">
                        <input class="admin-home-navbtn" type="button" value="All">
                    </div>
                    <div class="col-sm-1 container navbtn">
                        <input class="admin-home-navbtn" type="button" value="Chinese">
                    </div>
                    <div class="col-sm-1 container navbtn">
                        <input class="admin-home-navbtn" type="button" value="Arabian">
                    </div>
                    <div class="col-sm-1 container navbtn">
                        <input class="admin-home-navbtn" type="button" value="Indian">
                    </div>
                    <div class="col-sm-4 container navbtn">
                    </div>
                </div>
            </div><br><br>
            <div class="container">
                <div class="row">
                    <div class="col-sm-3 container">
                        <div class="container ">
                            <img class="img-fluid" height="auto" src="../img/Chicken_Lollipop.jpg" alt="Image not Found">
                            <div class="container min-container">
                                <div class="row">
                                    <div class="col-sm-8 container min-con-left">
                                        <p class="normal-header"><b>Chicken Lollipop</b></p>
                                        <p class="content">Starters</p>
                                        <p>$ 7.75</p>
                                    </div>
                                    <div class="col-sm-4 container min-con-right">
                                        <p>Rate</p>
                                        <input class="min-container-button" type="button" value="Add"><br><br>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3 container">
                        <div class="container ">
                            <img class="img-fluid" height="auto" src="../img/Chicken_Lollipop.jpg" alt="Image not Found">
                            <div class="container min-container">
                                <div class="row">
                                    <div class="col-sm-8 container min-con-left">
                                        <p class="normal-header"><b>Chicken Lollipop</b></p>
                                        <p class="content">Starters</p>
                                        <p>$ 7.75</p>
                                    </div>
                                    <div class="col-sm-4 container min-con-right">
                                        <p>Rate</p>
                                        <input class="min-container-button" type="button" value="Add"><br><br>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3 container">
                        <div class="container ">
                            <img class="img-fluid" height="auto" src="../img/Chicken_Lollipop.jpg" alt="Image not Found">
                            <div class="container min-container">
                                <div class="row">
                                    <div class="col-sm-8 container min-con-left">
                                        <p class="normal-header"><b>Chicken Lollipop</b></p>
                                        <p class="content">Starters</p>
                                        <p>$ 7.75</p>
                                    </div>
                                    <div class="col-sm-4 container min-con-right">
                                        <p>Rate</p>
                                        <input class="min-container-button" type="button" value="Add"><br><br>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3 container">
                        <div class="container ">
                            <img class="img-fluid" height="auto" src="../img/Chicken_Lollipop.jpg" alt="Image not Found">
                            <div class="container min-container">
                                <div class="row">
                                    <div class="col-sm-8 container min-con-left">
                                        <p class="normal-header"><b>Chicken Lollipop</b></p>
                                        <p class="content">Starters</p>
                                        <p>$ 7.75</p>
                                    </div>
                                    <div class="col-sm-4 container min-con-right">
                                        <p>Rate</p>
                                        <input class="min-container-button" type="button" value="Add"><br><br>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><br><br>
            <div class="container">
                <div class="row">
                    <div class="col-sm-3 container">
                        <div class="container ">
                            <img class="img-fluid" height="auto" src="../img/Chicken_Lollipop.jpg" alt="Image not Found">
                            <div class="container min-container">
                                <div class="row">
                                    <div class="col-sm-8 container min-con-left">
                                        <p class="normal-header"><b>Chicken Lollipop</b></p>
                                        <p class="content">Starters</p>
                                        <p>$ 7.75</p>
                                    </div>
                                    <div class="col-sm-4 container min-con-right">
                                        <p>Rate</p>
                                        <input class="min-container-button" type="button" value="Add"><br><br>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3 container">
                        <div class="container ">
                            <img class="img-fluid" height="auto" src="../img/Chicken_Lollipop.jpg" alt="Image not Found">
                            <div class="container min-container">
                                <div class="row">
                                    <div class="col-sm-8 container min-con-left">
                                        <p class="normal-header"><b>Chicken Lollipop</b></p>
                                        <p class="content">Starters</p>
                                        <p>$ 7.75</p>
                                    </div>
                                    <div class="col-sm-4 container min-con-right">
                                        <p>Rate</p>
                                        <input class="min-container-button" type="button" value="Add"><br><br>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3 container">
                        <div class="container ">
                            <img class="img-fluid" height="auto" src="../img/Chicken_Lollipop.jpg" alt="Image not Found">
                            <div class="container min-container">
                                <div class="row">
                                    <div class="col-sm-8 container min-con-left">
                                        <p class="normal-header"><b>Chicken Lollipop</b></p>
                                        <p class="content">Starters</p>
                                        <p>$ 7.75</p>
                                    </div>
                                    <div class="col-sm-4 container min-con-right">
                                        <p>Rate</p>
                                        <input class="min-container-button" type="button" value="Add"><br><br>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3 container">
                        <div class="container ">
                            <img class="img-fluid" height="auto" src="../img/Chicken_Lollipop.jpg" alt="Image not Found">
                            <div class="container min-container">
                                <div class="row">
                                    <div class="col-sm-8 container min-con-left">
                                        <p class="normal-header"><b>Chicken Lollipop</b></p>
                                        <p class="content">Starters</p>
                                        <p>$ 7.75</p>
                                    </div>
                                    <div class="col-sm-4 container min-con-right">
                                        <p>Rate</p>
                                        <input class="min-container-button" type="button" value="Add"><br><br>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><br><br>
            <div class="container">
                <div class="row">
                    <div class="col-sm-3 container">
                        <div class="container ">
                            <img class="img-fluid" height="auto" src="../img/Chicken_Lollipop.jpg" alt="Image not Found">
                            <div class="container min-container">
                                <div class="row">
                                    <div class="col-sm-8 container min-con-left">
                                        <p class="normal-header"><b>Chicken Lollipop</b></p>
                                        <p class="content">Starters</p>
                                        <p>$ 7.75</p>
                                    </div>
                                    <div class="col-sm-4 container min-con-right">
                                        <p>Rate</p>
                                        <input class="min-container-button" type="button" value="Add"><br><br>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3 container">
                        <div class="container ">
                            <img class="img-fluid" height="auto" src="../img/Chicken_Lollipop.jpg" alt="Image not Found">
                            <div class="container min-container">
                                <div class="row">
                                    <div class="col-sm-8 container min-con-left">
                                        <p class="normal-header"><b>Chicken Lollipop</b></p>
                                        <p class="content">Starters</p>
                                        <p>$ 7.75</p>
                                    </div>
                                    <div class="col-sm-4 container min-con-right">
                                        <p>Rate</p>
                                        <input class="min-container-button" type="button" value="Add"><br><br>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3 container">
                        <div class="container ">
                            <img class="img-fluid" height="auto" src="../img/Chicken_Lollipop.jpg" alt="Image not Found">
                            <div class="container min-container">
                                <div class="row">
                                    <div class="col-sm-8 container min-con-left">
                                        <p class="normal-header"><b>Chicken Lollipop</b></p>
                                        <p class="content">Starters</p>
                                        <p>$ 7.75</p>
                                    </div>
                                    <div class="col-sm-4 container min-con-right">
                                        <p>Rate</p>
                                        <input class="min-container-button" type="button" value="Add"><br><br>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3 container">
                        <div class="container ">
                            <img class="img-fluid" height="auto" src="../img/Chicken_Lollipop.jpg" alt="Image not Found">
                            <div class="container min-container">
                                <div class="row">
                                    <div class="col-sm-8 container min-con-left">
                                        <p class="normal-header"><b>Chicken Lollipop</b></p>
                                        <p class="content">Starters</p>
                                        <p>$ 7.75</p>
                                    </div>
                                    <div class="col-sm-4 container min-con-right">
                                        <p>Rate</p>
                                        <input class="min-container-button" type="button" value="Add"><br><br>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
