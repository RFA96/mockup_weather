<?php

?>
<html>
    <head>
        <title>MOCKUP WEB</title>
        <?php include "materials_css.php"?>
    </head>
    <body class="fixed-nav sticky-footer bg-dark" id="page-top">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
            <a class="navbar-brand" href="index.php">TF-SCALE IV BATU TEAM</a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
                    <li class="nav-item active" data-toggle="tooltip" data-placement="right" title="Dashboard">
                        <a class="nav-link" href="index.php">
                            <i class="fa fa-fw fa-cloud"></i>
                            <span class="nav-link-text">AWS</span>
                        </a>
                    </li>
                    <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
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
                        <a href="#">Home</a>
                    </li>
                    <li class="breadcrumb-item active">Automatic Weather Systems</li>
                </ol>
                <div class="row">
                    <div class="col-xl-4 col-sm-6 mb-3">
                        <div class="card text-white bg-primary o-hidden">
                            <div class="card-body">
                                <div class="card-body-icon">
                                    <i class="fa fa-fw fa-thermometer-empty"></i>
                                </div>
                                <div class="mr-5">26 &#8451;</div>
                            </div>
                            <a class="card-footer text-white clearfix small z-1" href="#" id="temperatureShow">
                                <span class="float-left">Temperature Details</span>
                                <span class="float-right">
                                    <i class="fa fa-angle-right"></i>
                                </span>
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-4 col-sm-6 mb-3">
                        <div class="card text-white bg-warning o-hidden">
                            <div class="card-body">
                                <div class="card-body-icon">
                                    <i class="fa fa-fw fa-shower"></i>
                                </div>
                                <div class="mr-5">30 %</div>
                            </div>
                            <a class="card-footer text-white clearfix small z-1" href="#" id="humidityShow">
                                <span class="float-left">Humidity Details</span>
                                <span class="float-right">
                                    <i class="fa fa-angle-right"></i>
                                </span>
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-4 col-sm-6 mb-3">
                        <div class="card text-white bg-dark o-hidden">
                            <div class="card-body">
                                <div class="card-body-icon">
                                    <i class="fa fa-fw fa-glass"></i>
                                </div>
                                <div class="mr-5">13</div>
                            </div>
                            <a class="card-footer text-white clearfix small z-1" href="#" id="raingaugeShow">
                                <span class="float-left">Rain Gauge Details</span>
                                <span class="float-right">
                                    <i class="fa fa-angle-right"></i>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-6 col-sm-6 mb-3">
                        <div class="card text-white bg-secondary o-hidden">
                            <div class="card-body">
                                <div class="card-body-icon">
                                    <i class="fa fa-fw fa-fighter-jet"></i>
                                </div>
                                <div class="mr-5">20 Pa</div>
                            </div>
                            <a class="card-footer text-white clearfix small z-1" href="#" id="windpressureShow">
                                <span class="float-left">Wind Pressure Details</span>
                                <span class="float-right">
                                    <i class="fa fa-angle-right"></i>
                                </span>
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-6 col-sm-6 mb-3">
                        <div class="card text-white bg-success o-hidden">
                            <div class="card-body">
                                <div class="card-body-icon">
                                    <i class="fa fa-fw fa-leaf"></i>
                                </div>
                                <div class="mr-5">10 km/h NW</div>
                            </div>
                            <a class="card-footer text-white clearfix small z-1" href="#" id="windspeedShow">
                                <span class="float-left">Wind Speed and Directions Details</span>
                                <span class="float-right">
                                    <i class="fa fa-angle-right"></i>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="card mb-3" id="cobaAja" style="display: none">
                    <div class="card-header">
                        <i class="fa fa-thermometer"></i> Temperature Chart
                    </div>
                    <div class="card-body">
                        <canvas id="myAreaChart" width="100%" height="30"></canvas>
                    </div>
                </div>
                <div class="card mb-3" id="cobaAja1" style="display: none">
                    <div class="card-header">
                        <i class="fa fa-shower"></i> Humidity Chart
                    </div>
                    <div class="card-body">
                        <canvas id="humidityChart" width="100%" height="30"></canvas>
                    </div>
                </div>
                <div class="card mb-3" id="cobaAja2" style="display: none">
                    <div class="card-header">
                        <i class="fa fa-leaf"></i> Wind Speed Chart
                    </div>
                    <div class="card-body">
                        <canvas id="windSpeedChart" width="100%" height="30"></canvas>
                    </div>
                </div>
                <div class="card mb-3" id="cobaAja3" style="display: none">
                    <div class="card-header">
                        <i class="fa fa-fighter-jet"></i> Wind Pressure Chart
                    </div>
                    <div class="card-body">
                        <canvas id="windPressureChart" width="100%" height="30"></canvas>
                    </div>
                </div>
                <div class="card mb-3" id="cobaAja4" style="display: none">
                    <div class="card-header">
                        <i class="fa fa-glass"></i> Rain Gauge Chart
                    </div>
                    <div class="card-body">
                        <canvas id="rainGaugeChart" width="100%" height="30"></canvas>
                    </div>
                </div>
            </div>
        </div>
        <?php include "footer.php"?>
        <?php include "materials_js.php"?>
        <script>
            $(document).ready(function () {
                $('#temperatureShow').click(function () {
                    $('#cobaAja').slideToggle("fast");
                });

                $('#humidityShow').click(function () {
                    $('#cobaAja1').slideToggle("fast");
                });

                $('#windspeedShow').click(function () {
                    $('#cobaAja2').slideToggle("fast");
                });
                $('#windpressureShow').click(function () {
                    $('#cobaAja3').slideToggle("fast");
                });
                $('#raingaugeShow').click(function () {
                    $('#cobaAja4').slideToggle("fast");
                });
            });
        </script>
        <script type="text/javascript">
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
        <script type="text/javascript">
            function makeChart(arg1, arg2, arg3,arg4, arg5, arg6, arg7, arg8, arg9, arg10)
            {
                var ctx = document.getElementById("myAreaChart");
                var myLineChart = new Chart(ctx, {
                   type: 'line',
                   data: [{
                       label: "Sessions",
                       lineTension: 0.3,
                       backgroundColor: "rgba(2,117,216,0.2)",
                       borderColor: "rgba(2,117,216,1)",
                       pointRadius: 5,
                       pointBackgroundColor: "rgba(2,117,216,1)",
                       pointBorderColor: "rgba(255,255,255,0.8)",
                       pointHoverRadius: 5,
                       pointHoverBackgroundColor: "rgba(2,117,216,1)",
                       pointHitRadius: 20,
                       pointBorderWidth: 2,
                       data: [arg1, arg2, arg3,arg4, arg5, arg6, arg7, arg8, arg9, arg10],
                   }],
                });
            }
        </script>
<!--        <script type="text/javascript">-->
<!--            var ctx = document.getElementById("myAreaChart");-->
<!--            var myLineChart = new Chart(ctx, {-->
<!--                type: 'line',-->
<!--                data: {-->
<!--                    labels: ["07:00 AM", "08:00 AM", "09:00 AM", "10:00 AM", "11:00 AM", "12:00 PM", "01:00 PM", "02:00 PM", "03:00 PM", "04:00 PM", "05:00 PM", "06:00 PM", "07:00 PM"],-->
<!--                    datasets: [{-->
<!--                        label: "Sessions",-->
<!--                        lineTension: 0.3,-->
<!--                        backgroundColor: "rgba(2,117,216,0.2)",-->
<!--                        borderColor: "rgba(2,117,216,1)",-->
<!--                        pointRadius: 5,-->
<!--                        pointBackgroundColor: "rgba(2,117,216,1)",-->
<!--                        pointBorderColor: "rgba(255,255,255,0.8)",-->
<!--                        pointHoverRadius: 5,-->
<!--                        pointHoverBackgroundColor: "rgba(2,117,216,1)",-->
<!--                        pointHitRadius: 20,-->
<!--                        pointBorderWidth: 2,-->
<!--                        data: [20, 32, 33, 34, 33, 31, 30, 29, 27, 28, 28, 27, 26],-->
<!--                    }],-->
<!--                },-->
<!--                options: {-->
<!--                    scales: {-->
<!--                        xAxes: [{-->
<!--                            time: {-->
<!--                                unit: 'date'-->
<!--                            },-->
<!--                            gridLines: {-->
<!--                                display: false-->
<!--                            },-->
<!--                            ticks: {-->
<!--                                maxTicksLimit: 7-->
<!--                            }-->
<!--                        }],-->
<!--                        yAxes: [{-->
<!--                            ticks: {-->
<!--                                min: 0,-->
<!--                                max: 35,-->
<!--                                maxTicksLimit: 5-->
<!--                            },-->
<!--                            gridLines: {-->
<!--                                color: "rgba(0, 0, 0, .125)",-->
<!--                            }-->
<!--                        }],-->
<!--                    },-->
<!--                    legend: {-->
<!--                        display: false-->
<!--                    }-->
<!--                }-->
<!--            });-->
<!--           var humidityEx = document.getElementById("humidityChart");-->
<!--           var myHumidityChart = new Chart(humidityEx, {-->
<!--               type: 'line',-->
<!--               data: {-->
<!--                   labels: ["07:00 AM", "08:00 AM", "09:00 AM", "10:00 AM", "11:00 AM", "12:00 PM", "01:00 PM", "02:00 PM", "03:00 PM", "04:00 PM", "05:00 PM", "06:00 PM", "07:00 PM"],-->
<!--                   datasets: [{-->
<!--                       label: "Sessions",-->
<!--                       lineTension: 0.3,-->
<!--                       backgroundColor: "rgba(2,117,216,0.2)",-->
<!--                       borderColor: "rgba(2,117,216,1)",-->
<!--                       pointRadius: 5,-->
<!--                       pointBackgroundColor: "rgba(2,117,216,1)",-->
<!--                       pointBorderColor: "rgba(255,255,255,0.8)",-->
<!--                       pointHoverRadius: 5,-->
<!--                       pointHoverBackgroundColor: "rgba(2,117,216,1)",-->
<!--                       pointHitRadius: 20,-->
<!--                       pointBorderWidth: 2,-->
<!--                       data: [85, 80, 75, 77, 74, 74, 75, 72, 77, 85, 85, 80, 75],-->
<!--                   }],-->
<!--               },-->
<!--               options: {-->
<!--                   scales: {-->
<!--                       xAxes: [{-->
<!--                           time: {-->
<!--                               unit: 'date'-->
<!--                           },-->
<!--                           gridLines: {-->
<!--                               display: false-->
<!--                           },-->
<!--                           ticks: {-->
<!--                               maxTicksLimit: 7-->
<!--                           }-->
<!--                       }],-->
<!--                       yAxes: [{-->
<!--                           ticks: {-->
<!--                               min: 0,-->
<!--                               max: 100,-->
<!--                               maxTicksLimit: 5-->
<!--                           },-->
<!--                           gridLines: {-->
<!--                               color: "rgba(0, 0, 0, .125)",-->
<!--                           }-->
<!--                       }],-->
<!--                   },-->
<!--                   legend: {-->
<!--                       display: false-->
<!--                   }-->
<!--               }-->
<!--           });-->
<!--            var windSpeedEx = document.getElementById("windSpeedChart");-->
<!--            var myWindSpeedChart = new Chart(windSpeedEx, {-->
<!--                type: 'line',-->
<!--                data: {-->
<!--                    labels: ["07:00 AM", "08:00 AM", "09:00 AM", "10:00 AM", "11:00 AM", "12:00 PM", "01:00 PM", "02:00 PM", "03:00 PM", "04:00 PM", "05:00 PM", "06:00 PM", "07:00 PM"],-->
<!--                    datasets: [{-->
<!--                        label: "Sessions",-->
<!--                        lineTension: 0.3,-->
<!--                        backgroundColor: "rgba(2,117,216,0.2)",-->
<!--                        borderColor: "rgba(2,117,216,1)",-->
<!--                        pointRadius: 5,-->
<!--                        pointBackgroundColor: "rgba(2,117,216,1)",-->
<!--                        pointBorderColor: "rgba(255,255,255,0.8)",-->
<!--                        pointHoverRadius: 5,-->
<!--                        pointHoverBackgroundColor: "rgba(2,117,216,1)",-->
<!--                        pointHitRadius: 20,-->
<!--                        pointBorderWidth: 2,-->
<!--                        data: [6, 6, 6, 4, 4, 4, 4, 5, 5, 6, 7, 6, 6],-->
<!--                    }],-->
<!--                },-->
<!--                options: {-->
<!--                    scales: {-->
<!--                        xAxes: [{-->
<!--                            time: {-->
<!--                                unit: 'date'-->
<!--                            },-->
<!--                            gridLines: {-->
<!--                                display: false-->
<!--                            },-->
<!--                            ticks: {-->
<!--                                maxTicksLimit: 7-->
<!--                            }-->
<!--                        }],-->
<!--                        yAxes: [{-->
<!--                            ticks: {-->
<!--                                min: 0,-->
<!--                                max: 10,-->
<!--                                maxTicksLimit: 5-->
<!--                            },-->
<!--                            gridLines: {-->
<!--                                color: "rgba(0, 0, 0, .125)",-->
<!--                            }-->
<!--                        }],-->
<!--                    },-->
<!--                    legend: {-->
<!--                        display: false-->
<!--                    }-->
<!--                }-->
<!--            });-->
<!--            var windPressureEx = document.getElementById("windPressureChart");-->
<!--            var myWindPressureChart = new Chart(windPressureEx, {-->
<!--                type: 'line',-->
<!--                data: {-->
<!--                    labels: ["07:00 AM", "08:00 AM", "09:00 AM", "10:00 AM", "11:00 AM", "12:00 PM", "01:00 PM", "02:00 PM", "03:00 PM", "04:00 PM", "05:00 PM", "06:00 PM", "07:00 PM"],-->
<!--                    datasets: [{-->
<!--                        label: "Sessions",-->
<!--                        lineTension: 0.3,-->
<!--                        backgroundColor: "rgba(2,117,216,0.2)",-->
<!--                        borderColor: "rgba(2,117,216,1)",-->
<!--                        pointRadius: 5,-->
<!--                        pointBackgroundColor: "rgba(2,117,216,1)",-->
<!--                        pointBorderColor: "rgba(255,255,255,0.8)",-->
<!--                        pointHoverRadius: 5,-->
<!--                        pointHoverBackgroundColor: "rgba(2,117,216,1)",-->
<!--                        pointHitRadius: 20,-->
<!--                        pointBorderWidth: 2,-->
<!--                        data: [20, 20, 10, 30, 30, 28, 25, 25, 20, 21, 20, 22, 23],-->
<!--                    }],-->
<!--                },-->
<!--                options: {-->
<!--                    scales: {-->
<!--                        xAxes: [{-->
<!--                            time: {-->
<!--                                unit: 'date'-->
<!--                            },-->
<!--                            gridLines: {-->
<!--                                display: false-->
<!--                            },-->
<!--                            ticks: {-->
<!--                                maxTicksLimit: 7-->
<!--                            }-->
<!--                        }],-->
<!--                        yAxes: [{-->
<!--                            ticks: {-->
<!--                                min: 0,-->
<!--                                max: 40,-->
<!--                                maxTicksLimit: 5-->
<!--                            },-->
<!--                            gridLines: {-->
<!--                                color: "rgba(0, 0, 0, .125)",-->
<!--                            }-->
<!--                        }],-->
<!--                    },-->
<!--                    legend: {-->
<!--                        display: false-->
<!--                    }-->
<!--                }-->
<!--            });-->
<!--            var rainGaugeEx = document.getElementById("rainGaugeChart");-->
<!--            var myRainGaugeChart = new Chart(rainGaugeEx, {-->
<!--                type: 'line',-->
<!--                data: {-->
<!--                    labels: ["07:00 AM", "08:00 AM", "09:00 AM", "10:00 AM", "11:00 AM", "12:00 PM", "01:00 PM", "02:00 PM", "03:00 PM", "04:00 PM", "05:00 PM", "06:00 PM", "07:00 PM"],-->
<!--                    datasets: [{-->
<!--                        label: "Sessions",-->
<!--                        lineTension: 0.3,-->
<!--                        backgroundColor: "rgba(2,117,216,0.2)",-->
<!--                        borderColor: "rgba(2,117,216,1)",-->
<!--                        pointRadius: 5,-->
<!--                        pointBackgroundColor: "rgba(2,117,216,1)",-->
<!--                        pointBorderColor: "rgba(255,255,255,0.8)",-->
<!--                        pointHoverRadius: 5,-->
<!--                        pointHoverBackgroundColor: "rgba(2,117,216,1)",-->
<!--                        pointHitRadius: 20,-->
<!--                        pointBorderWidth: 2,-->
<!--                        data: [20, 20, 10, 30, 30, 28, 25, 25, 20, 21, 20, 22, 23],-->
<!--                    }],-->
<!--                },-->
<!--                options: {-->
<!--                    scales: {-->
<!--                        xAxes: [{-->
<!--                            time: {-->
<!--                                unit: 'date'-->
<!--                            },-->
<!--                            gridLines: {-->
<!--                                display: false-->
<!--                            },-->
<!--                            ticks: {-->
<!--                                maxTicksLimit: 7-->
<!--                            }-->
<!--                        }],-->
<!--                        yAxes: [{-->
<!--                            ticks: {-->
<!--                                min: 0,-->
<!--                                max: 40,-->
<!--                                maxTicksLimit: 5-->
<!--                            },-->
<!--                            gridLines: {-->
<!--                                color: "rgba(0, 0, 0, .125)",-->
<!--                            }-->
<!--                        }],-->
<!--                    },-->
<!--                    legend: {-->
<!--                        display: false-->
<!--                    }-->
<!--                }-->
<!--            });-->
<!--        </script>-->
    </body>
</html>
