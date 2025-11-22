<h1>Listar Reservas</h1>

<?php
$sql = "SELECT r.*, u.nome_usuario, l.titulo_livro
        FROM reserva r
        INNER JOIN usuario u ON u.id_usuario = r.usuario_id
        INNER JOIN livro l ON l.id_livro = r.livro_id
        ORDER BY r.data_reserva DESC";

$res = $conn->query($sql);
$qtd = $res->num_rows;

if($qtd > 0){
    print "<table class='table table-hover table-striped table-bordered'>";
    print "<tr>";
    print "<th>ID</th>";
    print "<th>Usuário</th>";
    print "<th>Livro</th>";
    print "<th>Data Empréstimo</th>";
    print "<th>Data Devolução</th>";
    print "<th>Ações</th>";
    print "</tr>";

    while($row = $res->fetch_object()){
        print "<tr>";
        print "<td>".$row->id_reserva."</td>";
        print "<td>".$row->nome_usuario."</td>";
        print "<td>".$row->titulo_livro."</td>";
        print "<td>".$row->data_reserva."</td>";
        print "<td>".$row->data_devolucao."</td>";

        print "<td>
            <button onclick=\"location.href='?page=reserva-editar&id_reserva=".$row->id_reserva."';\" 
                class='btn btn-success'>Editar</button>

            <button onclick=\"if(confirm('Tem certeza que deseja excluir?')) 
                {location.href='?page=reserva-salvar&acao=excluir&id_reserva=".$row->id_reserva."';}else{return false;}\" 
                class='btn btn-danger'>Excluir</button>
        </td>";

        print "</tr>";
    }

    print "</table>";
} else {
    print "<p class='alert alert-danger'>Nenhuma Reserva encontrada!</p>";
}
?>
