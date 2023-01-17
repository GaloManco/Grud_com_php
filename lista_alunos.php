
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






<div class=" container border shadow rounded-3 text-center mt-5">

    <?php
require_once 'confSQL.php';

try {
    
    // Preparar o SQL com Select * from
    $sql = "Select * from alunos";
    $stmt = $pdo->query($sql);
    $resutado = $stmt->fetchAll();
    
    // var_dump($resutado);
    // die();
    
    
    if (!empty($resutado)){
        
        header('Content-type: charset=utf8');
        //Criar tabela títuto
        echo '<table class="container table table-hover">';
        echo '<thead>';
        echo '<tr>';
        echo '<th>Seleção</th>';
        echo '<th>Imagem</th>';
        echo '<th>Nome</th>';
        echo '<th>Sobre nome</th>';
        echo '<th>Cidade</th>';
        echo '<th>Uf</th>';
        echo '<th>Data nascimento</th>';
        echo '<th>Telefone</th>';
        echo '<th>sexo</th>';
        echo '<th>Editar</th>';
        echo '<th>Delete</th>';
        echo '</tr>';
        echo '</thead>';
        echo '<tbody>';
        
        
        //Crear tabela com row usando foreach
        foreach ($resutado as $user){
            echo '<tr>';
            echo "<td>";
            //Opção para selecionar
            echo "<form action='processo_delete.php' method='POST'>";
            echo '<input class="form-check-input " type="checkbox" name="id" value='. $user['id'].'></td>';
            
            echo '<td> <img src=img/'.$user["imagem"].' width="75" height="75"/> </td>';
            echo "<td>{$user['primeiro_nome']}</td>";
            echo "<td>{$user['segundo_nome']}</td>";
            echo "<td>{$user['cidade']}</td>";
            echo "<td>{$user['uf']}</td>";
            echo "<td>{$user['nascimento']}</td>";
            echo "<td>{$user['tel']}</td>";
            echo "<td>{$user['sexo']}</td>";
            
            //Opção para editar e deletar e adicionar notas
            echo "<td><a href='editar&id={$user['id']}'class='btn btn-primary' >Editar</a></td>";
            echo '<td><button type="sumbit" class="btn btn-danger fixed-botton">Delete</button>';
            echo '</form></td>';
            echo "</td>";
            echo '</tr>';
        }
        
        echo '</tbody>';
        echo '</table>';
        
        
        
        
        
    }
    else{
        header('Location:lista_alunos&msgErro=Falha no scritp SQL...');
        
        
    }
} catch (PDOException $e) {
    // die($e->getMessage());
    header('Location: lista_alunos&msgErro=Falha na execução...');
}




?>
</div>


    