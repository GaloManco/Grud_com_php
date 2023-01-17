
<!-- Logo do formulário -->
<div class="container">
    <div class="row ">
        <h2 class="col-4 text-center mx-auto  p-3 ">Cadastro de Alunos</h2>
    </div>
</div>


<i class="bi bi-emoji-sunglasses"></i>

<div class="container ">
    
    <div class="row align-items-center ">
        <div class="col-md-10 col-lg-5 mx-auto shadow-lg p-4 border">
            <form enctype="multipart/form-data" action="processo_alunos" method="POST" class="p-4 p-md-5 border rounded-3 bg-light shadow">
                <div class="row align-items-center mb-3">
                    <div class="form-floating col-6">
                        <input type="text" name="nome" id="nome" class="form-control" required>
                        <label for="nome">Nome</label>
                    </div>
                    <div class="form-floating col-6">
                        <input type="text" name="sobreNome" id="sobreNome" class="form-control" required>
                        <label for="sobreNome">Sobre Nome</label>
                    </div>

                </div>
                <div class="mb-3">
                    <div class="form-floating col-12">
                        <input type="text" name="cidade" id="cidade" class="form-control" required>
                        <label for="cidade">Cidade</label>
                    </div>
                </div>
                <div class="row align-items-center mb-3">
                    <div class="form-floating col-8">
                        <input type="date" name="data" id="data" class="form-control" required>
                        <label for="data">Data</label>
                    </div>
                    <div class="form-floating col-4">
                        <input type="text" name="uf" id="uf" class="form-control" required>
                        <label for="uf">UF</label>
                    </div>

                </div>
                <div class="row mb-3">
                    <div class="form-floating col-8">
                        <input type="tel" name="tel" id="tel" class="form-control">
                        <label for="tel">Telefone</label>
                    </div>
                    
                </div>
                <div class="row mb-3">
                    
                    <div class="form-check col-4">
                        <label>
                            <input type="radio" name="sexo" value='M' class="form-check-input" required > Masculino
                        </label>
                    </div>
                    <div class="form-check col-4">
                        <label>
                            <input type="radio" name="sexo" value='F' class="form-check-input" required>Feminino
                        </label>
                    </div>
                    <div class="form-check col-4">
                        <label >
                            <input type="radio" name="sexo" value='O' class="form-check-input" required>Outro
                        </label>
                    </div>
                </div>
                <div class="mb-3 form-control">
                    <label for="imagem">Adicionar foto</label>
                    <input class="form-control" type="file" name='imagem' id="imagem" required>
                </div>
                <button type="submit" class="btn btn-lg btn-success">Enviar</button>
            </form>

        </div>

    </div>

    </div>
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