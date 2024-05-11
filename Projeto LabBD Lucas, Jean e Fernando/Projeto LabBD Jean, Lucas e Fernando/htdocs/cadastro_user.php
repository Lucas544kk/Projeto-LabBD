<?php include_once("./templates/header.php"); ?>
<div class='container'>
<form class='form-cadastro' action='processa_cadastro_user.php' method='POST'>
    <div class='form-title'>
        <h1>Cadastro do Usuário</h1>
    </div>

    <div class='form-group'>  
        <label for="name">Nome</label>
        <input class='form-control' type="text" name="name" id="name" required>
    </div>
    <div class='form-group'>
        <label for="username">Username</label>
        <input class='form-control' type="text" name="username" id="username" required>
    </div>
    <div class='form-group'>
        <label for="password">Senha</label>
        <input class='form-control' type="password" name="password" id="password" title='Senha de Login' required>
    </div>
    <div class='form-group'>
        <label for="email">E-mail</label>
        <input class='form-control' type="email" name="email" id="email" required>
    </div><br>
    <button type='submit' class='btn btn-dark' >Cadastrar</button>
</form>
</div>

<?php include_once("./templates/footer.php"); ?>