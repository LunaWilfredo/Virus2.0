<!-- Documentacion -->
<?php 
    //DB
    include_once './BD/db.php';
    //Model
    //include_once 'Model/UModel.php';
    //Controller
    include_once 'Controller/UController.php';
    include_once 'Controller/PController.php';

    //header and lateral
    include_once 'View/Layout/header.php'; 
    
    // Body
    if(isset($_GET['page'])){
        $page = $_GET['page'];
        if($page == 'home' || $page == 'personalJJB' || $page =='Asistencias' || $page == 'detallesPersonal' || $page == 'horarioAdm' || $page == 'horarioOper' || $page == 'pagosAdm' || $page == 'pagosOpe' || $page == 'personalList' || $page == 'personalSideruk' || $page == 'personalYerm' || $page == 'registroUs'|| $page == 'horarioAdmin' || $page == 'horarioOp' || $page == 'Asistencias' || $page == 'pagosWhite' || $page == 'pagosBlack' || $page == 'general'){
            require_once 'View/Content/'.$_GET['page'].'.php';
        }else{
            require_once 'View/Content/home.php';
        }
    }else{
        require_once 'View/Content/home.php'; //body
    }
    // Footer
    include_once './View/Layout/footer.php';


?>