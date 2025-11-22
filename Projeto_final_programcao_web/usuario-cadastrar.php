<h1>Cadastrar Usuario</h1>

<form action="?page=usuario-salvar" method="POST">
    <input type="hidden" name="acao" value="cadastrar">

    <div class="mb-3">
        <label>Nome
            <input type="text" name="nome_usuario" class="form-control" required>
        </label>
    </div>

    <div class="mb-3">
        <label>E-mail
            <input type="email" name="email_usuario" class="form-control">
        </label>
    </div>

    <div class="mb-3">
        <label>Telefone
            <input type="tel" name="telefone_usuario" class="form-control">
        </label>
    </div>

    <div class="mb-3">
        <label>Endereço
            <input type="text" name="endereco_usuario" class="form-control">
        </label>
    </div>

    <div class="mb-3">
        <label>Data de Nascimento
            <input type="date" name="dt_nasc_usuario" class="form-control">
        </label>
    </div>

    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</form>
