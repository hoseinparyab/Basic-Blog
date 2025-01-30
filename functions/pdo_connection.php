<?php
global $pdo;
try {
    $options = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ);
    $pdo = new PDO("mysql:host=localhost;dbname=blog_php", 'root', '', $options);
    return $pdo;
//    $user['first_name']
//    $user->first_name
}
catch (PDOException $e){
    echo 'error ' . $e->getMessage();
    exit;
}