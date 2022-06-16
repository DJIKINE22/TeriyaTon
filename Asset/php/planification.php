<?php
    include "conn.php";
    
    // $ID = $_POST["id"];
    $DATE = $_POST["date"];
    $HEURE = $_POST["heure"];
    $LIEN = $_POST["lien"];
    
    // try{
    //     $dbco = new PDO("mysql:host=$serveur;dbname=$dbname",$user,$pass);
    //     $dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
        //On insère les données reçues
        $sth = $pdo->prepare("
            INSERT INTO planification(date_plani, heure, lien)
            VALUES(:date_plani, :heure, :lien)");
        // $sth->bindParam(':id',$ID);
        $sth->bindParam(':date_plani',$DATE);
        $sth->bindParam(':heure',$HEURE);
        $sth->bindParam(':lien',$LIEN);
        $sth->execute();
        
        //On renvoie l'utilisateur vers la page de remerciement
     header("Location:../php/visioconference.php");
    // }
    // catch(PDOException $e){
    //     echo 'Impossible de traiter les données. Erreur : '.$e->getMessage();
    // }
?>