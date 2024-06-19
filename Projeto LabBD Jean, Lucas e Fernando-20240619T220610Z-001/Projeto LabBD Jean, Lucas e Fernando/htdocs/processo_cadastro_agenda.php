<?php
    //abrir a sessão
    session_start();
    if( !isset($_SESSION['Cod_Admin']) ){
        header("location: index.php");
    }

    //abrir a conexão com o BD
    include_once("./config/conexao.php");

    //recuperar o conteúdo vindo do FORM (POST)
    $Dia_Hora = $_POST["Dia_Hora"];
    $descricao = $_POST["descricao"];
    $Cod_Admin = $_SESSION['Cod_Admin'];

    //gerar o código SQL do INSERT do USER
    $sql_agenda = "INSERT INTO Agenda VALUES(null,'$Data_Hora','$descricao','$Cod_Admin');";

    //executar o código SQL
    $resultado = mysqli_query( $conn , $sql_agenda );
    
    if( mysqli_affected_rows($conn) != 0 ){//OK
        echo "<meta http-equiv='refresh'content='0;url=index.php'>
        <script type='text/javascript'> alert('Data cadastrada com sucesso!'); </script>
        ";
    }else{//ERRO
        echo "<meta http-equiv='refresh'content='0;url=index.php'>
        <script type='text/javascript'> alert('Data não cadastrada!'); </script>
        ";
    }

?>