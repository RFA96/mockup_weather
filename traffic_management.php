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
                <div class="row">
                    <div class="col-xl-12 col-sm-12 mb-3">
                        <div id="demo" class="carousel slide" data-ride="carousel">
                            <ul class="carousel-indicators">
                                <li data-target="#demo" data-slide-to="0" class="active"></li>
                                <li data-target="#demo" data-slide-to="1"></li>
                                <li data-target="#demo" data-slide-to="2"></li>
                            </ul>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="https://upload.wikimedia.org/wikipedia/commons/3/3e/I-80_Eastshore_Fwy.jpg" alt="Traffic" width="1100" height="500">
                                    <div class="carousel-caption">
                                        <h3>08:30 AM</h3>
                                        <p>Moderate traffic</p>
                                    </div>
                                </div>
                            </div>
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
