
<!-- Logo do formulário -->
<div class="container">
    <div class="row ">
        <h2 class="col-4 text-center mx-auto  p-3 ">Cadastro de Alunos</h2>
    </div>
</div>





<form enctype="multipart/form-data" action="processo_alunos" method="POST" >
    <div class="container border rounded-3 bg-light shadow justify-content-center">
        <div class="row">
    

                <!-- linha 1 -->
                <div class="row mb-3 justify-content-center mt-3 ">
                    <div class="col-sm-8 col-md-6 form-floating">
                        <input type="text" name="nome" id="nome" class="form-control" required>
                        <label for="nome">Nome</label>
                    </div>
                    <div class="col-sm-8 col-md-6 form-floating">
                        <input type="text" name="sobreNome" id="sobreNome" class="form-control" required>
                        <label for="sobreNome">Sobre Nome</label>
                    </div>
                </div>

                <!-- Linha 2 -->
                <div class="row mb-3 justify-content-center">
                    <div class="col-sm-8 col-md-6 form-floating">
                        <input type="text" name="cidade" id="cidade" class="form-control" required>
                        <label for="cidade">Cidade</label>
                    </div>
                    <div class="col-sm-8 col-md-6 form-floating ">
                        <input type="text" name="uf" id="uf" class="form-control" required>
                        <label for="uf">Estado</label>
                    </div>
                </div>

                <!-- Linha 3 -->
                <div class="row mb-3 justify-content-center">
                    <div class="col-sm-8 col-md-6 form-floating">
                        <input type="tel" name="tel" id="tel" class="form-control">
                        <label for="tel">Telefone</label>
                    </div>
                    <div class="col-sm-8 col-md-6 form-floating">
                        <input type="date" name="data" id="data" class="form-control" required>
                        <label for="data">Data</label>
                    </div>
                </div>


                
                <!-- Linha 4 -->
                <div class="row mb-3 ms-3">
                    
                    <div class="col-sm-8 col-md-4 form-check">
                        <label>
                            <input type="radio" name="sexo" value='M' class="form-check-input" required > Masculino
                        </label>
                    </div>

                    <div class="col-sm-8 col-md-4 form-check ">
                        <label>
                            <input type="radio" name="sexo" value='F' class="form-check-input" required>Feminino
                        </label>
                    </div>

                    <div class="col-sm-8 col-md-4 form-check">
                        <label >
                            <input type="radio" name="sexo" value='O' class="form-check-input" required>Outro
                        </label>
                    </div>
                </div>

                <!-- Linha 5 -->
                <div class="row col-sm-8 col-md-6 ">
                    <div class="mb-3 form-control ms-3">
                        <label for="imagem">Adicionar foto</label>
                        <input class="form-control " type="file" name='imagem' id="imagem" required>
                    </div>
                </div>
                
                <div class="row"></div>
                <div class="col-sm-8 col-md-2 ms-3">
                    <button type="submit" class="btn  btn-lg mb-3 btn-success">Enviar</button>
                </div>
                
        </div>
    </div>
</form>

    

    

<!-- Div Erro para caso o cadastro não der certo -->
<div class="container mt-5 m-auto col-3 ">
    <?php if(!empty($_GET['msgErro'])) { ?>
            <div class="alert alert-warning" role="alert">
                <?php echo $_GET["msgErro"];?>
            </div>
    <?php };?>
</div>
<!-- Div para Messagem de sucesso ao adicionar elementos no SQL -->
<div class="container mt-5  m-auto col-3">
    <?php if(!empty($_GET['msgSucesso'])) { ?>
            <div class="alert alert-success" role="alert">
                <?php echo $_GET["msgSucesso"];?>
            </div>
    <?php };?>
</div> 