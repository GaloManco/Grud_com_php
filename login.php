<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
    <?php
    include_once "menu_off.php";

    ?>



        <form class="row g-3 container mx-auto d-block shadow-lg p-5">
            
            <div class="col-md-6 mx-auto">
                <label for="inputEmail4" class="form-label">Email</label>
                <input type="email" class="form-control " id="inputEmail4"  required>
                          
            </div>
          
            <div class="col-md-6 mx-auto">
                <label for="inputPassword4" class="form-label">Password</label>
                <input type="password" class="form-control" id="inputPassword4" required>
            </div>

            <div class="col-6 mx-auto">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="gridCheck">
                    <label class="form-check-label" for="gridCheck">
                        Check me out
                    </label>
                </div>
            </div>

            <div class="col-6 mx-auto d-flex">
                <div class="col-6">
                    <button type="submit" class="btn btn-primary">Sign in</button>
                    
                </div>


                <div class="col-6 mx-5">
                    <a href="cadastro_login.php" class="mx-5"> Criar Conta</a>
                </div>

            </div>


        </form>



    
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</html>