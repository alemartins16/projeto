<?php
	$id = (int) $_GET['id_cand'];
	$sql = mysqli_query($con, "select * from candidato where id_cand = '".$id."';");
	$row = mysqli_fetch_array($sql);
?>
<div id="main" class="container-fluid">
	<h3 class="page-header">Visualizar registro do Candidato - <?php echo $id; ?> </h3>
	<div class="row">
		<div class="col-md-2">
			<p><strong>Matrícula</strong></p>
			<p><?php echo $row['id_cand'];?></p>
		</div>
		<div class="col-md-5">
			<p><strong>Nome Completo</strong></p>
			<p><?php echo $row['nome_cand'];?></p>
		</div>
		<div class="col-md-5">
			<p><strong>Data Cadastro</strong></p>
			<p><?php echo date('d-m-Y',strtotime($row['data_cad_cand'])); ?></p>
		</div>
		<div class="col-md-3">
			<p><strong>Data Nascimento</strong></p>
			<p><?php echo date('d-m-Y',strtotime($row['data_nasc_cand'])); ?></p>
		</div>
		<div class="col-md-2">
			<p><strong>Sexo</strong></p>
			<p><?php echo $row['sexo_cand'];?></p>
		</div>
		<div class="col-md-3">
			<p><strong>Celular</strong></p>
			<p><?php echo $row['celular_cand'];?></p>
		</div>
		<div class="col-md-3">
			<p><strong>E-mail</strong></p>
			<p><?php echo $row['email_cand'];?></p>
		</div>
    </div>	
	
	<hr/>
	<div id="actions" class="row">
		<div class="col-md-12">
			<a href="?page=lista_cand" class="btn btn-default">Voltar</a>
				<?php echo "<a href=?page=fedit_cand&id_cand=".$row['id_cand']." class='btn btn-primary'>Editar</a>";?>
				<?php echo "<a href=?page=excluir_cand&id_cand=".$row['id_cand']." class='btn btn-danger'>Excluir</a>";?>
		</div>
	</div>
</div>
