<div id="main" class="container-fluid">
 	<div id="top" class="row">
		<div class="col-md-11">
			<h2>Empresas</h2>
		</div>

		<div class="col-md-1">
			<!-- Chama o Formulário para adicionar alunos -->
			<a href="?page=foradd_emp" class="btn btn-primary pull-right h2">Nova Empresa</a> 
		</div>
	</div>
    <form action="?page=inserir_emp" method="post">
		<!-- 1ª LINHA -->	
		<div class="row"> 
			<div class="form-group col-xs-12 col-sm-6 col-md-2">
				<label for="id_emp">Código</label>
				<input type="text" class="form-control" name="id_emp" readonly>
			</div>
			<div class="form-group col-xs-12 col-sm-6 col-md-5">
				<label for="cnpj_emp">CNPJ</label>
				<input type="text" class="form-control" name="cnpj_emp">
			</div>
            <div class="form-group col-xs-12 col-sm-6 col-md-5">
				<label for="nome_emp">Nome Empresarial</label>
				<input type="text" class="form-control" name="nome_emp">
			</div>
        </div>   
        <div class="row"> 
			<div class="form-group col-xs-12 col-sm-6 col-md-6">
				<label for="telefone_emp">Telefone</label>
				<input type="text" class="form-control" name="telefone_emp">
			</div>            
            <div class="form-group col-xs-12 col-sm-6 col-md-6">
				<label for="email_emp">E-mail</label>
				<input type="email" class="form-control" name="email_emp">
			</div>
			<div class="form-group col-xs-12 col-sm-6 col-md-6">
				<label for="nome_resp_emp">Nome Responsável</label>
				<input type="text" class="form-control" name="nome_resp_emp">
			</div> 
			<div class="form-group col-xs-12 col-sm-6 col-md-6">
				<label for="tel_resp_emp">Telefone Responsável</label>
				<input type="text" class="form-control" name="tel_resp_emp">
			</div>     
		</div>         
		 
        
        <div class="row"> 
			<div class="form-group col-xs-12 col-sm-6 col-md-6">
				<label for="lograd_end">Logradouro</label>
				<input type="text" class="form-control" name="lograd_end">
			</div>
           
			<div class="form-group col-xs-12 col-sm-6 col-md-6">
				<label for="num_end">Número</label>
				<input type="text" class="form-control" name="num_end">
			</div>

            <div class="form-group col-xs-12 col-sm-6 col-md-6">
				<label for="compl_end">Complemento</label>
				<input type="text" class="form-control" name="compl_end">
			</div>

            <div class="form-group col-xs-12 col-sm-6 col-md-6">
				<label for="bairro_end">Bairro</label>
				<input type="text" class="form-control" name="bairro_end">
			</div>

            <div class="form-group col-xs-12 col-sm-6 col-md-6">
				<label for="cidade_end">Cidade</label>
				<input type="text" class="form-control" name="cidade_end">
			</div>

            <div class="form-group col-xs-12 col-sm-6 col-md-6">
				<label for="cep_end">CEP</label>
				<input type="text" class="form-control" name="cep_end">
			</div>
        </div>    
        
        <hr />
		<div id="actions" class="row">
			<div class="col-md-12">
				<button type="submit" class="btn btn-primary">Salvar</button>
				<a href="?page=lista_emp" class="btn btn-danger">Cancelar</a>
			</div>
		</div>
	</form> 
</div>
           
            
           
            
           
    