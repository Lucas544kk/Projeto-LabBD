<?php include_once("./templates/header.php"); ?>
<div class='container'>
<form class='form-cadastro' action='processo_cadastro_user.php' method='POST'>
    <div class='form-title'>
        <h1>Cadastro do Usuário</h1>
    </div>

    <div class='form-group'>  
        <label for="name">Nome</label>
        <input class='form-control' type="text" name="name" id="name" required>
    </div>
    <div class='form-group'>
        <label for="registro">Registro</label>
        <input class='form-control' type="text" name="registro" id="registro" required>
    </div>
    <div class='form-group'>
        <label for="password">Senha</label>
        <input class='form-control' type="password" name="password" id="password" title='Senha de Login' required>
    </div><br>
    <button type='submit' class='btn btn-dark' >Cadastrar</button>
    <button type='reset' class='btn btn-dark'>Limpar</button>
    <button type='cancel' onclick="javascript:window.location='index.php'"  class='btn btn-dark'>Cancelar</button>
</form>
</div>

<?php include_once("./templates/footer.php"); ?>