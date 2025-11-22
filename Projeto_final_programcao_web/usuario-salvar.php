<?php

switch ($_REQUEST['acao']) {
   
    case 'cadastrar':
        $nome = $_POST['nome_usuario'];
        $email = $_POST['email_usuario'];
        $telefone = $_POST['telefone_usuario'];
        $endereco = $_POST['endereco_usuario'];
        $dt_nasc = $_POST['dt_nasc_usuario'];

        $sql = "INSERT INTO usuario 
        (nome_usuario, email_usuario, telefone_usuario, endereco_usuario, dt_nasc_usuario)
        VALUES ('{$nome}', '{$email}', '{$telefone}', '{$endereco}', '{$dt_nasc}')";

        $res = $conn->query($sql);

        if($res == true){
            print "<script>alert('Usuário cadastrado com sucesso!');</script>";
            print "<script>location.href='?page=usuario-listar';</script>";
        } else {
            print "<script>alert('Erro ao cadastrar!');</script>";
            print "<script>location.href='?page=usuario-listar';</script>";
        }
        break;


    case 'editar':
        $nome = $_POST['nome_usuario'];
        $email = $_POST['email_usuario'];
        $telefone = $_POST['telefone_usuario'];
        $endereco = $_POST['endereco_usuario'];
        $dt_nasc = $_POST['dt_nasc_usuario'];

        $sql = "UPDATE usuario SET 
        nome_usuario='{$nome}',
        email_usuario='{$email}',
        telefone_usuario='{$telefone}',
        endereco_usuario='{$endereco}',
        dt_nasc_usuario='{$dt_nasc}'
        WHERE id_usuario=".$_REQUEST['id_usuario'];

        $res = $conn->query($sql);

        if($res == true){
            print "<script>alert('Usuário editado com sucesso!');</script>";
            print "<script>location.href='?page=usuario-listar';</script>";
        } else {
            print "<script>alert('Erro ao editar!');</script>";
            print "<script>location.href='?page=usuario-listar';</script>";
        }
        break;


    case 'excluir':
        $sql = "DELETE FROM usuario WHERE id_usuario=".$_REQUEST['id_usuario'];

        $res = $conn->query($sql);

        if($res == true){
            print "<script>alert('Usuário excluído com sucesso!');</script>";
            print "<script>location.href='?page=usuario-listar';</script>";
        } else {
            print "<script>alert('Erro ao excluir!');</script>";
            print "<script>location.href='?page=usuario-listar';</script>";
        }
        break;
}
