<?php
    $id = (int) $_GET['id'];
    $sql = mysqli_query($con, "SELECT * FROM dependentes WHERE id = '".$id."';");
    $row = mysqli_fetch_array($sql);
?>
<div id="main" class="container-fluid">
    <br><h3 class="page-header">Editar registro do Dependente - <?php echo $id;?></h3>

    <!-- Área de campos do formulário de edição-->
    <form action="?page=atualiza_dependentes&id=<?php echo $row['id']; ?>" method="post">

    <!-- 1ª LINHA -->   
    <div class="row"> 
        <div class="form-group col-md-2">
            <label for="id">ID</label>
            <input type="text" class="form-control" name="id" value="<?php echo $row['id']; ?>" readonly>
        </div>
        <div class="form-group col-md-5">
            <label for="nome">Nome</label>
            <input type="text" class="form-control" name="nome" value="<?php echo $row['nome']; ?>">
        </div>
        <div class="form-group col-md-5">
            <label for="certidao_nascimento">Certidão de Nascimento</label>
            <input type="text" class="form-control" name="certidao_nascimento" value="<?php echo $row['certidao_nascimento']; ?>">
        </div>
    </div>

    <!-- 2ª LINHA -->   
    <div class="row"> 
        <div class="form-group col-md-5">
            <label for="carteira_vacinacao">Carteira de Vacinação</label>
            <input type="text" class="form-control" name="carteira_vacinacao" value="<?php echo $row['carteira_vacinacao']; ?>">
        </div>
    </div>

    <hr/>

    <div id="actions" class="row">
        <div class="col-md-12">
            <a href="?page=lista_dependentes" class="btn btn-secondary">Voltar</a>
            <button type="submit" class="btn btn-primary">Salvar Alterações</button>
        </div>
    </div>
</div>
