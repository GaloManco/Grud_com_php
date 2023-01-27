<?php
session_start();

if (!isset($_SESSION['user_nome'])){
    
    header('Location:login&msgErro=Acesso negado...');
}

include_once 'funcao.php';

try {

    // var_dump($_POST['faltas']);
    $id = $_POST['id'];
    $b1 = $_POST['1bi'];
    $b2 = $_POST['2bi'];
    $b3 = $_POST['3bi'];
    $b4 = $_POST['4bi'];
    $faltas = $_POST['faltas'];
    // die();

    update_dados_alunos($id, $b1, $b2, $b3, $b4, $faltas);

    header('Location:pesquisar_aluno&msgSucesso=Notas atualizadas...');
    die();
    //code...
} catch (PDOException $e) {

    die($e->getMessage());
}







?>