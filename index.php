
  

    <?php
        // Menu principal
        include_once "menu.php"; 

        // get para pegar valor da url
        $rota = $_GET['url'] ?? 'home';
        // var_dump($rota);
        if(file_exists("$rota.php")){
            include_once "$rota.php";
        }else{
        echo 'Está página não exite!';
        }
        
        
        include_once "rodape.php";
    ?>



