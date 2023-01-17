
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        body{
            height: 100em;
            
           
        }
    </style>
</head>

<body class="">

        <header>
            <nav class="navbar navbar-expand-lg navbar-light bg-light border shadow p-3 mb-5 bg-body rounded m-3">
                <div class="container-fluid">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <a class="navbar-brand" href="home">JonasFrancoDEV</a>
                    <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active " aria-current="page" href="home" id="nav-link" >Home</a>
                            </li>
                            <li class="nav-item">
                                <!-- <a class="nav-link" href="add_aluno" id="nav-link">ADD ALUNO</a> -->
                                <div class="dropdown">
                                    <button class="btn dropdown-toggle" id="menu-suspenso-oculto" data-bs-toggle="dropdown">Menu</button>
                                    <ul class="dropdown-menu">
                                        <li><a href="add_aluno" class="dropdown-item">Add Aluno</a></li>
                                        <li><a href="lista_alunos" class="dropdown-item">Lista de alunos</a></li>
                                    </ul>
                                </div>
                            </li>
                            
                            <li class="nav-item">
                                <a class="nav-link" href="user" tabindex="-1" aria-disabled="true" id="nav-link"><?php echo $_SESSION['user_nome']; ?> </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="cadastro_login" tabindex="-1" aria-disabled="true" id="nav-link">Criar conta</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="sair" tabindex="-1" aria-disabled="true" id="nav-link">Sair</a>
                            </li>
                            
                            
                        </ul>
                        <form class="d-flex" method="get">
                            <input class="form-control me-2" type="search" placeholder="Procurar" aria-label="Search" name="pesquisar">
                            <button class="btn btn-outline-success" type="submit">Procurar</button>
                        </form>
                    </div>
                </div>
            </nav>
        </header>
   
    
    