<h1>Editar Usuário</h1>

<?php

$sql = "SELECT * FROM usuario WHERE id_usuario=".$_REQUEST['id_usuario'];
$res = $conn->query($sql);
$row = $res->fetch_object();
?>

<form action="?page=salvar-usuario" method="POST">
    <input type="hidden" name="acao" value="editar">
    <input type="hidden" name="id_usuario" value="<?php print $row->id_usuario; ?>">

    <div class="mb-3">
        <label>Nome
            <input type="text" name="nome_usuario" value="<?php print $row->nome_usuario; ?>" class="form-control" required>
        </label>
    </div>

    <div class="mb-3">
        <label>E-mail
            <input type="email" name="email_usuario" value="<?php print $row->email_usuario; ?>" class="form-control">
        </label>
    </div>

    <div class="mb-3">
        <label>Telefone
            <input type="tel" name="telefone_usuario" value="<?php print $row->telefone_usuario; ?>" class="form-control">
        </label>
    </div>

    <div class="mb-3">
        <label>Endereço
            <input type="text" name="endereco_usuario" value="<?php print $row->endereco_usuario; ?>" class="form-control">
        </label>
    </div>

    <div class="mb-3">
        <label>Data de Nascimento
            <input type="date" name="dt_nasc_usuario" value="<?php print $row->dt_nasc_usuario; ?>" class="form-control">
        </label>
    </div>

    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Salvar Alterações</button>
    </div>
</form>
