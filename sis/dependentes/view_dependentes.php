<?php
    // Obter o ID do registro a ser visualizado
    $id = (int) $_GET['id'];
    
    // Consulta para obter o registro correspondente
    $sql = mysqli_query($con, "SELECT * FROM dependentes WHERE id = '".$id."';");
    $row = mysqli_fetch_array($sql);
?>
<div id="main" class="container-fluid">
    <h3 class="page-header">Visualizar registro do Dependente - <?php echo $id; ?> </h3>
    
    <!-- Exibição dos campos do dependente -->
    <div class="row">
        <div class="col-md-2">
            <p><strong>ID</strong></p>
            <p><?php echo $row['id']; ?></p>
        </div>
        <div class="col-md-5">
            <p><strong>Nome</strong></p>
            <p><?php echo $row['nome']; ?></p>
        </div>
        <div class="col-md-5">
            <p><strong>Certidão de Nascimento</strong></p>
            <p><?php echo $row['certidao_nascimento']; ?></p>
        </div>
        <div class="col-md-5">
            <p><strong>Carteira de Vacinação</strong></p>
            <p><?php echo $row['carteira_vacinacao']; ?></p>
        </div>
    </div>
    
    <hr/>
    
    <!-- Ações disponíveis: voltar, editar, excluir -->
    <div id="actions" class="row">
        <div class="col-md-12">
            <a href="?page=lista_dependentes" class="btn btn-default">Voltar</a>
            <?php echo "<a href=?page=fedita_dependentes&id=".$row['id']." class='btn btn-primary'>Editar</a>"; ?>
            <?php echo "<a href=?page=excluir_dependentes&id=".$row['id']." class='btn btn-danger'>Excluir</a>"; ?>
        </div>
    </div>
</div>

