<?php
// Importando a conexao com DB.
require_once('confSQL.php');


// Verificar de formulario está enviando via POST.
if (!empty($_POST)){
    // Teste para verificar se formulário esta enviando.
    // echo '<pre>';
    // var_dump($_POST);
    // echo '</pre>';
    try {
        // Preparar as informações
        // Montar SQL (mysql)
        $sql = "INSERT INTO cadastro_user
        (id, nome, email, senha)
        VALUES
        (:id, :nome, :email, :senha)";

        // Preparar SQL via (pdo).
        $stmt = $pdo->prepare($sql);
        
        // Enviar dados POST para o SQL.
        $dados = array(
            ':id' => 'default',
            ':nome' => $_POST['nome'],
            ':email' => $_POST['email'],
            ':senha' => md5($_POST['password'])
        );

        // Tentar executar o SQL (INSERT INTO)
        // Realizando inserção dos dados no SQL.
        if ($stmt->execute($dados)){
            header("Location:login&msgSucesso=Cadastro Realizado com sucesso!");
        }
        
        // Caso tenha dada um erro ao executar os dados sql  vai ativar esse erro.
    } catch (PDOException $e) {

        // die($e->getMessage());
        header("Location:cadastro_login&msgErro=Email já cadastrado...");
    }

}
else{

    // Caso o usuario tente entra nesse página pelo navegodor ele serar direcinado para index.
    header('Location:index.php?msgErro=Erro de acesso.');
}



?>