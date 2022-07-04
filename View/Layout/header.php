<?php
    // Inicio se sesion datos de usuario de sesion
    if(isset($_SESSION['user']) && $_SESSION['user'] != null){
        $usuario = $_SESSION['user'];
        $login = UsuariosController::log($usuario);
    }
    foreach($login as $key => $log){
        $_SESSION['rol'] = $log['fk_rol'];
        $_SESSION['inicial']=$log['inicial'];
        $_SESSION['nombre_usuario'] = $log['uname'];
    }
    // Cierre de sesion
    if(isset($_GET['cerrar']) && $_GET['cerrar'] == 'ok'){
        $salir = New UsuariosController;
        $salir -> cerrarSesion($_GET['cerrar']);
    }
?>
<!Doctype html>
<html class="no-js" lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Virus 2.0</title>
    <meta name="description" content="Ela Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="https://media-exp1.licdn.com/dms/image/C4D0BAQFACGJzlTq_3g/company-logo_200_200/0/1603932733398?e=2147483647&v=beta&t=RQSv37kl3bhIhgMnVl4vUYqnJke28mkpO6WRp7dadEI">
    <link rel="shortcut icon" href="https://media-exp1.licdn.com/dms/image/C4D0BAQFACGJzlTq_3g/company-logo_200_200/0/1603932733398?e=2147483647&v=beta&t=RQSv37kl3bhIhgMnVl4vUYqnJke28mkpO6WRp7dadEI">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.0/normalize.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pixeden-stroke-7-icon@1.2.3/pe-icon-7-stroke/dist/pe-icon-7-stroke.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.2.0/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->
    <link href="https://cdn.jsdelivr.net/npm/chartist@0.11.0/dist/chartist.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/jqvmap@1.5.1/dist/jqvmap.min.css" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/weathericons@2.1.0/css/weather-icons.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/fullcalendar@3.9.0/dist/fullcalendar.min.css" rel="stylesheet" />
    <!-- Graficos -->
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
</head>

<body>
    <!-- Left Panel -->
    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-lg navbar-default">
            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="body.php"><i class="menu-icon fa fa-home"></i>Inicio</a>
                    </li>
                    <?php if($_SESSION['rol']==1 ||$_SESSION['rol']!=1):?>
                    <li class="menu-title">RRHH</li><!-- /.menu-title -->
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-users"></i>Personal</a>
                        <ul class="sub-menu children dropdown-menu"> 
                            <li><i class="fa fa-user"></i><a href="body.php?page=personalJJB">JJBoggio</a></li>
                            <li><i class="fa fa-user"></i><a href="body.php?page=personalYerm">Yermedic</a></li>
                            <li><i class="fa fa-user"></i><a href="body.php?page=personalSideruk">Sideruk</a></li>
                            <li><i class="fa fa-id-badge"></i><a href="body.php?page=detallesPersonal">Registro</a></li>
                            <li><i class="fa fa-id-badge"></i><a href="body.php?page=personalList">Lista</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-clock-o"></i>Horarios</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-clock-o"></i><a href="body.php?page=horarioAdmin">Administrativos</a></li>
                            <li><i class="fa fa-clock-o"></i><a href="body.php?page=horarioOp">Operacion</a></li>
                            <li><i class="fa fa-clock-o"></i><a href="body.php?page=Asistencias">Asistencias</a></li>
                        </ul>
                    </li>
                    <!-- <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-usd"></i>Pagos</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-usd"></i><a href="body.php?page=pagosAdm">Mensuales</a></li>
                            <li><i class="menu-icon fa fa-usd"></i><a href="body.php?page=pagosOpe">Semanales</a></li>
                        </ul>
                    </li> -->
                    <?php endif?>
                    <?php if($_SESSION['rol']==1):?>
                    <li class="menu-title">Gerencia</li><!-- /.menu-title -->
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-group"></i>Usuarios</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-user"></i><a href="body.php?page=registroUs">Registro</a></li>
                            <!-- <li><i class="menu-icon fa fa-plus"></i><a href="index.php?page=general">Panel General</a></li> -->
                        </ul>
                    </li>
                    <!-- Charts -->
                    <!-- <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-bar-chart"></i>Charts</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-line-chart"></i><a href="charts-chartjs.html">Chart JS</a></li>
                            <li><i class="menu-icon fa fa-area-chart"></i><a href="charts-flot.html">Flot Chart</a></li>
                            <li><i class="menu-icon fa fa-pie-chart"></i><a href="charts-peity.html">Peity Chart</a></li>
                        </ul>
                    </li> -->
                    <?php endif?>
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside>
    <!-- /#left-panel -->
    <!-- Right Panel -->
    <div id="right-panel" class="right-panel">
        <!-- Header-->
        <header id="header" class="header">
            <div class="top-left">
                <div class="navbar-header">
                    <a class="navbar-brand" href="./"><img src="assets/images/logo.jpg" alt="Logo" width="30" height="30"></a>
                    <a class="navbar-brand hidden" href="./"><img src="images/logo2.png" alt="Logo"></a>
                    <a id="menuToggle" class="menutoggle"><i class="fa fa-bars"></i></a>
                </div>
            </div>
            <div class="top-right">
                <div class="header-menu">
                    <!-- Avatar de usuario -->
                    <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle active" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <!-- <img class="user-avatar rounded-circle" src="assets/images/avatar/1.jpg" alt="User Avatar"> -->
                            <span class="user-avatar rounded-circle text-primary"><?=STRTOUPPER($_SESSION['inicial'])?></span>
                        </a>

                        <div class="user-menu dropdown-menu">
                            <a class="nav-link" href="#"><i class="fa fa-user"></i><?=STRTOUPPER($_SESSION['nombre_usuario'])?></a>

                            <a class="nav-link text-danger" href="body.php?cerrar=ok"><i class="fa fa-power-off"></i>Cerrar Sesion</a>
                        </div>
                    </div>

                </div>
            </div>
        </header>
        <!-- /#header -->
        <!-- Content -->
        <div class="content">