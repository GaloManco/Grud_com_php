
  

    <?php
    session_start();
    // var_dump($_SESSION);
    
        // Menu principal
        if (isset($_SESSION['user_email'])){
        //Menu user online
        include_once "menuOnline.php";      
        }
        else{
        // Menu user off line
        include_once "menu.php";
        }


        // get para pegar valor da url
        $rota = explode("/" ,$_GET['url'] ?? 'home');
        // var_dump(count($rota));


        // File_existe verica de arquivo.php existe.
        if(file_exists("$rota[0].php")){
        include_once "$rota[0].php";
        }else{
        include_once "erro.php";
        }

        
        //Rodapé do site
        include_once "rodape.php";
    ?>



