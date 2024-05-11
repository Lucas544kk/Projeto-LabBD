<?php 

    //preparar os dados de conexão
    $host = "localhost";//servidor de BD 
    $user = "root";
    $password = "root";
    $dbname = "AGENDAMENTO";
    //criar a conexão
    $conn = mysqli_connect($host,$user,$password,$dbname);
    //testa a conexão
    if($conn){//conexão OK
        echo "Conexão OK";
    }else{//ERRO de conexão
        echo "Falha na conexão: ".mysqli_connect_error();
    }
?>