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
    $sql = "select * from Agenda where Cod_Agenda=$id;";
    $res = mysqli_query($conn,$sql);
    $row = mysqli_fetch_array($res);
?>

<div class='container'>
    <form class='form-cadastro' action='index.php' method='POST'>
        <div class='form-title'>
            <h1>Exibição da Agenda</h1>
        </div>
        <div class='form-group'>
            <label for='Cod_Agenda'>ID da Agenda</label>
            <input class='form-control' type='text' name='Cod_Agenda' id='Cod_Agenda' value='<?=$row[0]?>' disabled='true'>
        </div>
        <div class='form-group'>
            <label for='datas'>Dia da Agenda</label>
            <input class='form-control' type='text' name='datas' id='datas' value='<?=$row[1]?>' disabled='true'>
        </div>
        <div class='form-group'>
            <label for='Descricao'>Descrição da Tarefa</label>
            <textarea class='form-control' name="Descricao" id="Descricao" disabled='true'><?=$row[2]?></textarea>
        </div>
        <br>
        <button type='submit' class='btn btn-dark'>Voltar</button>
    </form>
</div>

<?php include_once("./templates/footer.php"); ?>