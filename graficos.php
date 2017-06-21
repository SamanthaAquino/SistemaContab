<?php

include("calculo_indices.php");

$bdServidor = '25.71.230.218';
$bdUsuario = 'siscont';
$bdSenha = 'contabilidade';
$bdBanco = 'contabilidade';
$conexao = mysqli_connect($bdServidor, $bdUsuario, $bdSenha, $bdBanco);

$resultado = calcula_indices($conexao);



?>

<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
    <title>Sistema Contábil</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Novus Admin Panel Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
    <!-- Custom CSS -->
    <link href="css/style.css" rel='stylesheet' type='text/css' />
    <!-- font CSS -->
    <!-- font-awesome icons -->
    <link href="css/font-awesome.css" rel="stylesheet">
    <!-- //font-awesome icons -->
    <!-- js-->
    <script src="js/jquery-1.11.1.min.js"></script>
    <script src="js/modernizr.custom.js"></script>
    <!--webfonts-->
    <link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>
    <!--//webfonts-->
    <!--animate-->
    <link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
    <script src="js/wow.min.js"></script>
      <link rel="icon" href="images/EFEI.png">
    <script>
        new WOW().init();
    </script>
    <!--//end-animate-->
    <!-- chart -->
    <script src="js/Chart.js"></script>
    <!-- //chart -->
    <!--Calender-->
    <link rel="stylesheet" href="css/clndr.css" type="text/css" />
    <script src="js/underscore-min.js" type="text/javascript"></script>
    <script src= "js/moment-2.2.1.js" type="text/javascript"></script>
    <script src="js/clndr.js" type="text/javascript"></script>
    <script src="js/site.js" type="text/javascript"></script>
    <!--End Calender-->
    <!-- Metis Menu -->
    <script src="js/metisMenu.min.js"></script>
    <script src="js/custom.js"></script>
    <link href="css/custom.css" rel="stylesheet">
    <!--//Metis Menu -->
</head>
<body class="cbp-spmenu-push">
<div class="main-content">
    <!--left-fixed -navigation-->
    <div class=" sidebar" role="navigation">
        <div class="navbar-collapse">
            <nav class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left" id="cbp-spmenu-s1">
                <ul class="nav" id="side-menu">
                    <li>
                        <a href="index.html" ><i class="fa fa-file-text-o nav_icon"></i>Sobre</a>
                    </li>

                    <li>
                        <a href="indice.php" ><i class="fa fa-table nav_icon"></i>Calcular Índices</a>
                    </li>
                    <li>
                        <a href="graficos.html" class="active"><i class="fa fa-bar-chart nav_icon"></i>Gráficos</a>
                    </li>
                    
                </ul>
                <div class="clearfix"> </div>
                <!-- //sidebar-collapse -->
            </nav>
        </div>
    </div>
    <!--left-fixed -navigation-->
    <!-- header-starts -->
    <div class="sticky-header header-section ">
        <div class="header-left">
            <!--toggle button start-->
            <button id="showLeftPush"><i class="fa fa-bars"></i></button>
            <!--toggle button end-->
            <!--logo -->
            <div class="logo">
                <a href="index.html">
                    <h1>Contabilidade</h1>
                    <span>Índices</span>
                </a>
            </div>
            <!--//logo-->
            <!--search-box-->
            <!--<div class="search-box">
                <form class="input">
                    <input class="sb-search-input input__field--madoka" placeholder="Search..." type="search" id="input-31" />
                    <label class="input__label" for="input-31">
                        <svg class="graphic" width="100%" height="100%" viewBox="0 0 404 77" preserveAspectRatio="none">
                            <path d="m0,0l404,0l0,77l-404,0l0,-77z"/>
                        </svg>
                    </label>
                </form>
            </div>//end-search-box-->
            <div class="clearfix"> </div>
        </div>
        <div class="header-right">
            <!--<div class="profile_details_left"><!--notifications of menu start
                <ul class="nofitications-dropdown">
                    <li class="dropdown head-dpdn">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-envelope"></i><span class="badge">3</span></a>
                        <ul class="dropdown-menu">
                            <li>
                                <div class="notification_header">
                                    <h3>You have 3 new messages</h3>
                                </div>
                            </li>
                            <li><a href="#">
                                <div class="user_img"><img src="images/1.png" alt=""></div>
                                <div class="notification_desc">
                                    <p>Lorem ipsum dolor amet</p>
                                    <p><span>1 hour ago</span></p>
                                </div>
                                <div class="clearfix"></div>
                            </a></li>
                            <li class="odd"><a href="#">
                                <div class="user_img"><img src="images/2.png" alt=""></div>
                                <div class="notification_desc">
                                    <p>Lorem ipsum dolor amet </p>
                                    <p><span>1 hour ago</span></p>
                                </div>
                                <div class="clearfix"></div>
                            </a></li>
                            <li><a href="#">
                                <div class="user_img"><img src="images/3.png" alt=""></div>
                                <div class="notification_desc">
                                    <p>Lorem ipsum dolor amet </p>
                                    <p><span>1 hour ago</span></p>
                                </div>
                                <div class="clearfix"></div>
                            </a></li>
                            <li>
                                <div class="notification_bottom">
                                    <a href="#">See all messages</a>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown head-dpdn">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-bell"></i><span class="badge blue">3</span></a>
                        <ul class="dropdown-menu">
                            <li>
                                <div class="notification_header">
                                    <h3>You have 3 new notification</h3>
                                </div>
                            </li>
                            <li><a href="#">
                                <div class="user_img"><img src="images/2.png" alt=""></div>
                                <div class="notification_desc">
                                    <p>Lorem ipsum dolor amet</p>
                                    <p><span>1 hour ago</span></p>
                                </div>
                                <div class="clearfix"></div>
                            </a></li>
                            <li class="odd"><a href="#">
                                <div class="user_img"><img src="images/1.png" alt=""></div>
                                <div class="notification_desc">
                                    <p>Lorem ipsum dolor amet </p>
                                    <p><span>1 hour ago</span></p>
                                </div>
                                <div class="clearfix"></div>
                            </a></li>
                            <li><a href="#">
                                <div class="user_img"><img src="images/3.png" alt=""></div>
                                <div class="notification_desc">
                                    <p>Lorem ipsum dolor amet </p>
                                    <p><span>1 hour ago</span></p>
                                </div>
                                <div class="clearfix"></div>
                            </a></li>
                            <li>
                                <div class="notification_bottom">
                                    <a href="#">See all notifications</a>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown head-dpdn">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-tasks"></i><span class="badge blue1">15</span></a>
                        <ul class="dropdown-menu">
                            <li>
                                <div class="notification_header">
                                    <h3>You have 8 pending task</h3>
                                </div>
                            </li>
                            <li><a href="#">
                                <div class="task-info">
                                    <span class="task-desc">Database update</span><span class="percentage">40%</span>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="progress progress-striped active">
                                    <div class="bar yellow" style="width:40%;"></div>
                                </div>
                            </a></li>
                            <li><a href="#">
                                <div class="task-info">
                                    <span class="task-desc">Dashboard done</span><span class="percentage">90%</span>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="progress progress-striped active">
                                    <div class="bar green" style="width:90%;"></div>
                                </div>
                            </a></li>
                            <li><a href="#">
                                <div class="task-info">
                                    <span class="task-desc">Mobile App</span><span class="percentage">33%</span>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="progress progress-striped active">
                                    <div class="bar red" style="width: 33%;"></div>
                                </div>
                            </a></li>
                            <li><a href="#">
                                <div class="task-info">
                                    <span class="task-desc">Issues fixed</span><span class="percentage">80%</span>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="progress progress-striped active">
                                    <div class="bar  blue" style="width: 80%;"></div>
                                </div>
                            </a></li>
                            <li>
                                <div class="notification_bottom">
                                    <a href="#">See all pending tasks</a>
                                </div>
                            </li>
                        </ul>
                    </li>
                </ul>
                <div class="clearfix"> </div>
            </div>-->
            <!--notification menu end -->
            <!--<div class="profile_details">
                <ul>
                    <li class="dropdown profile_details_drop">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                            <div class="profile_img">
                                <span class="prfil-img"><img src="images/a.png" alt=""> </span>
                                <div class="user-name">
                                    <p>Wikolia</p>
                                    <span>Administrator</span>
                                </div>
                                <i class="fa fa-angle-down lnr"></i>
                                <i class="fa fa-angle-up lnr"></i>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                        <ul class="dropdown-menu drp-mnu">
                            <li> <a href="#"><i class="fa fa-cog"></i> Settings</a> </li>
                            <li> <a href="#"><i class="fa fa-user"></i> Profile</a> </li>
                            <li> <a href="#"><i class="fa fa-sign-out"></i> Logout</a> </li>
                        </ul>
                    </li>
                </ul>
            </div> -->
            <div class="clearfix"> </div>
        </div>
        <div class="clearfix"> </div>
    </div>
    <!-- //header-ends -->
    <!-- main content start-->
    <div id="page-wrapper">
        <div class="main-page charts-page">
            <h3 class="title1">Gráficos</h3>

            <?php// var_dump($resultado); ?>
            <div class="charts">
                <div class="col-md-6 charts chrt-page-grids">
                    <h4 class="title">Quociente de cobertura de caixa</h4>
                    <canvas id="bar" height="300" width="400" style="width: 400px; height: 300px;"></canvas>
                    <p>
                        <div style="width:10px; height:10px; background-color:#ED6C2D; display:inline-block;"></div>
                        Cobertura de juros com caixa = <small>FCO antes de juros e impostos / juros</small>
                    </p>
                    <p>
                        <div style="width:10px; height:10px; background-color:#6D6FC6; display:inline-block;"></div>
                        Cobertura de dívidas com caixa = <small>(FCO – dividendo total) / exigível</small>
                    </p>
                    <p>
                        <div style="width:10px; height:10px; background-color:#747474; display:inline-block;"></div>
                        Cobertura de dividendos com caixa = <small>FCO / dividendos totais</small> 
                    </p>
                </div>
                <div class="col-md-6 charts chrt-page-grids chrt-right">
                    <h4 class="title">Quociente de qualidade de resultado</h4>
                     <canvas id="bar2" height="100" width="200" style="width: 200px; height: 100px;"></canvas> 
                     <p>
                        <div style="width:10px; height:10px; background-color:#ED6C2D; display:inline-block;"></div>
                        Qualidade das vendas = <small>caixa das vendas / vendas</small>
                    </p>
                    <p>
                        <div style="width:10px; height:10px; background-color:#6D6FC6; display:inline-block;"></div>
                        Qualidade do resultado = <small>FCO / resultado operacional</small>
                    </p>          
                </div>
                <div class="clearfix"> </div>
                <div class="col-md-6 charts chrt-page-grids " >
                    <h4 class="title">Quocientes dispêndios de capital</h4>
                     <canvas id="bar3" height="100" width="200" style="width: 200px; height: 100px;"></canvas> 
                     <p>
                        <div style="width:10px; height:10px; background-color:#ED6C2D; display:inline-block;"></div>
                        Aquisições de capital = <small>(FCO - dividendo total) / caixa pago por investimento de capital</small> 
                    </p>
                    <p>
                        <div style="width:10px; height:10px; background-color:#6D6FC6; display:inline-block;"></div>
                        Investimento/financiamento = <small>fluxo de caixa líquido para investimentos / fluxo de caixa líquido de financiamentos</small> 
                    </p>               
                </div>
                <div class="col-md-6 charts chrt-page-grids chrt-right">
                    <h4 class="title">Retornos do fluxo de caixa</h4>
                    <canvas id="bar4" height="100" width="200" style="width: 200px; height: 100px;"></canvas>
                     <p>
                        <div style="width:10px; height:10px; background-color:#ED6C2D; display:inline-block;"></div>
                       Retorno do caixa sobre os ativos = <small>FCO antes juros e impostos / ativos totais</small>
                    </p>
                    <p>
                        <div style="width:10px; height:10px; background-color:#6D6FC6; display:inline-block;"></div>
                        Retorno sobre passivo e patrimônio líquido = <small>FCO / (patrimônio líquido + exigível a longo prazo)</small>
                    </p>
                    <p>
                        <div style="width:10px; height:10px; background-color:#747474; display:inline-block;"></div>
                        Retorno sobre o patrimônio líquido = <small>FCO / patrimônio líquido</small>
                    </p>
                </div>
                <div class="clearfix"> </div>
                <script>
                    <?php $k = 0; ?>

                    var barChartData = {
                        labels : ["Ano1","Ano2"],
                        datasets : [
                            {
                                fillColor : "rgba(233, 78, 2, 0.83)",
                                strokeColor : "#ef553a",
                                highlightFill: "#ef553a",
                                data : [<?php echo $resultado[0]; ?>, <?php echo $resultado[10]; ?>]
                            },
                            {
                                fillColor : "rgba(79, 82, 186, 0.83)",
                                strokeColor : "#4F52BA",
                                highlightFill: "#4F52BA",
                                data : [<?php echo $resultado[1]; ?>, <?php echo $resultado[11]; ?>]
                            },
                            {
                                fillColor : "rgba(88, 88, 88, 0.83)",
                                strokeColor : "#585858",
                                highlightFill: "#585858",
                                data : [<?php echo $resultado[2]; ?>, <?php echo $resultado[12]; ?>]
                            }
                        ]
                    };

                    var barChartData2 = {
                        labels : ["Ano1", "Ano2"],
                        datasets : [
                            {
                                fillColor : "rgba(233, 78, 2, 0.83)",
                                strokeColor : "#ef553a",
                                highlightFill: "#ef553a",
                                data : [<?php echo $resultado[3]; ?>, <?php echo $resultado[13]; ?>]
                            },
                            {
                                fillColor : "rgba(79, 82, 186, 0.83)",
                                strokeColor : "#4F52BA",
                                highlightFill: "#4F52BA",
                                data : [<?php echo $resultado[4]; ?>, <?php echo $resultado[14]; ?>]
                            }
                        ]

                    };

                    var barChartData3 = {
                        labels : ["Ano1", "Ano2"],
                        datasets : [
                            {
                                fillColor : "rgba(233, 78, 2, 0.83)",
                                strokeColor : "#ef553a",
                                highlightFill: "#ef553a",
                                data : [<?php echo $resultado[5]; ?>, <?php echo $resultado[15]; ?>]
                            },
                            {
                                fillColor : "rgba(79, 82, 186, 0.83)",
                                strokeColor : "#4F52BA",
                                highlightFill: "#4F52BA",
                                data : [<?php echo $resultado[6]; ?>, <?php echo $resultado[16]; ?>]
                            }
                        ]

                    };

                    var barChartData4 = {
                        labels : ["Ano1", "Ano2"],
                        datasets : [
                            {
                                fillColor : "rgba(233, 78, 2, 0.83)",
                                strokeColor : "#ef553a",
                                highlightFill: "#ef553a",
                                data : [<?php echo $resultado[7]; ?>, <?php echo $resultado[17]; ?>]
                            },
                            {
                                fillColor : "rgba(79, 82, 186, 0.83)",
                                strokeColor : "#4F52BA",
                                highlightFill: "#4F52BA",
                                data : [<?php echo $resultado[8]; ?>, <?php echo $resultado[18]; ?>]
                            },
                            {
                                fillColor : "rgba(88, 88, 88, 0.83)",
                                strokeColor : "#4F52BA",
                                highlightFill: "#4F52BA",
                                data : [<?php echo $resultado[9]; ?>, <?php echo $resultado[19]; ?>]
                            }
                        ]

                    }

                    
                    new Chart(document.getElementById("bar").getContext("2d")).Bar(barChartData);
                    new Chart(document.getElementById("bar2").getContext("2d")).Bar(barChartData2);
                    new Chart(document.getElementById("bar3").getContext("2d")).Bar(barChartData3);
                    new Chart(document.getElementById("bar4").getContext("2d")).Bar(barChartData4);

                </script>
            </div>
        </div>
    </div>
    <!--footer-->
    <div class="footer">
        <p>&copy; 2016 Novus Admin Panel. All Rights Reserved | Design by <a href="https://w3layouts.com/" target="_blank">w3layouts</a></p>
    </div>
    <!--//footer-->
</div>
<!-- Classie -->
<script src="js/classie.js"></script>
<script>
    var menuLeft = document.getElementById( 'cbp-spmenu-s1' ),
        showLeftPush = document.getElementById( 'showLeftPush' ),
        body = document.body;

    showLeftPush.onclick = function() {
        classie.toggle( this, 'active' );
        classie.toggle( body, 'cbp-spmenu-push-toright' );
        classie.toggle( menuLeft, 'cbp-spmenu-open' );
        disableOther( 'showLeftPush' );
    };

    function disableOther( button ) {
        if( button !== 'showLeftPush' ) {
            classie.toggle( showLeftPush, 'disabled' );
        }
    }
</script>
<!--scrolling js-->
<script src="js/jquery.nicescroll.js"></script>
<script src="js/scripts.js"></script>
<!--//scrolling js-->
<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.js"> </script>
</body>
</html>