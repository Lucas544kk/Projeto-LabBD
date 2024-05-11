<?php

    //abrir a conexão com o BD
    include_once("./config/conexao.php");

    //recuperar o conteúdo vindo do FORM (POST)
    $name = $_POST["name"];
    $username = $_POST["username"];
    $password = sha1("{$_POST['username']}{$_POST['password']}");
    $email = $_POST["email"];
    $iduser = "";

    //gerar o código SQL do INSERT do USER
    $sql_user = "INSERT INTO users VALUES(null,'$name','$username','$password');";

    //executar o código SQL
    $resultado = mysqli_query( $conn , $sql_user );

    //recuperar a PK do usuário inserido
    if( $resultado ){//insert OK
        $iduser = mysqli_insert_id( $conn );
    }

    //gerar o código SQL do INSERT do E-MAIL
    $sql_email = "INSERT INTO contact VALUES(null, '$email', $iduser);";

    //executar o SQL do e-mail
    $resultado_email = mysqli_query( $conn , $sql_email );

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

?>
