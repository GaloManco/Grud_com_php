
        
        <div class="container text-center mb-3">
            <div><h2>Login</h2></div>
        </div>
        <div class="container col-4 bg-light mx-auto shadow-lg border rounded-3">

            
            <!-- Formulário de login -->
            <form class=" d-block  p-5 rounded-3 " method="post" action="processo_login">
                <div class="row container text-left">

                    <div class=" col-10  mx-auto mb-3">
                        <label for="inputEmail4" class="form-label">Email</label>
                        <input type="email" class="form-control shadow" id="inputEmail4" name="email" required>
                        
                    </div>
                    
                    <div class="col-10 mx-auto mb-3">
                        <label for="inputPassword4" class="form-label">Password</label>
                        <input type="password" class="form-control shadow" id="inputPassword4" name="password" required>
                    </div>
                    
                </div>
                <!-- <div class="col-6 mx-auto">
                    <div class="form-check">
                        <input class="form-check-input shadow" type="checkbox" id="gridCheck" name="checkbox">
                        <label class="form-check-label " for="gridCheck">
                            Check me out
                        </label>
                    </div>
                </div> -->
                
                <div class="row container m-auto text-center mt-3">
                    <div class="col-4 m-auto">
                        <button type="submit" class="btn btn-primary  ">Entrar</button>
                        
                    </div>
                    
                    
                    <div class="col-6 m-auto">
                        <a href="cadastro_login" class="mx-5"> Criar Conta</a>
                    </div>
                </div>
            </form>
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
    



    

