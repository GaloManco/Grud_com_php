<?php


include_once 'confSQL.php';


function select_tabela_id($tabela, $id){
    $pdo = conectar_mysql();
 
    try {

        $stmt = $pdo->prepare("select * from {$tabela} where id={$id}");
        $stmt->execute();
        $result = $stmt->fetchAll();
        $pdo = null;
        return $result;
    } catch (PDOException $e) {
        // die($e->getMessage());
        echo '<h2>Erro ao conecatar ao banco de dados</h2>';
    }
    
}

function select_tabela($nome_tabela, $idaluno){

    $pdo = conectar_mysql();
 
    try {

        $stmt = $pdo->prepare("select * from {$nome_tabela} where idaluno={$idaluno}");
        $stmt->execute();
        $result = $stmt->fetchAll();
        $pdo = null;
        return $result;
    } catch (PDOException $e) {
        // die($e->getMessage());
        echo '<h2>Erro ao conecatar ao banco de dados</h2>';
    }
    

}

function add_dados_alunos($idnome, $idmat, $b1=0, $b2=0, $b3=0, $b4=0, $faltas, $data){
    $pdo = conectar_mysql();

    try {
        
        $sql = ("insert into dados_alunos values (default, $idnome, $idmat, $b1, $b2, $b3, $b4, $faltas, $data)");

        $stmt = $pdo->prepare($sql);
        if ($stmt->execute()){

            $pdo = null;
            echo 'elemento adicionado';
            
        }else{

            $pdo = null;
            echo 'Falha ao adicionar';
        }
        
                

    } catch (PDOException $e) {
        $pdo = null;
        die($e->getMessage());
    }

}


function select_dados_alunos_join($idaluno, $idmateria, $date){

    $pdo = conectar_mysql();

    $sql = ("select d.id, idaluno, idmateria, primeiro_nome, nome_materia, 1bi, 2bi, 3bi, 4bi, faltas, date  
    from dados_alunos d 
    join alunos a on a.id=d.idaluno 
    join materias m on m.id=d.idmateria 
    where idaluno=:idaluno and idmateria=:idmateria and date=:date");

    $stmt = $pdo->prepare($sql);

    $dados = array(
        ':idaluno' => $idaluno,
        ':idmateria' => $idmateria,
        ':date' => $date
    );

    $stmt->execute($dados);
    $result = $stmt->fetchAll();

    return $result;

}

function select_lista_notas_alunos($id_aluno){

    try {
        $pdo = conectar_mysql();
    
        $sql = ("select 
                a.primeiro_nome, a.segundo_nome, a.cidade, a.imagem,
                m.nome_materia, 
                d.1bi, d.2bi, d.3bi, d.4bi, d.faltas, d.date 
                from dados_alunos d 
                join alunos a on a.id=d.idaluno 
                join materias m on m.id=d.idmateria 
                where idaluno=:id_aluno");
    
        $stmt = $pdo->prepare($sql);
    
        $dados = array(
            ':id_aluno' => $id_aluno
        );
        $stmt->execute($dados);

        $result = $stmt->fetchAll();

        return $result;
        
    } catch (PDOException $e) {
        die($e->getMessage());
    }






}

function update_dados_alunos($id, $b1, $b2, $b3, $b4, $faltas){
    $pdo = conectar_mysql();
    try {
        $sql = ("update dados_alunos set 1bi=:b1, 2bi=:b2, 3bi=:b3, 4bi=:b4, faltas=:faltas where id=:id");
        $stmt = $pdo->prepare($sql);
    
    
        $dados = array(
            ':id' => $id,
            ':b1' => $b1,
            ':b2' => $b2,
            ':b3' => $b3,
            ':b4' => $b4,
            ':faltas' => $faltas
        );
    
        $stmt->execute($dados);

        $pdo = null;
        
    } catch (PDOException $e) {
        die($e->getMessage());
    }
}







?>







