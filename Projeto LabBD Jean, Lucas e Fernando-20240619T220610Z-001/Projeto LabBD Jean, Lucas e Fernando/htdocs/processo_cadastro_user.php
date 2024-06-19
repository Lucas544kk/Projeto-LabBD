<?php

    //abrir a conexão com o BD
    include_once("./config/conexao.php");

    //recuperar o conteúdo vindo do FORM (POST)
    $name = $_POST["name"];
    $registro = $_POST["registro"];
    
    $sql = "select * from admin where registro = '$registro';";
    $res = mysqli_query($conn, $sql);

    if( mysqli_affected_rows($conn) == 0 ){//usuário não existe
        $password = sha1("{$_POST['registro']}{$_POST['password']}");
        $Cod_Admin = "";

        //gerar o código SQL do INSERT do ADMIN
        $sql_admin = "INSERT INTO admin VALUES(null,'$name','$registro','$password');";

        //executar o código SQL
        $resultado = mysqli_query( $conn , $sql_admin );

        //recuperar a PK do usuário inserido
        if( $resultado ){//insert OK
            $Cod_Admin = mysqli_insert_id( $conn );
        }

        //verificar se foi executado
        //feedback e retorno para a página inicial

        if( mysqli_affected_rows($conn) != 0 ){//OK
            echo "<meta http-equiv='refresh'content='0;url=index.php'>
            <script type='text/javascript'> alert('Usuário inserido com sucesso!'); </script>
            ";
        }else{//ERRO
            echo "<meta http-equiv='refresh'content='0;url=index.php'>
            <script type='text/javascript'> alert('Usuário não inserido!'); </script>
            ";
        }
    }else{ //existe usuário
        echo "<meta http-equiv='refresh'content='0;url=index.php'>
            <script type='text/javascript'> alert('Usuário já existe!'); </script>
            ";
    }//fim 

?>
