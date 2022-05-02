<!-- Documentacion -->
<?php 
    //header
    require_once './View/Layout/header.php'; 
    // Body
    if(isset($_GET['page'])){
        $page = $_GET['page'];
        if($page == 'home' || $page == 'personalJJB' || $page =='Asistencias' || $page == 'detallesPersonal' || $page == 'horarioAdm' || $page == 'horarioOper' || $page == 'pagosAdm' || $page == 'pagosOpe' || $page == 'personalList' || $page == 'personalSideruk' || $page == 'personalYerm' || $page == 'registroUs'|| $page == 'horarioAdmin' || $page == 'horarioOp' || $page == 'Asistencias' || $page == 'pagosWhite' || $page == 'pagosBlack' || $page == 'general'){
            require_once 'View/Content/'.$_GET['page'].'.php';
        }else{
            require_once 'View/Content/home.php';
        }
    }else{
        require_once './View/Content/home.php'; //body
    }
    // Footer
    require_once './View/Layout/footer.php'; //footer
?>