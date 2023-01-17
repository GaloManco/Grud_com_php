
        <div class="row m-auto">
            <div class="container  col-3 mb-3 text-center"><h2>Criar conta de usuario</h2></div>
        </div>
             

        <div class=" container m-auto bg-primary shadow-lg bg-light col-4 border rounded-3 ">

            <!-- Formulário de cadatro de usuario -->
            <form  method="post" action="processo_cadastro_login">
              
                <div class="row">
                    <div class="col-8 m-4" >
                        <label for="nome" class="form-label">Nome</label>
                        <input type="text" class="form-control border shadow" id="nome" placeholder="Digite seu nome" name="nome" required>
                    </div>
                </div>
               
                <div class="row ">
                    <div class="col-6 m-auto">
                        <label for="inputEmail4" class="form-label">Email</label>
                        <input type="email" class="form-control border shadow" id="inputEmail4" name="email" placeholder="Email" required>
                    </div>
                    
                    <div class="col-4 m-auto">
                        <label for="inputPassword4" class="form-label">Password</label>
                        <input type="password" class="form-control border shadow " id="inputPassword4" name="password"  placeholder="Password" required>
                    </div>
                </div>
                
                <div class="row mt-3 mb-3">
                    <div class="col-4 ">
                        <button type="submit" class="btn btn-primary mb-4 m-4">Enviar</button>
                    </div>
                </div>

            </form>
        </div>



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
            




        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>