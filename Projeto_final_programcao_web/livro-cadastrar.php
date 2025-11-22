<h1>Cadastrar Livros</h1>

<form action="?page=livro-salvar" method="POST">
    <input type="hidden" name="acao" value="cadastrar">

    <div class="mb-3">
        <label>Título do Livro
            <input type="text" name="titulo_livro" class="form-control" required>
        </label>
    </div>

    <div class="mb-3">
        <label>Ano
            <input type="number" name="ano_livro" class="form-control" min="1500" max="2099">
        </label>
    </div>

    <div class="mb-3">
        <label>Gênero
            <input type="text" name="genero_livro" class="form-control">
        </label>
    </div>

    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</form>
