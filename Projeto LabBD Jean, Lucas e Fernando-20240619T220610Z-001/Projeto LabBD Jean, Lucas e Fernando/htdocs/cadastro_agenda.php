<?php 
    //SESSION
    include_once("./templates/header.php");
    if( !isset($_SESSION['Cod_Admin']) ){
        header("location: index.php");
    }
?>

<div class='container'>
    <form class='form-cadastro' action='processo_cadastro_agenda.php' method='POST'>
        <div class='form-title'>
            <h1>Cadastro de Agenda</h1>
        </div>
        <div class='form-group'>
            <label for='datas'>Dia da Agenda</label>
            <input class='form-control' type='string' name='data' id='data' required>
        </div>
        <div class='form-group'>
            <label for='Descricao'>Descrição da Agenda</label>
            <textarea class='form-control' name="Descricao" id="Descricao"></textarea>
        </div>
        <br>
        <button type='submit' class='btn btn-dark' >Cadastrar</button>
        <button type='reset' class='btn btn-dark'>Limpar</button>
        <button type='cancel' onclick="javascript:window.location='index.php'"  class='btn btn-dark'>Cancelar</button>

    </form>
    </div>

<?php include_once("./templates/footer.php"); ?>