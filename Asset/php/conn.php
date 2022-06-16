<?php
session_start();

try{
    $connexion= ('mysql:host=localhost;dbname=nous_db');
    $pdo= new PDO($connexion, 'root', '');
    // echo 'connexion ok';
    
}
catch(PDOException $e){
    $msg = 'ERREUR PDO dans'  . $e->getMessage();
    die ($msg);
    }

?>