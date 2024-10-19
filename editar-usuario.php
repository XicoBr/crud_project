<h1>EDITAR USUÁRIO</h1>

<?php 
    $sql = "SELECT * FROM usuarios WHERE id=" . $_REQUEST["id"];
    $res = $conn->query($sql);
    $row = $res->fetch_object();
?>

<form action="?page=salvar" method="POST">
    <input type="hidden" name="acao" value="editar">
    <input type="hidden" name="id" value="<?php print $row->id; ?>">
    
    <div class="mb-3">
        <label class="form-label" for="">Nome: </label>
        <input value="<?php print $row->nome; ?>"  type="text" name="nome" class="form-control">
    </div>

    <div class="mb-3">
        <label for="" class="form-label">Email: </label>  
        <input value="<?php print $row->email; ?>"  type="text" name="email" class="form-control">
    </div>

    <div class="mb-3">
        <label for="" class="form-label">Senha:</label>
        <input type="password" name="senha" class="form-control" required>
    </div>

    <div class="mb-3">
        <label for="" class="form-label">Data de nascimento: </label>
        <input value="<?php print $row->data_nasc; ?>" type="date" name="data_nasc" class="form-control">
    </div>

    <button type="submit" class="btn btn-primary">Enviar</button>
</form>