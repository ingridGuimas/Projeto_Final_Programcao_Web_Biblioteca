<h1>Editar Livro</h1>

<?php
$sql = "SELECT * FROM livro WHERE id_livro=".$_REQUEST['id_livro'];
$res = $conn->query($sql);
$row = $res->fetch_object();
?>

<form action="?page=livro-salvar" method="POST">
    <input type="hidden" name="acao" value="editar">
    <input type="hidden" name="id_livro" value="<?php print $row->id_livro; ?>">

    <div class="mb-3">
        <label>Título
            <input type="text" name="titulo_livro" value="<?php print $row->titulo_livro; ?>" class="form-control" required>
        </label>
    </div>

    <div class="mb-3">
        <label>Ano
            <input type="number" name="ano_livro" value="<?php print $row->ano_livro; ?>" class="form-control" min="1500" max="2099">
        </label>
    </div>

    <div class="mb-3">
        <label>Gênero
            <input type="text" name="genero_livro" value="<?php print $row->genero_livro; ?>" class="form-control">
        </label>
    </div>

    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Salvar Alterações</button>
    </div>
</form>
