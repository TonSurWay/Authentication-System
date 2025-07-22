<?php

    $dbhost = 'localhost';
    $dbname = 'auth_system';
    $dbuser = 'root';
    $dbpass = '';
    $charset = 'utf8mb4';

    $dsn = "mysql:host=$dbhost;dbname=$dbname;charset=$charset;";

    $options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,];

    try {
        $pdo = new PDO($dsn, $dbuser, $dbpass, $options);
    } catch (PDOException $e){
        die("Connection failed" . $e->getMessage());
    } 

?>