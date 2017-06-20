<?php
try{
    $pdo = new PDO('mysql:host=localhost;dbname=authentif','root','Adoc7');
    $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_WARNING);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_OBJ);
// var_dump($pdo);
}

catch(PDOException $e){
    echo 'Connexion impossible';
}
