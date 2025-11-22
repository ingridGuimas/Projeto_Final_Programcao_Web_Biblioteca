<h1>Registrar Reserva</h1>

<form action="?page=reserva-salvar" method="POST">
    <input type="hidden" name="acao" value="cadastrar">

    <div class="mb-3">
        <label>Usuário
            <select name="usuario_id" class="form-control" required>
                <option value="">-- Selecione --</option>
                <?php
                    $sql_usuario = "SELECT * FROM usuario ORDER BY nome_usuario";
                    $res_usuario = $conn->query($sql_usuario);

                    while($u = $res_usuario->fetch_object()){
                        print "<option value='".$u->id_usuario."'>".$u->nome_usuario."</option>";
                    }
                ?>
            </select>
        </label>
    </div>

    <div class="mb-3">
        <label>Livro
            <select name="livro_id" class="form-control" required>
                <option value="">-- Selecione --</option>
                <?php
                    $sql_livro = "SELECT * FROM livro ORDER BY titulo_livro";
                    $res_livro = $conn->query($sql_livro);

                    while($l = $res_livro->fetch_object()){
                        print "<option value='".$l->id_livro."'>".$l->titulo_livro."</option>";
                    }
                ?>
            </select>
        </label>
    </div>

    <div class="mb-3">
        <label>Data de Reserva
            <input type="date" name="data_reserva" class="form-control" required>
        </label>
    </div>

    <div class="mb-3">
        <label>Data de Devolução
            <input type="date" name="data_devolucao" class="form-control">
        </label>
    </div>

    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Registrar</button>
    </div>
</form>
