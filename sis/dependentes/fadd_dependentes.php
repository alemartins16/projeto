<div id="main" class="container-fluid">
    <div id="top" class="row">
        <div class="row">
            <div class="col-md-10">
                <h2>Dependentes</h2>
            </div>

            <div class="col-md-2 text-end">
                <!-- Chama o Formulário para adicionar dependentes -->
                <a href="?page=fadd_dependentes" class="btn btn-primary me-2">Novo Dependente</a> 
            </div>
        </div>
    </div>

    <form action="?page=insere_dependentes" method="post">
        <!-- 1ª LINHA -->   
        <div class="row"> 
            <div class="form-group col-xs-12 col-sm-6 col-md-2">
                <label for="id">ID</label>
                <input type="text" class="form-control" name="id" readonly>
            </div>
            <div class="form-group col-xs-12 col-sm-6 col-md-5">
                <label for="nome">Nome</label>
                <input type="text" class="form-control" name="nome">
            </div>
            <div class="form-group col-xs-12 col-sm-6 col-md-5">
                <label for="certidao_nascimento">Certidão de Nascimento</label>
                <input type="text" class="form-control" name="certidao_nascimento">
            </div>
        </div>

        <!-- 2ª LINHA -->
        <div class="row">
            <div class="form-group col-xs-12 col-sm-6 col-md-5">
                <label for="carteira_vacinacao">Carteira de Vacinação</label>
                <input type="text" class="form-control" name="carteira_vacinacao">
            </div>
        </div>

        <hr />
        <div id="actions" class="row">
            <div class="col-md-12">
                <button type="submit" class="btn btn-primary">Salvar</button>
                <a href="?page=lista_dependentes" class="btn btn-danger">Cancelar</a>
            </div>
        </div>
    </form> 
</div>
