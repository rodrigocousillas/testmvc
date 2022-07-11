<?php 

function conectarDB() : mysqli {
    $db = new mysqli(
        $_ENV['DB_HOST'],
        $_ENV['DB_USER'],
        $_ENV['DB_PASS'],
        $_ENV['DB_BD']
    );


    //$db = new mysqli('localhost', 'scp_com_ar', 'vf5jxLytbzMxsg7', 'scp_com_ar');
    
    if(!$db) {
        echo "Error no se pudo conectar";
        exit;
    } 

    return $db;
    
}