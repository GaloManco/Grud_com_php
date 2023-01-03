<?php
     
    if(!isset($_SESSION)){
        header("Location:index.php");
        die();

    }
    
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logado</title>
</head>
<body>
    <?php 
        include_once "menu_online.php";
        
        // if(isset($_SESSION)){
        // header("Location:index_online.php");
        // }
        // else{
        //     header("Location:index_off.php");
        // }
    
    ?>

    <div>
        <h1>Logado</h1>
    </div>


</body>
</html>