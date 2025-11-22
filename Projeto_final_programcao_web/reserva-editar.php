<h1>Editar Reserva</h1>

<?php
$sql = "SELECT * FROM reserva WHERE id_reserva=".$_REQUEST['id_reserva'];
$res = $conn->query($sql);
$row = $res->fetch_object();
?>

<form action="?page=reserva-salvar" method="POST">
    <input type="hidden" name="acao" value="editar">
    <input type="hidden" name="id_reserva" value="<?php print $row->id_reserva; ?>">

    <div class="mb-3">
        <label>Usuário
            <select name="usuario_id" class="form-control" required>
                <?php
                    $sql_usuario = "SELECT * FROM usuario ORDER BY nome_usuario";
                    $res_usuario = $conn->query($sql_usuario);

                    while($u = $res_usuario->fetch_object()){
                        $selected = ($u->id_usuario == $row->usuario_id) ? "selected" : "";
                        print "<option value='".$u->id_usuario."' $selected>".$u->nome_usuario."</option>";
                    }
                ?>
            </select>
        </label>
    </div>

    <div class="mb-3">
        <label>Livro
            <select name="livro_id" class="form-control" required>
                <?php
                    $sql_livro = "SELECT * FROM livro ORDER BY titulo_livro";
                    $res_livro = $conn->query($sql_livro);

                    while($l = $res_livro->fetch_object()){
                        $selected = ($l->id_livro == $row->livro_id) ? "selected" : "";
                        print "<option value='".$l->id_livro."' $selected>".$l->titulo_livro."</option>";
                    }
                ?>
            </select>
        </label>
    </div>

    <div class="mb-3">
        <label>Data Reserva
            <input type="date" name="data_reserva" class="form-control" 
                   value="<?php print $row->data_reserva; ?>" required>
        </label>
    </div>

    <div class="mb-3">
        <label>Data Devolução
            <input type="date" name="data_devolucao" class="form-control" 
                   value="<?php print $row->data_devolucao; ?>">
        </label>
    </div>

    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Salvar Alterações</button>
    </div>
</form>
