<?php
include_once 'confSQL.php';

$msg = false;

// var_dump($_POST);
// var_dump($_FILES);
// die();


if(isset($_FILES['imagem']) and !empty($_POST)){


    try {
    
        $extensao = strtolower(substr($_FILES['imagem']['name'], -4));
        $novo_nome = md5(time()) . $extensao;
        $diretorio_imagem = 'img/';
    
        //Lendo o arquivo na memória temporaria e enviando para pasta img.
        move_uploaded_file($_FILES['imagem']['tmp_name'], $diretorio_imagem.$novo_nome);
    
        $sql = "INSERT INTO alunos 
        (id, primeiro_nome, segundo_nome, cidade, nascimento, uf, tel, sexo, imagem )
        VALUES (DEFAULT, '{$_POST['nome']}', '{$_POST['sobreNome']}', '{$_POST['cidade']}', '{$_POST['data']}', '{$_POST['uf']}', '{$_POST['tel']}', '{$_POST['sexo']}', '$novo_nome' )";
    
        $stmt = $pdo->prepare($sql);
    
        if($stmt->execute()){
            header('Location: add_aluno&msgSucesso=Dados enviado com sucesso!');

        }
        else{
            header('Location: add_aluno&msgErro=Erro ao enviar dados');
        }


    } catch (PDOException $e) {
        die($e->getMessage());
        // header('Location: add_aluno&msgErro=Erro no envio POST ou Files...');

    }

}
else(
    header('Location: login&msgErro=Acesso negado!')
)   


?>