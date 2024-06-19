<?php 
    //SESSION
    include_once("./templates/header.php");
?>

    <?php
        //session_start();
        if( !isset($_SESSION['Cod_Admin']) ){//sem login
            include_once("./templates/form-login.php");
        }else{//tem login
            include_once("./templates/agenda-lista.php");
        }
    ?>

<?php include_once("./templates/footer.php"); ?>
