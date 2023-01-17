



<div class="container  shadow border p-5 col-4">

    <?php
include_once("confSQL.php");


//Verifacando entrada de dados get
if (!empty($_GET['id'])){

    //Tratamento de erro.
    try {
        
        //Crear comando SQL
        $stmt = $pdo->prepare("SELECT * FROM alunos WHERE id = ". $_GET['id'] );
        
        //Executar comando.
        $stmt->execute();
        
        //Pegando dados SQL
        $result =$stmt->fetchAll();
        
        
        
        
        //Crear formulario para editar elementos
        foreach ( $result as $user) {
            echo '<div class="container col-12 " >';
            echo '<div class="bg-light border shadow border" >';

            echo '<div class="text-center mt-3">';
            echo '<h3 class="container">Editar Aluno</h3>';
            echo '</div>';
            echo '<form method="POST" class="container" action="processo_editar.php">';
            
            echo '<div class="mb-3">';
            echo '<label for="nome" class="form-label">Nome:</label>';
            echo '<input type="text" name="primeiro_nome" class="form-control" value="'.$user["primeiro_nome"].'" >';
            echo '</div>';
            
            echo '<div class="mb-3">';
            echo '<label for="nome" class="form-label">Sobre nome:</label>';
            echo '<input type="text" name="segundo_nome" class="form-control" value="'.$user["segundo_nome"].'" >';
            echo '</div>';
            
            echo '<div class="mb-3">';
            echo '<label for="nome" class="form-label">Cidade:</label>';
            echo '<input type="text" name="cidade" class="form-control" value="'.$user["cidade"].'" >';
            echo '</div>';
            
            echo '<div class="mb-3">';
            echo '<label for="nome" class="form-label">Data de Nascimento:</label>';
            echo '<input type="text" name="nascimento" class="form-control" value="'.$user["nascimento"].'" >';
            echo '</div>';

            echo '<div class="mb-3">';
            echo '<label for="nome" class="form-label">Estado:</label>';
            echo '<input type="text" name="uf" class="form-control" value="'.$user["uf"].'" >';
            echo '</div>';
            
            echo '<div class="mb-3">';
            echo '<label for="nome" class="form-label">Telefone:</label>';
            echo '<input type="text" name="tel" class="form-control" value="'.$user["tel"].'" >';
            echo '</div>';
            
            echo '<div class="mb-3">';
            echo '<label for="nome" class="form-label">Sexo:</label>';
            echo '<input type="text" name="sexo" class="form-control" value="'.$user["sexo"].'" >';
            echo '</div>';

            echo '<div class="text-center">';
            echo '<input type="hidden" name="id" value="'.$user["id"].'">';
            echo '<button type="submit" class="btn btn-primary col-6 mb-3 p-2">Enviar</button>';
            echo '</form>';
            echo '</div>';
            
            echo '</div>';
            echo '</div>';
            
            
        }
    } catch (PDOException $e) {
        die($e->getMessage());
        
    }
    
    
    
}
?>

</div>



