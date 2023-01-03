<?php
     
    if(isset($_SESSION)){
        header("Location:logado.php");
        die();

    }
    
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JonasFrancoDev</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <?php
    include_once "menu_off.php";
    ?>

    <div class="container ">
        <div class="card mx-auto shadow-lg" style="width: 18rem;">
            <img src="img/com_bigode_2.jpg" class="card-img-top" alt="img-jonas">
            <div class="card-body">
                <p class="card-text d-block"><h4>Site em construção...</h4> </p>
            </div>
        </div>

    </div>



</body>
</html>