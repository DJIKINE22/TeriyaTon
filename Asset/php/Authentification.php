<?php
	// session_start();
	@$login=$_POST["login"];
	@$pass=$_POST["pass"];
	@$valider=$_POST["valider"];
	$message="";
	if(isset($valider)){
		include("conn.php");
		$res=$pdo->prepare("select * from membre where login=? and pass=? limit 1");
		$res->setFetchMode(PDO::FETCH_ASSOC);
		$res->execute(array($login,($pass)));
		$tab=$res->fetchAll();
		if(count($tab)==0)
			$message='<span style="color: red; font-weight: bold; margin-left: 40%; font-size: 20px">Mauvais login ou mot de passe!</span>';
		else {
			{
                $login=$_POST['login'];
                $password=$_POST['pass'];
                $request=$pdo->query("SELECT * FROM membre WHERE login='$login' AND pass='$password'");
                if($row=$request->fetch()){
                    $_SESSION['id_membre']=$row['id_membre'];
                    $_SESSION['groupuser']=$row['groupuser'];
                    $groupuser=$row['groupuser'];
                    header('location:index.php?menu='.$groupuser.'');
                }
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
    <link rel="stylesheet" href="../css/djik.css">
    <!-- <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">  -->
    <title>Authentification</title>
    <style>
        
    </style>
</head>
<body>
    <div class="container">
        <form name="fo" method="post" action="">
            
            <div class="img-fluid ">
                <img src="../img/Logo.png" alt="" width="60%" >
            </div>
            <div class="form-group row">
                <label for="" id="log" class="col-md-3 col-form-label">Login</label>
                <div class="col-sm-6">
                    <input type="email" class="form-control" placeholder="Nom d'utilisateur" name="login" value="<?php echo $login?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="" id="pass" class="col-sm-3 col-form-label">Password</label>
                <div class="col-sm-6">
                    <input type="password" class="form-control" placeholder="Mot de passe" name="pass">
                </div>
                <button id="btn2" name="valider" style="margin-bottom: 10px;">Se Connecter</button><br>
            </div>
            <div>
         

            </div>
        </form>
        <a href="../php/motdepasseO.php" > <input type="submit"  id="btnforget"  value="Mot de passe oublié ?" style="margin-left: 100px;font-size:20px"></a>
        
    </div>
    <div class="espacememnt"></div> 
    <?php if(!empty($message)){ ?>
				<div id="message"><?php echo $message ?></div>
				<?php } ?>
</body>
</html>