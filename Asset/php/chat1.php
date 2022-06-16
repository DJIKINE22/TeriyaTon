<?php
$connexion= ('mysql:host=localhost;dbname=db_teriyaton');
$bdd = new PDO($connexion, 'root', '');
// $bdd = new PDO("mysql:host=127.0.0.1;dbname=teriyaton;", "root" ," " );

 if(isset($_POST['pseudo']) AND isset($_POST['message']) AND !empty($_POST['pseudo'])AND !empty($_POST['message'])){
    $pseudo = $_POST['pseudo'] ;
$message = $_POST['message'];
    // $q=$pdo->prepare('INSERT INTO client(NomClt,PrénomClt,AdresseClt,NumPermis,TéléphoneClt)VALUES(?,?,?,?,?)');
	// 	$params=array($nom,$prenom,$adresse,$num,$tel);
	// 	$q ->execute($params);
    $req = $bdd->prepare('INSERT INTO tchat(pseudo, messag)VALUES(?, ?)');
    $params=array($pseudo, $message);
    $req->execute($params);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="">
        <input type="text" name="pseudo" placeholder="PSEUDO" ><br>
        <input type="text" name="message" placeholder="message" value="<?php if(isset($pseudo)) {echo $pseudo;} ?>"><br>
        <input type="submit" value="Envoyez">

    </form>
   
  
    <?php
    $allmsg="SELECT * FROM tchat BY id DESC ";
    $ps=$bdd->prepare($req);
    $ps->execute();?>
    
       while ($et=$ps->fetch())
      {
          ?>

<b><?php  echo $smg['pseudo']; ?> : </b><?php  echo $smg['message']; ?> </br>
<?php
      }
    ?>
</body>
</html>