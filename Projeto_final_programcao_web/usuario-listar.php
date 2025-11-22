<h1>Listar Usuarios</h1>

<?php
$sql = "SELECT * FROM usuario";
$res = $conn->query($sql);

$qtd = $res->num_rows;

if($qtd > 0){
    print "<table class='table table-hover table-striped table-bordered'>";
    print "<tr>";
    print "<th>ID</th>";
    print "<th>Nome</th>";
    print "<th>E-mail</th>";
    print "<th>Telefone</th>";
    print "<th>Ações</th>";
    print "</tr>";

    while($row = $res->fetch_object()){
        print "<tr>";
        print "<td>".$row->id_usuario."</td>";
        print "<td>".$row->nome_usuario."</td>";
        print "<td>".$row->email_usuario."</td>";
        print "<td>".$row->telefone_usuario."</td>";

        print "<td>
            <button onclick=\"location.href='?page=usuario-editar&id_usuario=".$row->id_usuario."';\" 
                class='btn btn-success'>Editar</button>

            <button onclick=\"if(confirm('Tem certeza que deseja excluir?')) 
                {location.href='?page=usuario-salvar&acao=excluir&id_usuario=".$row->id_usuario."';}else{return false;}\" 
                class='btn btn-danger'>Excluir</button>
        </td>";
        
        print "</tr>";
    }

    print "</table>";
} else {
    print "<p class='alert alert-danger'>Não encontrou resultados!</p>";
}
?>
