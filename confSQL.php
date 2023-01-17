<?php 
    // Configuração do db.
        // local de endereço
        // Nome do db
        // Porta
        // User
        // Password
    $db_endereco = 'localhost';
    $db_name = 'escola';
    $port = '3306';
    $user = 'root';
    $pass = '';

    // Fazer tratamento try da conecção.
    try {
       
        // Fazer conecção com db.
        // PDO "pgsql:host=;port=;dbname=", $user, $pass, [PDO::]
        $pdo = new PDO("mysql:host=$db_endereco;  dbname=$db_name;  port=$port;", $user, $pass, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);

        // echo 'conectado ao db';
    
        // Tratamento de falha na conecção.
    } catch ( PDOException $e) {

        echo 'Falha ao conectar ao db' . $e->getMessage();
    }
    






?>