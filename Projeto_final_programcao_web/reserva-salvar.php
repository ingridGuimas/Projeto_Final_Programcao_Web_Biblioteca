<?php

$acao = $_REQUEST['acao'] ?? '';

switch ($acao) {

    case 'cadastrar':
        $id_usuario = $_POST['usuario_id'];
        $id_livro   = $_POST['livro_id'];
        $data_res   = $_POST['data_reserva'];
        $data_dev   = $_POST['data_devolucao'] ?? null;

        $sql = "INSERT INTO reserva 
                (usuario_id, livro_id, data_reserva, data_devolucao)
                VALUES ('{$id_usuario}', '{$id_livro}', '{$data_res}', '{$data_dev}')";

        $res = $conn->query($sql);

        if($res == true){
            print "<script>alert('Reserva cadastrada com sucesso!');</script>";
        } else {
            print "<script>alert('Erro ao cadastrar reserva!');</script>";
        }

        print "<script>location.href='?page=reserva-listar';</script>";
        break;

   
    case 'editar':
        $id_usuario = $_POST['usuario_id'];
        $id_livro   = $_POST['livro_id'];
        $data_res   = $_POST['data_reserva'];
        $data_dev   = $_POST['data_devolucao'] ?? null;

        $sql = "UPDATE reserva SET
                    usuario_id='{$id_usuario}',
                    livro_id='{$id_livro}',
                    data_reserva='{$data_res}',
                    data_devolucao='{$data_dev}'
                WHERE id_reserva=".$_REQUEST['id_reserva'];

        $res = $conn->query($sql);

        if($res == true){
            print "<script>alert('Reserva editada com sucesso!');</script>";
        } else {
            print "<script>alert('Erro ao editar reserva!');</script>";
        }

        print "<script>location.href='?page=reserva-listar';</script>";
        break;

    case 'excluir':

        $sql = "DELETE FROM reserva WHERE id_reserva=".$_REQUEST['id_reserva'];

        $res = $conn->query($sql);

        if($res == true){
            print "<script>alert('Reserva excluída com sucesso!');</script>";
        } else {
            print "<script>alert('Erro ao excluir reserva!');</script>";
        }

        print "<script>location.href='?page=reserva-listar';</script>";
        break;
}
?>
