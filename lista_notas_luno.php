<!-- Div Erro para caso o cadastro não der certo -->
<div class="container mt-5">
    <?php if(!empty($_GET['msgErro'])) { ?>
            <div class="alert alert-warning" role="alert">
                <?php echo $_GET["msgErro"];?>
            </div>
    <?php };?>
</div>
<!-- Div para Messagem de sucesso ao adicionar elementos no SQL -->
<div class="container mt-5">
    <?php if(!empty($_GET['msgSucesso'])) { ?>
            <div class="alert alert-success" role="alert">
                <?php echo $_GET["msgSucesso"];?>
            </div>
    <?php };?>
</div> 






<div class=" container border shadow rounded-3 text-center mt-5 mb-5 bg-light">

<?php


require_once 'funcao.php';

try {
    
    // Preparar o SQL com Select * from
    $resultado = select_lista_notas_alunos($_GET['id_aluno']);


    
    // var_dump($resultado);

    // die();
    
    
    if (!empty($resultado)){
        
        // header('Content-type: charset=utf8');
        //Criar tabela títuto
        echo '<table class="container table table-hover">';
        echo '<thead>';
        echo '<tr>';
        // echo '<th>Seleção</th>';
        echo '<th>Imagem</th>';
        echo '<th>Nome</th>';
        echo '<th>Sobre nome</th>';
        echo '<th>Cidade</th>';
        echo '<th>Matéria</th>';
        echo '<th>1 Bimestre</th>';
        echo '<th>2 Bimestre</th>';
        echo '<th>3 Bimestre</th>';
        echo '<th>4 Bimestre</th>';
        echo '<th>Faltas</th>';
        echo '<th>Ano letivo</th>';
        // echo '<th>Editar</th>';
        // echo '<th>Delete</th>';
        echo '</tr>';
        echo '</thead>';
        echo '<tbody>';
        
        
        //Crear tabela com row usando foreach
        foreach ($resultado as $user){

            // echo $user['faltas'];
            // die();



            echo '<tr>';
            // echo "<td>";
            //Opção para selecionar
            // echo "<form action='processo_delete.php' method='POST'>";
            // echo '<input class="form-check-input " type="checkbox" name="id" value='. $user['id'].'></td>';
            
            echo '<td> <img src=img/'.$user["imagem"].' width="75" height="75"/> </td>';
            echo "<td>{$user['primeiro_nome']}</td>";
            echo "<td>{$user['segundo_nome']}</td>";
            echo "<td>{$user['cidade']}</td>";
            echo "<td>{$user['nome_materia']}</td>";
            echo "<td>{$user['1bi']}</td>";
            echo "<td>{$user['2bi']}</td>";
            echo "<td>{$user['3bi']}</td>";
            echo "<td>{$user['4bi']}</td>";
            echo "<td>{$user['faltas']}</td>";
            echo "<td>{$user['date']}</td>";
            
            //Opção para editar e deletar e adicionar notas
            // echo "<td><a href='editar&id={$user['id']}'class='btn btn-primary' >Editar</a></td>";
            // echo '<td><button type="sumbit" class="btn btn-danger fixed-botton">Delete</button>';
            echo '</form></td>';
            echo "</td>";
            echo '</tr>';
        }
        
        echo '</tbody>';
        echo '</table>';
        
        
        
        
        
    }
    else{
        header('Location:home&msgErro=Notas não cadastradas...');
        
        
    }
} catch (PDOException $e) {
    // die($e->getMessage());
    header('Location: lista_alunos&msgErro=Falha na execução...');
}




?>
</div>