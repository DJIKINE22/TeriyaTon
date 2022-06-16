<?php
  $connexion= ('mysql:host=localhost;dbname=nous_db');
  $conn = new PDO($connexion, 'root', '');
    $pdo = $conn;
    if(isset($_POST['pseudo']) AND isset($_POST['message']) AND !empty($_POST['pseudo'])AND !empty($_POST['message'])){
        $pseudo= htmlspecialchars($_POST['pseudo']);
        $message=htmlspecialchars($_POST['message']);
        $req = $pdo->prepare('INSERT INTO tchat(pseudo, messag)VALUES(?,?)');
        $req->execute(array($pseudo, $message));
    }
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page de tchat</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
</head>
<body>
    <div>
        <p id="title">TERIYA TON</p>
        <marquee behavior="" direction="right"><p class="defiler"> Bienvenue sur TERIYA TON, l'application de gestion de tontine</p></marquee>
        <section id="section1">
            <div class="droit">
                <img class="logo" src="../img/Logo.png" alt="image" sizes="">
                <div class="mess">
                    <?php
                        $allmsg = $conn->query("SELECT * FROM tchat " );
                        while($msg = $allmsg->fetch())
                        {
                            ?>
                            <b><?php echo $msg['pseudo']; ?> : </b><?php echo $msg['messag']; ?> <br>
                            <?php
                                
                        }
                    ?>
                    <form method="POST" action="">
                        <input type="text" name="pseudo" placeholder="PSEUDO" ><br>
                        <input type="text" name="message" placeholder="message" value="<?php if(isset($pseudo)){echo $pseudo;} ?>"><br>
                        <input type="submit" value="Envoyez">
                    </form>
                </div>
                <a href="../php/accueil_membre.php"><img src="../img/Retour.png" alt="image" srcset="" style="position:relative; left: 88%;"></a>
            </div>
            <div class="gauche">
                <div class="rows">
                    <a href="../php/tontine.php"><img class="icones" src="../img/Paiement.png" alt="image" sizes=""></a>
                    <a href="../php/tchat.php"><img class="icones" src="../img/Discution.png" alt="image" sizes=""></a>
                    <a href="../php/visioconference.php"><img class="icones" src="../img/Viedeo.png" alt="image" sizes=""></a>
                </div>
            </div>
            <hr id="bar_haut">
            <hr id="bar_bas">
            </div>
        </section>
    </div>
</body>
</html>