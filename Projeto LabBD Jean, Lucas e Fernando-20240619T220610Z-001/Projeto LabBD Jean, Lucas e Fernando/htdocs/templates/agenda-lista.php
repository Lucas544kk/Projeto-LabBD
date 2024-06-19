<?php
    //conexão com banco
    include_once("./config/conexao.php");
    //abrir sessão
    //session_start();
    $Cod_Admin = $_SESSION['Cod_Admin'];
    $sql = "SELECT * from admin where Cod_Admin = $Cod_Admin;";
    $result = mysqli_query($conn, $sql);
    $agendas = mysqli_affected_rows($conn);
    
?>
<div class='container'>
    <div class='form-title'>
        <h1>Agendas</h1>
    </div>
    <?php if( $agendas > 0 ): ?>
        <div class='form-title'>
            <table id='agenda-table' class='table table-striped table-hover'>
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Datas</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while( $row = mysqli_fetch_array($result) ): ?>
                        <tr>
                            <td><?= $row[0] ?></td>
                            <td><?= $row[1] ?></td>
                            <td>
                                <a href='./show_agenda.php?id=<?=$row[0]?>'><i class='fa-solid fa-eye view-icon'></i></a>
                                <a href='./editar_agenda.php?id=<?=$row[0]?>'><i class='fa-solid fa-pen-to-square edit-icon'></i></a>
                                <a href='./processo_delete_agenda.php?id=<?=$row[0]?>'><i class='fa-solid fa-trash-can delete-icon'></i></a>
                            </td>
                        </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
        </div>
    <?php else: ?>
        <div class='form-title'>
            <h3>Nenhuma agenda ainda</h3><br>
            <h5><a href='./cadastro_agenda.php'>Clique aqui</a> para adicionar uma agenda!</h5>
        </div>
    <?php endif; ?>

</div>