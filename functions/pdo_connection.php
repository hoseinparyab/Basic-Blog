<?php

$username = 'root';
$password = '';
$servername ='localhost';
$dbname = 'blog_php';
global $pdo;
try {

    $options = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ);
    $pdo  = new PDO("mysql:host=$servername;$dbname", $username, $password ,$options);
    return $pdo ;

}
catch (PDOException $e) {
    echo "PDOException: " . $e->getMessage();
}