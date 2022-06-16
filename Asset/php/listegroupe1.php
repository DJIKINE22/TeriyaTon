<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des membres</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <!-- <script src="bootstrap5/js/bootstrap.js"></script>
    <script src="bootstrap5/js/bootstrap.min.js"></script> -->
</head>
<body>
    <div class="container">
        <div class="col-md-6 col-md-offset-3 corps">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <div class="panel-title text-center">
                        <p id="titre_liste">MEMBRES DU GROUPE1</p>
                    </div>
                </div>  
                <table class="table">
                    <tbody>
                        <div class="panel-body liste_membre">
                            <?php
                                require_once ("conn.php") ;
                                $req = "SELECT id_membre,nom,prenom FROM membre
                                WHERE  id_groupe = 1";
                                
                                $ps=$pdo->prepare($req);
                                $ps->execute();
                            ?>
                            <?php while ($et=$ps->fetch()) {?>              
                            <?php echo ($et['id_membre'])?>
                                <?php echo ($et['nom'])?>
                                <?php echo ($et['prenom'])?> </br>
                            <?php }?> 
                            <a href="../php/accueil_admin.php"><input class="btn_liste" type="submit" name="fermer" value="Fermer"></a>
                        </div>
                    </tbody> 
                </table>
            </div>
        </div>
    </div>
</body>
</html>