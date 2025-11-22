<h1>Listar Livros</h1>

<?php
$sql = "SELECT * FROM livro";
$res = $conn->query($sql);
$qtd = $res->num_rows;

if($qtd > 0){
	print "<table class='table table-hover table-striped table-bordered'>";
	print "<tr>";
	print "<th>ID</th>";
	print "<th>Título</th>";
	print "<th>Ano</th>";
	print "<th>Gênero</th>";
	print "<th>Ações</th>";
	print "</tr>";

	while($row = $res->fetch_object()){
		print "<tr>";
		print "<td>".$row->id_livro."</td>";
		print "<td>".$row->titulo_livro."</td>";
		print "<td>".$row->ano_livro."</td>";
		print "<td>".$row->genero_livro."</td>";

		print "<td>
    <button onclick=\"location.href='?page=livro-editar&id_livro=".$row->id_livro."';\" 
        class='btn btn-success'>Editar</button>

    <button onclick=\"if(confirm('Tem certeza que deseja excluir?')){
        location.href='?page=livro-salvar&acao=excluir&id_livro=".$row->id_livro."';
    }\" 
        class='btn btn-danger'>Excluir</button>
</td>";
	}

	print "</table>";
} else {
	print "<p class='alert alert-danger'>Não encontrou resultados!</p>";
}
?>
