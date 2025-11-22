<?php

$acao = $_REQUEST['acao'] ?? '';

switch ($acao) {

    case 'cadastrar':
        $titulo = $_POST['titulo_livro'] ?? '';
        $ano    = $_POST['ano_livro'] ?? '';
        $genero = $_POST['genero_livro'] ?? '';

        $sql = "INSERT INTO livro 
                (titulo_livro, ano_livro, genero_livro)
                VALUES ('{$titulo}', '{$ano}', '{$genero}')";

        $res = $conn->query($sql);

        if($res == true){
            print "<script>alert('Livro cadastrado com sucesso!');</script>";
        } else {
            print "<script>alert('Erro ao cadastrar livro!');</script>";
        }

        print "<script>location.href='?page=livro-listar';</script>";
        break;

    case 'editar':
        $titulo = $_POST['titulo_livro'] ?? '';
        $ano    = $_POST['ano_livro'] ?? '';
        $genero = $_POST['genero_livro'] ?? '';
        $id     = $_REQUEST['id_livro'] ?? 0;

        $sql = "UPDATE livro SET
                titulo_livro='{$titulo}',
                ano_livro='{$ano}',
                genero_livro='{$genero}'
                WHERE id_livro={$id}";

        $res = $conn->query($sql);

        if($res == true){
            print "<script>alert('Livro editado com sucesso!');</script>";
        } else {
            print "<script>alert('Erro ao editar livro!');</script>";
        }

        print "<script>location.href='?page=livro-listar';</script>";
        break;

    case 'excluir':
        $id = $_REQUEST['id_livro'] ?? 0;

        $sql = "DELETE FROM livro WHERE id_livro={$id}";

        $res = $conn->query($sql);

        if($res == true){
            print "<script>alert('Livro excluído com sucesso!');</script>";
        } else {
            print "<script>alert('Erro ao excluir livro!');</script>";
        }

        print "<script>location.href='?page=livro-listar';</script>";
        break;

    default:
        print "<script>alert('Ação inválida!');</script>";
        print "<script>location.href='?page=livro-listar';</script>";
}
