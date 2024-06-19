<?php

    function nav_login(){
        echo "<div class='container'>
                        <div class='navbar-nav'>
                            <a class='nav-link ' href='index.php'>Agenda</a>
                            <a class='nav-link ' href=''>Nova Agenda</a>
                        </div>
                        <div class='navbar-nav'>
                            <a class='nav-link ' href=''>Sair</a>
                        </div>
                    </div>";
    }//fim function nav_login()

    function nav_no_login(){
        echo "<div class='container'>
                        <div class='navbar-nav'>
                            <a class='nav-link ' href=''>Agenda</a>
                        </div>
                        <div class='navbar-nav'>
                            <a class='nav-link' href='cadastro_user.php'>Cadastre-se</a>
                        </div>
                    </div>";
    }//function nav_no_login()

?>