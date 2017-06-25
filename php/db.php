<?php
    /*Connection to MySQL via PDOElement*/
    $host="192.64.116.9";
    $usr="r1models_r1models";
    $pwd="N377HDtqnWHtv";
    $db="r1models_R1Models";
    $charset='utf8';
    $dsn="mysql:host=$host;dbname=$db;charset=$charset";
    $opt=[
         PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
         PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
         PDO::ATTR_EMULATE_PREPARES   => false,
         ];
        $pdo=new PDO($dsn,$usr,$pwd,$opt);
 ?>