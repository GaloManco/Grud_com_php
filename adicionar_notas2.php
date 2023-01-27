<?php
// Verificação de o usuario esta logado
if (!isset($_SESSION['user_nome'])){

    header('Location:login&msgErro=Acesso negado...');
}

// echo '<pre>';
// var_dump($_GET['idnome']);
// var_dump($_GET['idmateria']);
// var_dump($_GET['data']);
// echo '</pre>';
// die();

// Chamando as função conexão e consuta ao banco de dados
include_once 'funcao.php';


   
try {

    $result = select_dados_alunos_join($_GET['idnome'], $_GET['idmateria'], $_GET['iddata']);

    
    
} catch (PDOException $e) {
    die($e->getMessage());
}  





    
?>
<!-- Div Erro para caso o cadastro não der certo -->
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


<!-- Formulario para add notas -->

<div class="container mb-5">
    <div class="row">
        <form action="processo_adicionar_notas2.php" method="post" class="col-sm-10 col-md-8 col-lg-4 col-xl-4 col-xxl-4 mx-auto bg-light border shadow">

            <input type="hidden" name="id" value="<?php echo $result[0]['id'];?>">
            <input type="hidden" name="idnome" value="<?php echo $result[0]['idaluno'];?>">
            <input type="hidden" name="idmateria" value="<?php echo $result[0]['idmateria'];?>">


            <!-- Formulario nome -->
            <div class="mb-3 col-sm-9 col-md-7 col-lg-11 col-xl-11 col-xxl-11 mx-auto">
                <label for="idnome" class="form-label">Nome</label>
                <input type="text" class="form-control" id="idnome" name="idnome"  placeholder="<?php echo $result[0]['primeiro_nome'];?>" disabled >
            </div>

            <!-- Fomulario matéria -->
            <div class="mb-3 col-sm-9 col-md-7 col-lg-11 col-xl-11 col-xxl-11 mx-auto">
                <label for="idmateria" class="form-label">Materia</label>
                <input type="text" class="form-control" id="idmateria" name="idmateria" placeholder="<?php echo $result[0]['nome_materia'];?>" disabled >
            </div>

            <!-- Primeiro Bimestre -->
            <div class="mb-3 col-sm-9 col-md-7 col-lg-11 col-xl-11 col-xxl-11 mx-auto">
                <label for="1bimestre" class="form-label">Nota do primeiro Bimestre</label>
                <input type="number" class="form-control" id="1bimestre" value="<?php echo $result[0]['1bi'];?>" name="1bi" placeholder="Primeiro Bimestre" max="10" step="0.1">
            </div>
            <!-- Segundo Bimestre -->
            <div class="mb-3 col-sm-9 col-md-7 col-lg-11 col-xl-11 col-xxl-11 mx-auto">
                <label for="2bimestre" class="form-label">Nota do segundo Bimestre</label>
                <input type="number" class="form-control" id="2bimestre" value="<?php echo $result[0]['1bi'];?>" name="2bi" placeholder="Segundo Bimestre" max="10" step="0.1">
            </div>
            <!-- Primeiro Bimestre -->
            <div class="mb-3 col-sm-9 col-md-7 col-lg-11 col-xl-11 col-xxl-11 mx-auto">
                <label for="3bimestre" class="form-label">Nota do Terceiro Bimestre</label>
                <input type="number" class="form-control" id="3bimestre" value="<?php echo $result[0]['1bi'];?>" name="3bi" placeholder="Terceiro Bimestre" max="10" step="0.1">
            </div>
            <!-- Primeiro Bimestre -->
            <div class="mb-3 col-sm-9 col-md-7 col-lg-11 col-xl-11 col-xxl-11 mx-auto">
                <label for="4bimestre" class="form-label">Nota do Quarto Bimestre</label>
                <input type="number" class="form-control" id="4bimestre" value="<?php echo $result[0]['1bi'];?>" name="4bi" placeholder="Quarto Bimestre" max="10" step="0.1">
            </div>
            <!-- Faltas-->
            <div class="mb-3 col-sm-9 col-md-7 col-lg-11 col-xl-11 col-xxl-11 mx-auto">
                <label for="faltas" class="form-label">Total de faltas</label>
                <input type="text" class="form-control" id="faltas" value="<?php echo $result[0]['faltas'];?>" name="faltas" placeholder="Total de Faltas" >
            </div>
            <!-- Data do ano letivo-->
            <div class="mb-3 col-sm-9 col-md-7 col-lg-11 col-xl-11 col-xxl-11 mx-auto">
                <label for="data" class="form-label">Data do ano letivo</label>
                <input type="number" class="form-control" id="data"  name="data" value="<?php echo $result[0]['date'];?>" placeholder="Digite somente o ano letivo" min="2000" max="2050">
            </div>

            <div class=" mb-3 col-sm-9 col-md-7 col-lg-11 col-xl-11 col-xxl-11 mx-auto  d-flex justify-content-center ">
                <button type="submit" class="btn btn-outline-success text-dark  col-3" >Enviar</button>
            </div>

        </form>

    </div>

</div>
          