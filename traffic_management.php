<?php
/**
 * Created by PhpStorm.
 * User: raka_matsukaze
 * Date: 3/19/18
 * Time: 07:06 AM
 */
?>
<html>
    <head>
        <title>Traffic Management System</title>
        <?php include "materials_css.php";?>
        <style>
            img
            {
                width: 100%;
                height: 500px;
            }
        </style>
    </head>
    <body class="fixed-nav sticky-footer bg-dark" id="page-top">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
            <a class="navbar-brand" href="index.php">TF-SCALE IV BATU TEAM</a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
                    <li class="nav-item" data-toggle="tooltip" data-placement="right" title="AWS">
                        <a class="nav-link" href="index.php">
                            <i class="fa fa-fw fa-cloud"></i>
                            <span class="nav-link-text">AWS</span>
                        </a>
                    </li>
                    <li class="nav-item active" data-toggle="tooltip" data-placement="right" title="TMS">
                        <a class="nav-link" href="traffic_management.php">
                            <i class="fa fa-fw fa-dashboard"></i>
                            <span class="nav-link-text">TMS</span>
                        </a>
                    </li>
                </ul>
                <ul class="navbar-nav sidenav-toggler">
                    <li class="nav-item">
                        <a class="nav-link text-center" id="sidenavToggler">
                            <i class="fa fa-fw fa-angle-left"></i>
                        </a>
                    </li>
                </ul>
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" id="clock" data-toggle="modal" data-target="#exampleModal">
                            <i class="fa fa-fw fa-clock-o"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="modal" data-target="#exampleModal">
                            <i class="fa fa-fw fa-sign-out"></i> Logout
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="content-wrapper">
            <div class="container-fluid">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="index.php">Home</a>
                    </li>
                    <li class="breadcrumb-item active">Traffic Management Systems</li>
                </ol>
                <div id="demo" class="carousel slide" data-ride="carousel">
                    <ul class="carousel-indicators">
                        <li data-target="#demo" data-slide-to="0" class="active"></li>
                        <li data-target="#demo" data-slide-to="1"></li>
                        <li data-target="#demo" data-slide-to="2"></li>
                    </ul>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="https://upload.wikimedia.org/wikipedia/commons/3/3e/I-80_Eastshore_Fwy.jpg" alt="Traffic">
                            <div class="carousel-caption">
                                <h3>08:30 AM</h3>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="http://www.deeproot.com/blog/wp-content/uploads/stories/2017/06/2715306741_3106f88cf9_b.jpg" alt="Traffic">
                            <div class="carousel-caption">
                                <h3>09:00 AM</h3>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="http://d254andzyoxz3f.cloudfront.net/trafficjams-ss-saopaulo.jpg" alt="Traffic">
                            <div class="carousel-caption">
                                <h3>09:30 AM</h3>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#demo" data-slide="prev">
                        <span class="carousel-control-prev-icon"></span>
                    </a>
                    <a class="carousel-control-next" href="#demo" data-slide="next">
                        <span class="carousel-control-next-icon"></span>
                    </a>
                </div><br>

                <!-- Grid Images -->
                <div class="row">
                    <div class="col-xl-4 col-sm-6 mb-3">
                        <div class="card" style="width: 400px">
                            <img class="card-img-top" src="https://cdn.iconscout.com/public/images/icon/free/png-512/avatar-user-teacher-312a499a08079a12-512x512.png" alt="Card image" style="width:100%">
                        </div>
                    </div>

                </div>

            </div>
        </div>
        <?php include "footer.php"?>
        <?php include "materials_js.php";?>
        <script>
            function startTime() {
                var today=new Date(),
                    curr_hour=today.getHours(),
                    curr_min=today.getMinutes(),
                    curr_sec=today.getSeconds();
                curr_hour=checkTime(curr_hour);
                curr_min=checkTime(curr_min);
                curr_sec=checkTime(curr_sec);
                document.getElementById('clock').innerHTML=curr_hour+":"+curr_min+":"+curr_sec;
            }
            function checkTime(i) {
                if (i<10) {
                    i="0" + i;
                }
                return i;
            }
            setInterval(startTime, 0);
        </script>
    </body>
</html>
