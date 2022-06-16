
<?php
@$Nom = $_POST["nom"];
@$Prenom = $_POST["prenom"];
@$Adresse = $_POST["adresse"];
@$Fonction = $_POST["fonction"];
@$Login = $_POST["login"];
@$Pass = $_POST["pass"];
@$Groupe = $_POST["groupe"];
@$Telephone = $_POST["tel"];
@$id_groupe = $_POST["id_groupe"];
	@$valider=$_POST["valider"];
	$message="";
	if(isset($valider)){
		if(empty($Nom)) $message="<li>Non invalide!</li>";
		if(empty($Prenom)) $message.="<li>Prénom invalide!</li>";
		if(empty($Adresse)) $message.="<li>Login invalide!</li>";
		if(empty($Login)) $message.="<li>Mot de passe invalide!</li>";
		if(empty($Groupe)) $message.="<li>Mot de passe invalide!</li>";
		if(empty($Pass)) $message.="<li>Mot de passe invalide!</li>";
		if(empty($telephone)) $message.="<li>Mot de passe invalide!</li>";
		if(empty($id_groupe)) $message.="<li>Mot de passe invalide!</li>";
		// if($pass!=$repass) $message.="<li>Mots de passe non identiques!</li>";	
		if(empty($message)){
			include("conn.php");
			$req=$pdo->prepare("select id_membre from membre where login=? limit 1");
			$req->setFetchMode(PDO::FETCH_ASSOC);
			$req->execute(array($login));
			$tab=$req->fetchAll();
			if(count($tab)>0)
				$message="<li>Login existe déjà!</li>";
			else{
				$ins=$pdo->prepare("INSERT INTO membre(nom, prenom, adresse, fonction, login, pass, groupuser,telephone, id_groupe)
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
            $sth->execute();  
				header("location:login.php");
			}
		}
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--le lien css-->
    <link rel="stylesheet" href="../css/ajout_membre.css">
    <!--les liens bootstrap-->
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <script src="../bootstrap/js/bootstrap.js"></script>
    <script src="../bootstrap/js/bootstrap.min.js"></script>
    <script src="../bootstrap/js/bootstrap.bundle.js"></script>
    <title>AJOUT MEMBRE</title>
</head>
<body>
    <div id="page">
        <div class="titre">
            <h3>Ajouter Membre</h3>
            <a id="fermer" href="../php/accueil_admin.php"><strong>X</strong></a>
        </div>
        <form action="" method="POST" enctype="multipart/form-data" name="fo">
            <div class="nom">
                <label></label>
                <input type="text" name="nom" placeholder="Nom" class="form-control" style="width: 200px"  value="<?php echo $Nom?>" />
            </div>
            <br>
            <div class="prenom">
                <label></label>
                <input type="text" name="prenom" placeholder="Prenom" class="form-control" style="width: 200px" value="<?php echo $Prenom?>" /> 
            </div>
            <br>
            <div class="adresse">
                <label></label>
                <input type="text" name="adresse" placeholder="Adresse" class="form-control" style="width: 200px" value="<?php echo $Adresse?>" />
            </div>
            <br>
            <div class="fonction">
                <label></label>
                <input type="text" name="fonction" placeholder="Fonction" class="form-control" style="width: 200px" value="<?php echo $Fonction?>" />
            </div>
            <br>
            <div class="login">
                <label></label>
                <input type="email" name="login" placeholder="Login" class="form-control" style="width: 200px" value="<?php echo $Login?>" />>
            </div>
            <br>
            <div class="pass">
                <label></label>
                <input type="password" name="pass" placeholder="Password"  class="form-control" style="width: 200px" value="<?php echo $Pass?>" />
            </div>
            <br>
            <div class="groupe">
                <label></label>
                <select id="monselect" name="groupe" value="<?php echo $Groupe?>" >
  <option value="valeur1">Admin</option>
  <option value="valeur2" selected>membre</option>
  
</select>
                <!-- <input type="text" name="groupe" placeholder="Groupe" class="form-control" style="width: 200px"> -->
            </div>
            <br>
            <div class="telephone">
                <label></label>
                <input type="int" name="tel" placeholder="Telephone" class="form-control" style="width: 200px" value="<?php echo $Telephone?>" />
            </div>
            <br>
            <div class="id_groupe">
                <label></label>
                <input type="int" name="id_groupe" placeholder="Id_groupe" class="form-control" style="width: 200px" value="<?php echo $id_groupe?>" />
            </div>
            <br>
            
            <div>
                <!-- <button class="btn btn-default"><a href="../accueil_admin.html" ><strong>ANNULER</strong></a></button> -->
           <input type="submit" name="valider" value="S'inscrire" />
              </div>
              <div class="annuler"> <button class="btn btn-default"><a href="../accueil_admin.html" ><strong>ANNULER</strong></a></button>
              </div>
            </div>

        </form>
    </div>
</body>
</html>