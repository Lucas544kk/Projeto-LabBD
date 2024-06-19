<?php
    //recuperar os dados do formulário
    $name = $_POST['name'];
    
    //abrir a conexão com o BD
    include_once("./config/conexao.php");

    //validar usuário e senha
    //abrir uma sessão e gravar o ID do admin
    $sql = "SELECT * FROM admin
           WHERE admin = '$name';";
    $resultado = "";
    if( $resultado = mysqli_query($conn, $sql) ){//executa o SQL
        if( mysqli_num_rows($resultado) > 0 ){//tem usuário
            //criptografia da senha
            $password = sha1("{$_POST['name']}{$_POST['password']}");
            //comparar com o valor do BD
            $row = mysqli_fetch_array($resultado);
            $senha = $row[3];
            if( $senha == $password ){//senha OK
                //Registrar o Login
                session_start();
                $_SESSION['Cod_Admin'] = $row[0];
                echo "<meta http-equiv='refresh'content='0;url=index.php'>
                    <script type='text/javascript'> alert('Bem-vindo $row[1]'); </script>
                    ";

            }else{//senha incorreta
                echo "<meta http-equiv='refresh'content='0;url=index.php'>
                    <script type='text/javascript'> alert('Senha incorreta.'); </script>
                    ";
            }

        }else{//não existe o usuário
            echo "<meta http-equiv='refresh'content='0;url=index.php'>
            <script type='text/javascript'> alert('Usuário não encontrado.'); </script>
            ";
        }//fim if( mysqli_num_rows($resultado) > 0 )

    }else{//ERRO de SQL

    }//fim if( $resultado = mysqli_query($conn, $sql) )

?>