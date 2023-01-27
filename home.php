
<!-- Imagem da página -->
<!-- <div class="container">
    <div class="card mx-auto shadow-lg" style="width: 18rem;">
        <img src="img/com_bigode_2.jpg" class="card-img-top" alt="img-jonas">
        <div class="card-body">
            <p class="card-text d-block"><h4>Site em construção...</h4> </p>
        </div>
    </div>

</div> -->

<!-- Div Erro para caso o cadastro não der certo -->
<div class="container mt-5 ">
    <?php if(!empty($_GET['msgErro'])) { ?>
            <div class="alert alert-warning text-danger col-2 mx-auto" role="alert">
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

  
  

   

<!-- <div style="height: 40em;"> -->

<h1 class="text-center">Pesquisar Ninja</h1>

<!-- Fomulário de pequisa -->
<div class="container">
    <form action="" method="post" class="col-sm-10 col-md-8 col-lg-4 col-xl-4 col-xxl-4 mx-auto">
        <div class="mb-3 col-sm-9 col-md-7 col-lg-11 col-xl-11 col-xxl-11 mx-auto text-center">
            <label for="pesquisar" class="form-label"></label>
            <input type="text" class="form-control" name="primeiro_nome" placeholder="Digite nome do ninja">
        </div>

        <div class=" mb-3 col-sm-9 col-md-7 col-lg-11 col-xl-11 col-xxl-11 mx-auto  d-flex justify-content-center">
            <button type="submit" class="btn btn-outline-success text-dark  col-3"><i class="bi bi-check-lg"></i>Enviar</button>
        </div>
    </form>
    
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
            
            
            // //Redirecionado para página de pequisa com erro de não encontrado
            // echo '<div class="container row mt-3 m-auto">';
            // echo '<div class="col-4 m-auto">';
            // // Script de alerta
            // echo '<div class="alert alert-warning " role="alert">';
            // echo 'Aluno não cadastrado...';        
            // echo '</div>';
            // echo '</div>';
            // echo '</div>';
            
            
        }else{
            
            // echo '<table class="container table table-hover">';
            // echo '<thead>';
            // echo '<tr>';
            
            // echo '<th>--</th>';
            // echo '<th>Foto</th>';
            // echo '<th>Nome</th>';
            // echo '<th>Sobre Nome</th>';
            // echo '<th>Cidade</th>';
            // echo '<th>Sexo</th>';
            
            
            
            // echo '</tr>';
            // echo '</thead>';
            // echo '<tbody>';
            
            
            
            foreach ($resposta as $n){

                
                echo '<div class="img-jonas card container bg-success mb-4 shadow" style="width: 18rem;">';
                echo "<img src=img/{$n['imagem']} class='card-img-top mt-3 img-thumbnail bg-warning' alt='aluno'/>";
                echo '<ul class="list-group list-group-flush mt-1 rounded-pill border ">';
                echo "<li class='list-group-item bg-warning '><h5>{$n['primeiro_nome']}</h5></li>";
                echo '</ul>';
              
               
                // echo '<div class="card-body">';
                //     echo '<h5 class="card-title">Card title</h5>';
                //     echo "<p class='card-text'>Some quick example text to build on the card title and make up the bulk of the card's content.</p>";
                // echo '</div>';
                

                echo '<div class="card-body">';
                    echo "<a href='lista_notas_luno&id_aluno={$n['id']}' class='card-link text-white'>Avaliar notas</a>";
                //     echo '<a href="#" class="card-link">Another link</a>';
                // echo '</div>';
                echo '</div>';



                
                // echo '<tr>';
                // echo "<td>";
                
                // echo '<td> <img src=img/'.$n["imagem"].' width="75" height="75"/> </td>';
                // echo "<td>{$n['primeiro_nome']}</td>";
                // echo "<td>{$n['segundo_nome']}</td>";
                // echo "<td>{$n['cidade']}</td>";
                // echo "<td>{$n['sexo']}</td>";
                
                
                //Opção para adicionar notas
                
                
                // echo "</td>";
                // echo '</tr>';
                
                
                
            }
            
            // echo '</tbody>';
            // echo '</table>';
            
            
            
            
        }
        
    } catch (PDOException $e) {
        die($e->getMessage());
    }

}else{
    
    if (!isset($_POST) OR !empty($_POST) ) {
        
        // Div Erro para caso o cadastro não der certo
        echo '<div class="container row mt-3 m-auto">';
        echo '<div class="col-4 m-auto">';
        // Script de alerta
        echo '<div class="alert alert-warning " role="alert">';
        echo 'Formulário vazio...';        
        echo '</div>';
        echo '</div>';
        echo '</div>';
        
        
    }
    else{
        
    }
}    


?>
        
</div>


