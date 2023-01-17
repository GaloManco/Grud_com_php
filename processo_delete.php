<?php
include_once("confSQL.php");

// var_dump($_POST);
// die();

//Verificação de entrada
if (!empty($_POST['id']) OR empty($_POST)) {
    
    
    // Se usuario enviar delete sem selecionar id redirecionar para mesma página.
    if(empty($_POST)){

        header("Location:lista_alunos");
        die();
    }


    try {

        //Receber dados do POST
        $id = $_POST['id'];



        //Criando SQL comando para achar os ids dados_alunos.
        $sql = "SELECT * FROM dados_alunos";

        // Preparar comando SQL
        $stmt = $pdo->query("SELECT * FROM dados_alunos");
        $stmt->execute();
        $result = $stmt->fetchAll();


        foreach ($result as $r) {
            // echo $r['idaluno'] .'<br>'
            if ($r['idaluno'] == "$id") {
                $stmt = $pdo->prepare("DELETE FROM dados_alunos WHERE id= ?");
                $stmt->execute([$r['id']]);

            }

        }

    } catch (PDOException $e) {
        // die($e->getMessage());
        header("Location:lista_alunos&msgErro=Erro ao deletar dados... $id");

    }

    try {

        //Comando SQL
        $stmt = $pdo->prepare("DELETE FROM alunos WHERE id = ?");
        $stmt->execute([$id]);

        //Direcionar para lista
        header("Location:lista_alunos&msgSucesso=Elemento deletado!");


    } catch (PDOException $e) {
        // die($e->getMessage());
        header("Location:lista_alunos&msgErro=Erro ao deletar dados... $id");
    }

}


if (!isset($_POST)){

    header('Location:login&msgErro=Acesso negado...');
}


?>











