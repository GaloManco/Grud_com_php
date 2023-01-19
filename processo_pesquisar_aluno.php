<?php

// conectar ao banco de dados
include_once 'confSQL.php';

//Verificar se o POST esta enviando dados.

if (!empty($_POST['primeiro_nome'])){
    
    try {

        

        //select primeiro_nome from alunos where primeiro_nome like '%naruto%'
        $stmt = $pdo->prepare("select * from alunos where primeiro_nome like :dados");


        //Dados para ser enviado para SQL.
        $dados = array(
            ':dados' => '%'.$_POST['primeiro_nome'].'%'
        );
        
        //Executando dados e pegando dados com fetchall
        $stmt->execute($dados);
        $resposta = $stmt->fetchAll();


        //Verifiando se nome existe
        if (empty($resposta)){


            //Redirecionado para página de pequisa com erro de não encontrado
            header('Location:pesquisar_aluno&msgErro=Aluno não cadastro...');

            
        }else{

            echo '<table class="container table table-hover">';
            echo '<thead>';
            echo '<tr>';
            
            echo '<th>--</th>';
            echo '<th>Foto</th>';
            echo '<th>Nome</th>';
            echo '<th>Adicionar Notas</th>';

            echo '</tr>';
            echo '</thead>';
            echo '<tbody>';
            
            
            
            foreach ($resposta as $n){
                
                echo '<tr>';
                echo "<td>";
                                                                
                echo '<td> <img src=img/'.$n["imagem"].' width="75" height="75"/> </td>';
                echo "<td>{$n['primeiro_nome']}</td>";
                
                //Opção para adicionar notas
                echo "<td><a href='editar&id={$n['id']}'class='btn btn-primary'>Editar</a></td>";
                
                
                echo "</td>";
                echo '</tr>';


                
            }

            echo '</tbody>';
            echo '</table>';

            
            
            
        }
            
    } catch (PDOException $e) {
        die($e->getMessage());
    }

}else{

    if (!isset($_POST) OR !empty($_POST) ) {

        header('Location:pesquisar_aluno&msgErro=Formulário vazio.');
    }
    else{
        header('Location:login&msgErro=Acesso negado...');
    }
}    


?>
            
            
            
            
            






        
       
            
            
        
        