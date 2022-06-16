<?php
    include "conn.php";

    $Nom = $_POST["nom"];
    $Prenom = $_POST["prenom"];
    $Adresse = $_POST["adresse"];
    $Fonction = $_POST["fonction"];
    $Login = $_POST["login"];
    $Pass = $_POST["pass"];
    $Groupe = $_POST["groupe"];
    $Telephone = $_POST["tel"];
    $id_groupe = $_POST["id_groupe"];
    
    $req=$pdo->prepare("select id from membre where login=? limit 1");
    $req->setFetchMode(PDO::FETCH_ASSOC);
    $req->execute(array($login));
    $tab=$req->fetchAll();
    if(count($tab)>0)
        $message="<li>Login existe déjà!</li>";
    else{
    $sth = $pdo->prepare("
            INSERT INTO membre(nom, prenom, adresse, fonction, login, pass, groupuser,telephone, id_groupe)
            VALUES(:nom, :prenom, :adresse, :fonction, :login, :pass, :groupuser, :telephone, :id_groupe)");
        // $sth->bindParam(':id',$ID);
        $sth->bindParam(':nom',$Nom);
        $sth->bindParam(':prenom',$Prenom);
        $sth->bindParam(':adresse',$Adresse);
        $sth->bindParam(':fonction',$Fonction);
        $sth->bindParam(':login',$Login);
        $sth->bindParam(':pass',$Pass);
        $sth->bindParam(':groupuser',$Groupe);
        $sth->bindParam(':telephone',$Telephone);
        $sth->bindParam(':id_groupe',$id_groupe);
        $sth->execute();  }
        header("Location:../php/accueil_admin.php");

?>
