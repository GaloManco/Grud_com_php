<?php
// Importando a conexao com DB.
require_once('confSQL.php');


// Verificar se está chegando dados do POST
if (!empty($_POST)){
    
    
    // Iniciar SESSÃO (session_start).
    session_start();


    try {
        // Montar SQL
        $sql = "SELECT nome, email FROM cadastro_user
        WHERE email=:email AND senha=:senha";


        // Preparar SQL $stmt = $pdo->reparar
        $stmt = $pdo->prepare($sql);


        // Organizar os dados na array para SQL
        $dados = array(
            ":email" => $_POST['email'],
            ":senha" => md5($_POST['password'])
        );


        // executar SQL
        $stmt->execute($dados);


        // Recebendo dados vindo do SQL fetchall:
        $resultado = $stmt->fetchAll();
        // Recebendo apenas um array atraves do [0]
        // Com esse $resultado você pode pega qualquer dados enviado pelo SQL
        // Exemplo: $resultado['nome'] assim você pode fazer qualquer logica de programação.
        
        
        //Criando condições
        if ($stmt->rowCount()==1){
            
            
            $resultado = $resultado[0];
            
            //Criando Session
            $_SESSION['user_nome'] = $resultado['nome'];
            $_SESSION['user_email'] = $resultado['email'];
            


            //Redirecionar para página index
            header('Location:home');

        }
        else{
            //Em caso falha ao fazer o login dispara esse erro.
            //Session destroi...
            session_destroy();
            header('Location:login&msgErro=Email ou senha invalido...');
        }

        // echo "<pre>";
        // print_r($resultado['email']);
        // echo "</pre>";


    } catch (PDOException $e) {
        // die($e->getMessage());
        header('Location:login&msgErro=Erro de conexão...');

    }



}
else{
    header('Location:login&msgErro=Acesso negado...');
    
}



?>