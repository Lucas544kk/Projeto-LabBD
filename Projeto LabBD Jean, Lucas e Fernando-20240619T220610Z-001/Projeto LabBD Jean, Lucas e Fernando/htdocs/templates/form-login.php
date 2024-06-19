<?php

    echo "<div class='container'>
    <form class='form-cadastro' action='processo_login.php' method='POST'>
        <div class='form-title'>
            <h1>Login</h1>
        </div>
        <div class='form-group'>
            <label for='Nome'>Nome</label>
            <input class='form-control' type='text' name='username' id='username' required>
        </div>
        <div class='form-group'>
            <label for='Password'>Senha</label>
            <input class='form-control' type='password' name='password' id='password' title='Senha de Login' required>
        </div>
        <br>
        <button type='submit' class='btn btn-dark' >Login</button>
        <button type='reset' class='btn btn-dark'>Limpar</button>
    </form>
    </div>";

?>