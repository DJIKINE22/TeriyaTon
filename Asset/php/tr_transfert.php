<?php
    include "conn.php";
    $mode=$_POST["paiement"];
    $numero=$_POST["numero"];
    $date=$_POST["date"];
    $montant=$_POST["montant"];
    $id_membre=$_POST["id_membre"];
    try {
        $sql= "INSERT INTO transfert (mode_trans, montant_trans, date_trans, id_compt, id_membre )
        VALUES('$mode', '$montant', '$date', '$numero', '$id_membre')";
        $pdo->exec($sql);
        echo "New record created successfully";
    } catch(PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
    }
    header("location:../php/accueil_admin.php");


 
    //  include "conn.php";

    // $mode = $_POST["paiement"];
    // $montant = $_POST["montant"];
    // $date = $_POST["date"];
    // $id_membre = $_POST["id_membre"];
    // $numero = $_POST["numero"];
    // $sth = $pdo->prepare("
    //     INSERT INTO transfert(mode_trans, montant_trans, date_trans, id_compt, id_membre)
    //     VALUES(:mode_trans, :montant_trans, :date_trans, :id_compt, :id_membre)");
    // $sth->bindParam(':mode_trans',$mode);
    // $sth->bindParam(':montant_trans',$montant);
    // $sth->bindParam(':date_trans',$date);
    // $sth->bindParam(':id_compt',$numero);
    // $sth->bindParam(':id_membre',$id_membre);
    // $sth->execute();
         
    //   header("Location:../php/accueil_admin.php");

    // include "conn.php";
    // $mode=$_POST["paiement"];
    // $montant=$_POST["montant"];
    // $date=$_POST["date"];
    // $numero=$_POST["numero"];
    // $num=$_POST["num"];
    // try {

    //     $sql= "  INSERT INTO transfert(mode_trans, montant_trans, date_trans, numero_compte, id_membre )
    //     VALUES('$mode', '$montant', '$date', '$numero', '$num')";
    //     // use exec() because no results are returned
    //     $pdo->exec($sql);
    //     echo "New record created successfully";
    //   } catch(PDOException $e) {
    //     echo $sql . "<br>" . $e->getMessage();
    //   }
    // header("location:../php/accueil_admin.php");
    // $sth=$pdo->prepare("
    //     INSERT INTO transfert(mode_trans, montant_trans, date_trans, numero_compte, id_membre )
    //     VALUES(:mode_trans, :montant_trans, :date_trans, :numero_compte, :id_membre)
    // ");
    // $sth->bindParam(':mode_trans', $mode);
    // $sth->bindParam(':montant_trans', $montant);
    // $sth->bindParam(':date_trans', $date);
    // $sth->bindParam(':numero_compte', $numero);
    // $sth->bindParam(':id_membre', $num);
    // $sth->execute();
    // header("location:../php/accueil_admin.php");
?>