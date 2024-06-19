<?php 
    //SESSION
    include_once("./templates/header.php");
    //testa o login
    if( !isset($_SESSION['Cod_Admin']) ){
        header("location: index.php");
    }
    //consulta a tarefa
    include_once("./config/conexao.php");
    $id = $_GET['id'];
    $sql = "select * from agenda where Cod_Agenda=$id;";
    $res = mysqli_query($conn,$sql);
    $row = mysqli_fetch_array($res);
?>

<div class='container'>
    <form class='form-cadastro' action='processo_alteracao_agenda.php' method='POST'>
        <div class='form-title'>
            <h1>Exibição da Agenda</h1>
        </div>
    <input class='form-control' type='string' name='Dia_Hora' id='Dia_Hora' value='<?=$row[0]?>' hidden>
        <div class='form-group'>
            <label for='Dia_Hora'>Dia da Agenda</label>
            <input class='form-control' type='text' name='Dia_Hora' id='Dia_Hora' value='<?=$row[1]?>' >
        </div>
        <div class='form-group'>
            <label for='descricao'>Descrição da Agenda</label>
            <textarea class='form-control' name="descricao" id="descricao"><?=$row[2]?></textarea>
        </div>
        <br>
        <button type='submit' class='btn btn-dark'>Alterar</button>
    </form>
</div>

<?php include_once("./templates/footer.php"); ?>