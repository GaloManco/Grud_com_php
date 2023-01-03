<?php
     
    include_once "menu.php";

    if(!isset($_SESSION)){
        header("Location:index_off.php");
    }
    else{
        header("Location:index_online.php");
    }
   

?>