<?php
	$id = (int) $_GET['id_emp'];
	$sql = mysqli_query($con, "select * from empresa where id_emp = '".$id."';");
	$row = mysqli_fetch_array($sql);
?>
<div id="main" class="container-fluid">
	<h3 class="page-header">Visualizar registro da Empresa - <?php echo $id; ?> </h3>
	<div class="row">
		<div class="col-md-2">
			<p><strong>Código</strong></p>
			<p><?php echo $row['id_emp'];?></p>
		</div>
		<div class="col-md-2">
			<p><strong>CNPJ</strong></p>
			<p><?php echo $row['cnpj_emp'];?></p>
		</div>
		<div class="col-md-5">
			<p><strong>Nome Empresarial</strong></p>
			<p><?php echo $row['nome_emp'];?></p>
		</div>
	</div>
		
	<div class="row">
		<div class="col-md-4">
			<p><strong>Telefone</strong></p>
			<p><?php echo $row['telefone_emp'];?></p>
		</div>
		<div class="col-md-4">
			<p><strong>E-mail</strong></p>
			<p><?php echo $row['email_emp'];?></p>
		</div>
		<div class="col-md-5">
			<p><strong>Nome Responsável</strong></p>
			<p><?php echo $row['nome_resp_emp'];?></p>
		</div>

		<div class="col-md-4">
			<p><strong>Telefone Responsável</strong></p>
			<p><?php echo $row['tel_resp_emp'];?></p>
		</div>
	</div>
		
	<hr/>
	<div id="actions" class="row">
		<div class="col-md-12">
			<a href="?page=lista_emp" class="btn btn-default">Voltar</a>
				<?php echo "<a href=?page=fedit_emp&id_emp=".$row['id_emp']." class='btn btn-primary'>Editar</a>";?>
				<?php echo "<a href=?page=excluir_emp&id_emp=".$row['id_emp']." class='btn btn-danger'>Excluir</a>";?>
		</div>
	</div>
</div>
