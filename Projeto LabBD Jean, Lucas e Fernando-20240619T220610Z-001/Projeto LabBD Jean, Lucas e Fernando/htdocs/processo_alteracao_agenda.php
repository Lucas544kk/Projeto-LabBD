<?php
    //abrir a sessão
    session_start();
    if( !isset($_SESSION['Cod_Admin']) ){
        header("location: index.php");
    }

    //abrir a conexão com o BD
    include_once("./config/conexao.php");

    //recuperar o conteúdo vindo do FORM (POST)
    $Cod_Agenda = $_POST['Cod_Agenda'];
    $Dia_Hora = $_POST['Dia_Hora'];
    $descricao = $_POST['descricao'];

    //gerar o código SQL do UPDATE da AGENDA
    $sql_update =  "update agenda
                    set Dia_Hora = '$Dia_Hora', descricao = '$descricao'
                    where Cod_Agenda = $Cod_Agenda;  ";

    //executar o código SQL
    $resultado = mysqli_query( $conn , $sql_update );
    
    if( mysqli_affected_rows($conn) != 0 ){//OK
        echo "<meta http-equiv='refresh'content='0;url=index.php'>
        <script type='text/javascript'> alert('Data alterada com sucesso!'); </script>
        ";
    }else{//ERRO
        echo "<meta http-equiv='refresh'content='0;url=index.php'>
        <script type='text/javascript'> alert('Data não alterada!'); </script>
        ";
    }

?>