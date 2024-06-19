<?php
  
    //preparar os dados de conexao
    $host = "localhost";//servidor de BD 127.0.0.1
    $user = "root";
    $password = "root";
    $dbname = "task";
    //criar a conexao
    $conn = mysqli_connect($host,$user,$password,$dbname);
    //testar a conexão
    if(!$conn){//ERRO de conexão
        die("Falha na conexão: ".mysqli_connect_error());
    }

   /* try{
        $conn = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch( PDOException $erro) {
        //erro
        $error = $erro->getMessage();
        echo "Erro: $error";
    }*/

?>