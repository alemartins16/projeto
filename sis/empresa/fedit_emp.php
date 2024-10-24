<?php
	$id = (int) $_GET['id_emp'];
	$sql = mysqli_query($con, "select * from empresa where id_emp = '".$id."';");
	$row = mysqli_fetch_array($sql);
?>
<div id="main" class="container-fluid">
	<br><h3 class="page-header">Editar registro da Empresa - <?php echo $id;?></h3>

	<!-- Área de campos do formulário de edição-->

	<form action="?page=atualiza_emp&codigo=<?php echo $row['id_emp']; ?>" method="post">

	<!-- 1ª LINHA -->	
	<div class="row"> 
		<div class="form-group col-md-2">
			<label for="id_emp">Código</label>
			<input type="text" class="form-control" name="id_emp" value="<?php echo $row["id_emp"]; ?>">
		</div>
		<div class="form-group col-md-5">
			<label for="cnpj_emp">CNPJ</label>
			<input type="text" class="form-control" name="cnpj_emp" value="<?php echo $row["cnpj_emp"]; ?>">
		</div>
		<div class="form-group col-md-5">
			<label for="nome_emp">Nome Empresarial</label>
			<input type="text" class="form-control" name="nome_emp" value="<?php echo $row["nome_emp"]; ?>">
		</div>
        
	</div>

	
    <div class="row"> 
		<div class="form-group col-md-4">
			<label for="telefone_emp">Telefone</label>
			<input type="text" class="form-control" name="telefone_emp" value="<?php echo $row["telefone_emp"]; ?>">
		</div>
	 
		<div class="form-group col-md-4">
			<label for="email_emp">E-mail</label>
			<input type="text" class="form-control" name="email_emp" value="<?php echo $row["email_emp"]; ?>">
		</div>
		<div class="form-group col-md-4">
			<label for="nome_resp_cand">Nome Responsável</label>
			<input type="text" class="form-control" name="nome_resp_emp" value="<?php echo $row["nome_resp_emp"]; ?>">
		</div>
		<div class="form-group col-md-4">
			<label for="tel_resp_cand">Telefone Responsável</label>
			<input type="text" class="form-control" name="tel_resp_emp" value="<?php echo $row["tel_resp_emp"]; ?>">
		</div>
	</div>
      


	<hr/>

	<div id="actions" class="row">
		<div class="col-md-12">
			<a href="?page=lista_emp" class="btn btn-secondary">Voltar</a>
			<button type="submit" class="btn btn-primary">Salvar Alterações</button>
		</div>
	</div>
</div>
 