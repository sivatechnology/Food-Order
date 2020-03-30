<?php
?>

<!Doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <title>Admin Home Page</title>

    <style>
        .admin-home{
            padding: 10px;
        }
        .admin-home-top{
            border: 1px black;
            border-style: solid;
            padding: 10px;
        }
        .admin-home-top-logo{
            padding: 10px;
        }
        .admin-home-top-logo-img{
            width: 585px;
            height: 250px;
        }
        .admin-home-content{
            position: absolute;
        }
        .admin-home-button
        {
            border: 1px white;
            border-style: solid;
            padding: 10px;
        }
        .admin-home-navbtn{
            text-align: center;
            padding: 3px;
            padding-left: 10px;
            padding-right: 10px;
            width: 100px;
        }
        .admin-home-bottom-img{
            width: 375px;
            height: 230px;
        }
        .min-container{
            width: 375px;
            height: 140px;
            padding-top: 15px;
            padding-right: 8px;
            padding-left: 8px;
            padding-bottom: 8px;
        }
        .admin-home-bottom-item{
            padding-top: 2px;
            width: 377px;
            height: 370px;
            position: relative;
        }
        .admin-home-bottom-main{
            padding-left: 150px;
            padding-right: 150px;

        }
        .admin-home-bottom{
            padding:10px;
            border: 3px white;
            border-style: solid;
        }
        .min-container-button{
            width: 50px;
        }
        .min-con-left{
            text-align: left;
        }
        .min-con-right{
            text-align: right;
        }

    </style>
</head>
<body>
<div class="admin-home">
<div class="admin-home-top">
    <div class="row">
        <div class="col-sm-4">
            <div class="admin-home-top-logo">
                <img class="admin-home-top-logo-img" src="../img/biryani.jpg" alt="Image not Found">
            </div></div>
        <div  class="col-sm-8">
            <div class="admin-home-content">
                <h1>Parambriyam</h1>
                <h5>Biryani  Bangladeshi  Rice  Beverage</h5>
                <h4>59Fashion St, Chennai.</h4>
                <br>
                rate  |  15Mins  |  $
                <br><br>
                <p>It is made with Indian spices, rice, meat (chicken, beef, goat, pork, lamb, prawn, or fish), vegetables or eggs. The word 'biryani' is derived from a Persian word, birian, which means fried before cooking. It is one of the most popular dishes, which has acquired a niche for itself in South Asian cuisine.</p>
            </div>
        </div>
    </div>
</div><br>
 <div class="admin-home-bottom-main">
    <div class="admin-home-bottom">
        <div class="admin-home-button">
            <div class="row">
                <div class="col-sm-1">
                    <input class="admin-home-navbtn" type="button" value="All">
                </div>
                <div class="col-sm-1">
                    <input class="admin-home-navbtn" type="button" value="Chinese">
                </div>
                <div class="col-sm-1">
                    <input class="admin-home-navbtn" type="button" value="Arabian">
                </div>
                <div class="col-sm-1">
                    <input class="admin-home-navbtn" type="button" value="Indian">
                </div>
              </div>
        </div><br>
        <div class="admin-home-bottom-items">
            <div class="row">
                <div class="col-sm-3">
                    <div class="admin-home-bottom-item">
                        <img class="admin-home-bottom-img" src="../img/chicken-lollipop.jpg" alt="Image not Found">
                        <div class="min-container">
                            <div class="row">
                                <div class="col-sm-7">
                                    <div class="min-con-left">
                                    <p style="font-size: 17px"><b>Chicken Lollipop</b></p>
                                    <p style="font-size: 13px">Starters</p>
                                    <p>$ 7.75</p>
                                    </div>
                                </div>
                                <div class="col-sm-5">
                                    <div class="min-con-right">
                                    <p>Rate</p>
                                    <input class="min-container-button" type="button" value="Add"><br><br>
                                    <p style="font-size: 10px">Customtable</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="admin-home-bottom-item">
                        <img class="admin-home-bottom-img" src="../img/chicken-lollipop.jpg" alt="Image not Found">
                        <div class="min-container">
                            <div class="row">
                                <div class="col-sm-7">
                                    <div class="min-con-left">
                                        <p style="font-size: 17px"><b>Chicken Lollipop</b></p>
                                        <p style="font-size: 13px">Starters</p>
                                        <p>$ 7.75</p>
                                    </div>
                                </div>
                                <div class="col-sm-5">
                                    <div class="min-con-right">
                                        <p>Rate</p>
                                        <input class="min-container-button" type="button" value="Add"><br><br>
                                        <p style="font-size: 10px">Customtable</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="admin-home-bottom-item">
                        <img class="admin-home-bottom-img" src="../img/chicken-lollipop.jpg" alt="Image not Found">
                        <div class="min-container">
                            <div class="row">
                                <div class="col-sm-7">
                                    <div class="min-con-left">
                                        <p style="font-size: 17px"><b>Chicken Lollipop</b></p>
                                        <p style="font-size: 13px">Starters</p>
                                        <p>$ 7.75</p>
                                    </div>
                                </div>
                                <div class="col-sm-5">
                                    <div class="min-con-right">
                                        <p>Rate</p>
                                        <input class="min-container-button" type="button" value="Add"><br><br>
                                        <p style="font-size: 10px">Customtable</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="admin-home-bottom-item">
                        <img class="admin-home-bottom-img" src="../img/chicken-lollipop.jpg" alt="Image not Found">
                        <div class="min-container">
                            <div class="row">
                                <div class="col-sm-7">
                                    <div class="min-con-left">
                                        <p style="font-size: 17px"><b>Chicken Lollipop</b></p>
                                        <p style="font-size: 13px">Starters</p>
                                        <p>$ 7.75</p>
                                    </div>
                                </div>
                                <div class="col-sm-5">
                                    <div class="min-con-right">
                                        <p>Rate</p>
                                        <input class="min-container-button" type="button" value="Add"><br><br>
                                        <p style="font-size: 10px">Customtable</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><br><br>


        <div class="admin-home-bottom-items">
            <div class="row">
                <div class="col-sm-3">
                    <div class="admin-home-bottom-item">
                        <img class="admin-home-bottom-img" src="../img/chicken-lollipop.jpg" alt="Image not Found">
                        <div class="min-container">
                            <div class="row">
                                <div class="col-sm-7">
                                    <div class="min-con-left">
                                        <p style="font-size: 17px"><b>Chicken Lollipop</b></p>
                                        <p style="font-size: 13px">Starters</p>
                                        <p>$ 7.75</p>
                                    </div>
                                </div>
                                <div class="col-sm-5">
                                    <div class="min-con-right">
                                        <p>Rate</p>
                                        <input class="min-container-button" type="button" value="Add"><br><br>
                                        <p style="font-size: 10px">Customtable</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="admin-home-bottom-item">
                        <img class="admin-home-bottom-img" src="../img/chicken-lollipop.jpg" alt="Image not Found">
                        <div class="min-container">
                            <div class="row">
                                <div class="col-sm-7">
                                    <div class="min-con-left">
                                        <p style="font-size: 17px"><b>Chicken Lollipop</b></p>
                                        <p style="font-size: 13px">Starters</p>
                                        <p>$ 7.75</p>
                                    </div>
                                </div>
                                <div class="col-sm-5">
                                    <div class="min-con-right">
                                        <p>Rate</p>
                                        <input class="min-container-button" type="button" value="Add"><br><br>
                                        <p style="font-size: 10px">Customtable</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="admin-home-bottom-item">
                        <img class="admin-home-bottom-img" src="../img/chicken-lollipop.jpg" alt="Image not Found">
                        <div class="min-container">
                            <div class="row">
                                <div class="col-sm-7">
                                    <div class="min-con-left">
                                        <p style="font-size: 17px"><b>Chicken Lollipop</b></p>
                                        <p style="font-size: 13px">Starters</p>
                                        <p>$ 7.75</p>
                                    </div>
                                </div>
                                <div class="col-sm-5">
                                    <div class="min-con-right">
                                        <p>Rate</p>
                                        <input class="min-container-button" type="button" value="Add"><br><br>
                                        <p style="font-size: 10px">Customtable</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="admin-home-bottom-item">
                        <img class="admin-home-bottom-img" src="../img/chicken-lollipop.jpg" alt="Image not Found">
                        <div class="min-container">
                            <div class="row">
                                <div class="col-sm-7">
                                    <div class="min-con-left">
                                        <p style="font-size: 17px"><b>Chicken Lollipop</b></p>
                                        <p style="font-size: 13px">Starters</p>
                                        <p>$ 7.75</p>
                                    </div>
                                </div>
                                <div class="col-sm-5">
                                    <div class="min-con-right">
                                        <p>Rate</p>
                                        <input class="min-container-button" type="button" value="Add"><br><br>
                                        <p style="font-size: 10px">Customtable</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><br><br>
        <div class="admin-home-bottom-items">
            <div class="row">
                <div class="col-sm-3">
                    <div class="admin-home-bottom-item">
                        <img class="admin-home-bottom-img" src="../img/chicken-lollipop.jpg" alt="Image not Found">
                        <div class="min-container">
                            <div class="row">
                                <div class="col-sm-7">
                                    <div class="min-con-left">
                                        <p style="font-size: 17px"><b>Chicken Lollipop</b></p>
                                        <p style="font-size: 13px">Starters</p>
                                        <p>$ 7.75</p>
                                    </div>
                                </div>
                                <div class="col-sm-5">
                                    <div class="min-con-right">
                                        <p>Rate</p>
                                        <input class="min-container-button" type="button" value="Add"><br><br>
                                        <p style="font-size: 10px">Customtable</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="admin-home-bottom-item">
                        <img class="admin-home-bottom-img" src="../img/chicken-lollipop.jpg" alt="Image not Found">
                        <div class="min-container">
                            <div class="row">
                                <div class="col-sm-7">
                                    <div class="min-con-left">
                                        <p style="font-size: 17px"><b>Chicken Lollipop</b></p>
                                        <p style="font-size: 13px">Starters</p>
                                        <p>$ 7.75</p>
                                    </div>
                                </div>
                                <div class="col-sm-5">
                                    <div class="min-con-right">
                                        <p>Rate</p>
                                        <input class="min-container-button" type="button" value="Add"><br><br>
                                        <p style="font-size: 10px">Customtable</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="admin-home-bottom-item">
                        <img class="admin-home-bottom-img" src="../img/chicken-lollipop.jpg" alt="Image not Found">
                        <div class="min-container">
                            <div class="row">
                                <div class="col-sm-7">
                                    <div class="min-con-left">
                                        <p style="font-size: 17px"><b>Chicken Lollipop</b></p>
                                        <p style="font-size: 13px">Starters</p>
                                        <p>$ 7.75</p>
                                    </div>
                                </div>
                                <div class="col-sm-5">
                                    <div class="min-con-right">
                                        <p>Rate</p>
                                        <input class="min-container-button" type="button" value="Add"><br><br>
                                        <p style="font-size: 10px">Customtable</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="admin-home-bottom-item">
                        <img class="admin-home-bottom-img" src="../img/chicken-lollipop.jpg" alt="Image not Found">
                        <div class="min-container">
                            <div class="row">
                                <div class="col-sm-7">
                                    <div class="min-con-left">
                                        <p style="font-size: 17px"><b>Chicken Lollipop</b></p>
                                        <p style="font-size: 13px">Starters</p>
                                        <p>$ 7.75</p>
                                    </div>
                                </div>
                                <div class="col-sm-5">
                                    <div class="min-con-right">
                                        <p>Rate</p>
                                        <input class="min-container-button" type="button" value="Add"><br><br>
                                        <p style="font-size: 10px">Customtable</p>
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
