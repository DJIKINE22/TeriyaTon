<?php
require_once('conn.php');
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des membres</title>
    <!-- lien css -->
    <link rel="stylesheet" href="../css/style.css">
    <!-- liens bootstrap -->
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
                        <p id="titre_liste">LISTE DES MEMBRES</p>
                    </div>
                </div>
                <div class="panel-body liste_membre">
                <?php
                   
                   require_once("conn.php");
               $req="select nom,prenom from membre limit 15";
               $ps=$pdo->prepare($req);
               $ps->execute();
               
               ?>
                <?php while ($et=$ps->fetch()) {?>

              <tr>
<td><?php echo ($et['nom'])?></td>
     <td><?php echo ($et['prenom'])?> &nbsp;</td>  
     <td> <input type="checkbox" ></br>
   
    
                </tr>
<?php }?> 
                    <!-- <ol class=""> -->
                        <!-- <p>Ali TRAORE</p>
                        <p>Moussa LY</p>
                        <p>Madou DIARRA</p>
                        <p>Fanta CAMARA</p>
                        <p>Issa KONE</p>
                        <p>Massa SOW</p>
                        <p>Oumar KEITA</p>
                        <p>Ina MBO</p>
                        <p>Adja COUMARE</p>
                        <p>Mariama DIALL</p> -->
                    <!-- </ol> -->
                    <!-- <div class="ok">
                        <input type="checkbox" SELECT id_membre,nom,prenom,login,date_paiement,montant FROM membre,paiement
                    WHERE membre.id_membre = paiement.id_membre and (date_paiement BETWEEN '2022-06-01 ' AND '2022-06-30 ') ;
                    >
                        <input type="checkbox" class="checkbox">
                        <input type="checkbox" class="checkbox">
                        <input type="checkbox" class="checkbox">
                        <input type="checkbox" class="checkbox">
                        <input type="checkbox" class="checkbox">
                        <input type="checkbox" class="checkbox">
                        <input type="checkbox" class="checkbox">
                        <input type="checkbox" class="checkbox">
                        <input type="checkbox" class="checkbox">
                    </div>
                </div> -->
                <a href="../php/visioconference.php"><input class="btn_liste" type="submit" name="valider" value="Valider"></a>
            </div>
        </div>
    </div>
</body>
</html>