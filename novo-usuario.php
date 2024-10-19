<h1>NOVO USUÁRIO</h1>
<form action="?page=salvar" method="POST">
    <input type="hidden" name="acao" value="cadastrar">
    <div class="mb-3">
        <label class="form-label" for="">Nome: </label>
        <input type="text" name="nome" class="form-control">
    </div>

    <div class="mb-3">
        <label for="" class="form-label">Email: </label>  
        <input type="text" name="email" class="form-control">
    </div>

    <div class="mb-3">
        <label for="" class="form-label">Senha:</label>
        <input type="password" name="senha" class="form-control">
    </div>

    <div class="mb-3">
        <label for="" class="form-label">Data de nascimento: </label>
        <input type="date" name="data_nasc" class="form-control">
    </div>

    <button type="submit" class="btn btn-primary">Enviar</button>
</form>