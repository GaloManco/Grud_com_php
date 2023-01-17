<?php

include_once("confSQL.php");



$id = $_POST['id'];
$primeiro_nome = $_POST['primeiro_nome'];
$segundo_nome = $_POST['segundo_nome'];
$cidade = $_POST['cidade'];
$nascimento = $_POST['nascimento'];
$uf = $_POST['uf'];
$tel = $_POST['tel'];
$sexo = $_POST['sexo'];


$sql = "update alunos SET primeiro_nome='$primeiro_nome', segundo_nome='$segundo_nome', cidade='$cidade', nascimento='$nascimento', uf='$uf', tel='$tel', sexo='$sexo' where id='$id';";

$stmt = $pdo->prepare($sql);


$stmt->execute();
header('Location:lista_alunos');
// if($stmt->execute($dados)){
//     header('Location:teste_conecte_mysql.php');
// }
// else{
//     header('Location:teste_conecte_mysql.php?msgErro=Falha ao editar elemento...');

// }

?>


