<?php 
if(isset($_SESSION['user_nome'])){
    header('Location:login&msgErro=Acesso negado');
}

// echo '<pre>';
// var_dump($_POST);
// echo '</pre>';

include_once 'funcao.php';


$id_nome = $_POST['idnome'];
$id_materia = $_POST['idmateria'];
$bi1 = $_POST['1bi'];
$bi2 = $_POST['2bi'];
$bi3 = $_POST['3bi'];
$bi4 = $_POST['4bi'];
$faltas = $_POST['faltas'];
$data = $_POST['data'];

try {
    
    add_dados_alunos( $id_nome, $id_materia, $bi1, $bi2, $bi3, $bi4, $faltas, $data);

    header('Location:pesquisar_aluno&msgSucesso=Notas adicionadas...&idnome='. $id_nome . '&idmateria='.$id_materia); 
  
        

    } catch (PDOException $e) {
        die($e->getMessage());
        
    }




?>
        



    