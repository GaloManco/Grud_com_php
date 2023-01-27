      
<div class="container row mt-3 m-auto">
    <div class="col-4 m-auto">
        <!-- Script de alerta -->
        <?php if(!empty($_GET['msgErro'])) { ?>
        <div class="alert alert-warning " role="alert">
            <?php echo $_GET["msgErro"];?>
        </div><?php };?>
    </div>
</div>
     
        

<!-- Div para Messagem de sucesso ao adicionar elementos no SQL -->
<div class="container row mt-3 m-auto">
    <div class="col-4 m-auto">
        <!-- Script de alerta -->
        <?php if(!empty($_GET['msgSucesso'])) { ?>
        <div class="alert alert-success" role="alert">
            <?php echo $_GET["msgSucesso"];?>
        </div><?php };?>
    </div> 
</div>



<!-- Tabela com resultados -->
<?php


// conectar ao banco de dados
include_once 'confSQL.php';


//Verificar se o POST esta enviando dados.
// var_dump($_SESSION);
if (isset($_SESSION['user_nome'])){
    
    echo '<h1 class="text-center">Adicionar Notas</h1>';
    
    // <!-- Fomulário de pequisa -->
    echo '<div class="container">';
        echo '<form action="" method="post" class="col-sm-10 col-md-8 col-lg-4 col-xl-4 col-xxl-4 mx-auto">';
    
            // <!-- Formulário nome do aluno -->
            echo '<div class=" col-sm-9 col-md-7 col-lg-11 col-xl-11 col-xxl-11 mx-auto">';
                echo '<label for="pesquisar" class="form-label"></label>';
                echo '<input type="text" class="form-control" id="pesquisar" name="primeiro_nome" placeholder="Nome do ninja">';
            echo '</div>';
            // <!-- Formulario data -->
            echo '<div class="mb-3 col-sm-9 col-md-7 col-lg-11 col-xl-11 col-xxl-11 mx-auto">';
                echo '<label for="data" class="form-label"></label>';
                echo '<input type="text" class="form-control" id="data" name="data" placeholder="Data ano letivo" min="2000" max="2050">';
            echo '</div>';
    
            // <!-- Formulário de seleção de matéria -->
            echo '<div class="mb-3 col-sm-9 col-md-7 col-lg-11 col-xl-11 col-xxl-11 mx-auto">';
               echo '<select class="form-select" aria-label="Default select example" name="materia">';
                    echo '<option selected>Selecionar Matérias</option>';
                    echo '<option value="arte">Arte</option>';
                    echo '<option value="ciencias">Ciência</option>';
                    echo '<option value="fisica">Física</option>';
                    echo '<option value="geografia">Geografia</option>';
                    echo '<option value="matematica">Matemática</option>';
                    echo '<option value="portugues">Português</option>';
                echo '</select>';
            echo '</div>';
    
    
            echo '<div class=" mb-3 col-sm-9 col-md-7 col-lg-11 col-xl-11 col-xxl-11 mx-auto  d-flex justify-content-center">';
                echo '<button type="submit" class="btn btn-outline-success text-dark  col-3" ><i class="bi bi-check-lg"></i>Enviar</button>';
            echo '</div>';
        echo '</form>';

    echo '</div>';
   
    
   
    if (!empty($_POST['primeiro_nome']) and !empty($_POST['materia']) and $_POST['materia'] != 'Selecionar Matérias'){
        
        try {
    
            
    
            //select primeiro_nome from alunos where primeiro_nome like '%naruto%'
            $stmt = $pdo->prepare("select * from alunos where primeiro_nome like :dados");
    
    
            //Dados para ser enviado para SQL.
            $dados = array(
                ':dados' => '%'. trim($_POST['primeiro_nome']).'%'
            );
            
            //Executando dados e pegando dados com fetchall
            $stmt->execute($dados);
    
            // Resultado da busca do nome do aluno
            $resposta = $stmt->fetchAll();
    
            // Select para obter o id e nome da materia
            $stmt2 = $pdo->prepare("select * from materias where nome_materia like :mdados");
    
            // Prerando dados da pateria
            $dados2 = array(
                ':mdados' =>  '%'.$_POST['materia'].'%'
            );
    
            // Escutando dados
            $stmt2->execute($dados2);
    
            // Pegando dados da materia
            $resposta2 = $stmt2->fetchAll();
    
    
    
    
    
            
            
            
            //Verifiando se nome existe
            if (!empty($resposta) and !empty($resposta2)){
                
                // var_dump($resposta);
                // echo 'passou';
    
                
                echo '<table class="container table table-hover">';
                echo '<thead>';
                echo '<tr>';
                
                echo '<th>--</th>';
                echo '<th>Foto</th>';
                echo '<th>Nome</th>';
                echo '<th>Matéria</th>';
                echo '<th>Adicionar Notas</th>';
    
                echo '</tr>';
                echo '</thead>';
                echo '<tbody>';
                
                $cont = 0;
                foreach ($resposta as $n){
    
                    
    
                    // echo '<pre>';
                    // var_dump($cont);
                    // echo '<pre>';
    
                    echo '<tr>';
                    echo "<td>";
                                                                    
                    echo '<td> <img src=img/'.$resposta[$cont]['imagem'].' width="75" height="75"/> </td>';
                    echo "<td>{$resposta[$cont]['primeiro_nome']}</td>";
                    echo "<td>{$resposta2[0]['nome_materia']}</td>";
                    //Opção para adicionar notas
                    echo "<td><a href='adicionar_notas&idnome={$resposta[$cont]['id']}&idmateria={$resposta2[0]["id"]}&data={$_POST['data']}' class='btn btn-primary'> Adicionar notas </a></td>";
    
                    echo "</td>";
                    echo '</tr>';
                    $cont  ++ ;
                }
                echo '</tbody>';
                echo '</table>';
    
    
            }
            else{
    
                echo '<div class="container row mt-3 m-auto">';
                echo '<div class="col-4 m-auto">';
                        // Script de alerta
                echo '<div class="alert alert-warning " role="alert">';
                echo 'Nome não cadastro...';        
                echo '</div>';
                echo '</div>';
                echo '</div>';
                
            }
                 
        } catch (PDOException $e) {
    
            die($e->getMessage());
        }
    
    }
    else{

        

        echo '<div class="container row mt-3 m-auto">';
        echo '<div class="col-4 m-auto">';
                // Script de alerta
        echo '<div class="alert alert-warning " role="alert">';
        echo 'Formulário vazio...';        
        echo '</div>';
        echo '</div>';
        echo '</div>';
        



    }


}

else{
    // Nega acesso sem está logado
    if (empty($_SESSION['user_nome'])){
        
       
        header('Location:login&msgErro=Acesso negado...');
 
    }
}

?>


    
            


    






        



     


            
            
            
            
            
                                


                            

                
             

                
                
                




                


            
            
            
            

