<div id="main" class="container-fluid">
 	<div id="top" class="row">
		<div class="col-md-11">
			<h2>Ficha Cadastral</h2>
		</div>

		<div class="col-md-1">
			<!-- Chama o Formulário para adicionar alunos -->
			<a href="?page=foradd" class="btn btn-primary pull-right h2">Nova Ficha</a> 
		</div>
	</div>
    <form enctype="multipart/form-data" action="move.php" method="POST">
		<div class="row"> 
			<div class="form-group col-xs-12 col-sm-6 col-md-2">
				<label for="id_ficha">ID</label>
				<input type="text" class="form-control" name="id_ficha" readonly>
			</div>

			<div class="form-group col-xs-12 col-sm-6 col-md-8">    	
    		 <input type="hidden" name="cpf" value="30000" />Envie seu CPF: <input name="cpf" type="file" /><br>
			</div>

			<div class="form-group col-xs-12 col-sm-6 col-md-8">    		
    		 <input type="hidden" name="rg" value="30000" />Envie seu RG: <input name="rg" type="file" /><br>
			</div>

			<div class="form-group col-xs-12 col-sm-6 col-md-8">    		
    		 <input type="hidden" name="cnh" value="30000" />Envie sua CNH: <input name="cnh" type="file" /><br>
			</div>

			<div class="form-group col-xs-12 col-sm-6 col-md-8">    		
    		 <input type="hidden" name="ctps" value="30000" />Envie sua CTPS: <input name="ctps" type="file" /><br>
			</div>

			<div class="form-group col-xs-12 col-sm-6 col-md-8">    		
    		 <input type="hidden" name="compresid" value="30000" />Envie seu comprovante de residência: <input name="compresid" type="file" /><br>
			</div>

			<div class="form-group col-xs-12 col-sm-6 col-md-8">    		
    		 <input type="hidden" name="compescol" value="30000" />Envie seu comprovante de escolaridade: <input name="compescol" type="file" /><br>
			</div>

			<div class="form-group col-xs-12 col-sm-6 col-md-8">    		
    		 <input type="hidden" name="certreserv" value="30000" />Envie seu comprovante de reservista: <input name="certreserv" type="file" /><br>
			</div>
    	</div>
			<hr />
			<div id="actions" class="row">
			<div class="col-md-12">
				<button type="submit" class="btn btn-primary">Salvar</button>
				<a href="?page=lista_ficha" class="btn btn-danger">Cancelar</a>
			</div>
		</div>
		
		
	</form>
           
</div>
           
            
           
            
           
    