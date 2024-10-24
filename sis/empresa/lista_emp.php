<div id="main" class="container-fluid">
	<div id="top" class="row">
		<div class="col-md-10">
			<h2>Empresas</h2>
		</div>

		<div class="col-md-2">
			<!-- Chama o Formulário para adicionar alunos -->
			<a href="?page=foradd_emp" class="btn btn-primary pull-right h2">Nova Empresa</a> 
		</div>
	</div>
	<hr/>
	<div><?php include "mensagens.php"; ?> </div>
	<!--top - Lista dos Campos-->
		<div id="list" class="row">
			<div class="table-responsive col-md-12">
				<?php
					$quantidade = 5;

					$pagina = (isset($_GET['pagina'])) ? (int)$_GET['pagina'] : 1;
					$inicio = ($quantidade * $pagina) - $quantidade;

					$data = mysqli_query($con, "select * from empresa order by id_emp;") or die(mysqli_error($con));
					
					echo "<table class='table table-striped' cellspacing='0' cellpading='0'>";
					echo "<thead><tr>";
					echo "<td><strong>Codigo</strong></td>";
					echo "<td><strong>CNPJ</strong></td>";  
					echo "<td><strong>Nome</strong></td>";			
					echo "<td><strong>Telefone</strong></td>";			
                    echo "<td class='d-none d-md-table-cell'><strong>E-mail</strong></td>";
					echo "<td class='actions d-flex justify-content-center'><strong>Ações</strong></td>"; 
					echo "</tr></thead><tbody>";
					while($info = mysqli_fetch_array($data)){ 
						echo "<tr>";
						echo "<td>".$info['id_emp']."</td>";
						echo "<td>".$info['cnpj_emp']."</td>";
						echo "<td>".$info['nome_emp']."</td>";
						echo "<td>".$info['telefone_emp']."</td>";
                        echo "<td class='d-none d-md-table-cell'>".$info['email_emp']."</td>";
						echo "<td class='actions btn-group-sm d-flex justify-content-center'>";
						echo "<a class='btn btn-success btn-xs' href=?page=view_emp&id_emp=".$info['id_emp']."> Visualizar </a>";
						echo "<a class='btn btn-warning btn-xs' href=?page=fedit_emp&id_emp=".$info['id_emp']."> Editar </a>"; 
						echo "<a href=?page=excluir_emp&id_emp=".$info['id_emp']." class='btn btn-danger btn-xs'> Excluir </a></td>";
					}
					echo "</tr></tbody></table>";
				?>				
			</div>
		</div><!--list-->

		<!-- PAGINAÇÃO -->
		<div id="bottom" class="row">
			<div class="col-md-12">
				<?php
					$sqlTotal 		= "select id_emp from empresa;";
					$qrTotal  		= mysqli_query($con, $sqlTotal) or die (mysqli_error($con));
					$numTotal 		= mysqli_num_rows($qrTotal);
					$totalpagina = (ceil($numTotal/$quantidade)<=0) ? 1 : ceil($numTotal/$quantidade);

					$exibir = 3;

					$anterior = (($pagina-1) <= 0) ? 1 : $pagina - 1;
					$posterior = (($pagina+1) >= $totalpagina) ? $totalpagina : $pagina+1;

					echo "<ul class='pagination'>";
					echo "<li class='page-item'><a class='page-link' href='?page=lista_emp&pagina=1'> Primeira</a></li> "; 
					echo "<li class='page-item'><a class='page-link' href=\"?page=lista_emp&pagina=$anterior\"> Anterior</a></li> ";

					echo "<li class='page-item'><a class='page-link' href='?page=lista_emp&pagina=".$pagina."'><strong>".$pagina."</strong></a></li> ";

					for($i = $pagina+1; $i < $pagina+$exibir; $i++){
						if($i <= $totalpagina)
						echo "<li class='page-item'><a class='page-link' href='?page=lista_emp&pagina=".$i."'> ".$i." </a></li> ";
					}

					echo "<li class='page-item'><a class='page-link' href=\"?page=lista_emp&pagina=$posterior\"> Pr&oacute;xima</a></li> ";
					echo "<li class='page-item'><a class='page-link' href=\"?page=lista_emp&pagina=$totalpagina\"> &Uacute;ltima</a></li></ul>";

				?>	
			</div>
		</div><!--bottom-->
</div><!--main-->

