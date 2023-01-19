
     <!--Título do formulário  -->
<div class="container text-center mb-3">
    <div>
        <h2>Login</h2>
    </div>
</div>



<!-- Formulário de Login -->
<div class="container ">
    <div class="row justify-content-center">
       
        <!-- Formulário de login -->
        <form class="col-8 bg-light shadow-lg border rounded-3" method="post" action="processo_login">

            <div class="row justify-content-center">
                <div class=" col-sm-11 col-md-8 col-lg-8  mb-3 mt-3">
                    <label for="inputEmail4" class="form-label">Email</label>
                    <input type="email" class="form-control shadow" id="inputEmail4" name="email" required>
                    
                </div>
            </div>
            
            <div class="row justify-content-center">    
                <div class=" col-sm-11 col-md-8 col-lg-8  mb-3">
                    <label for="inputPassword4" class="form-label">Password</label>
                    <input type="password" class="form-control shadow" id="inputPassword4" name="password" required>
                </div>
                
            </div>
            
            <!-- Butão de enviar -->
            <div class="row justify-content-center text-center mt-3 mb-3">
                <div class="col-sm-10 col-md-4">
                    <button type="submit" class="btn btn-primary  ">Entrar</button>
                    
                </div>
                
                <!-- Link para página criar conta -->
                <div class="col-sm-10 col-md-4">
                    <a href="cadastro_login" class="mx-5"> Criar Conta</a>
                </div>
            </div>
        </form>
    </div>
</div>
            
            
                
                
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
            




    



    

