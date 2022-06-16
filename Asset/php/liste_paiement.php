<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../css/djik.css">
        <link rel="stylesheet" href="../bootstrap/cc/bootstrap.min.css">
        <title>Liste du Paiement</title>
    </head>
    <body>
        <div class="corps">
            <table class="table">
                <?php
                        $mois = filter_input(INPUT_POST, 'mois', FILTER_SANITIZE_STRING)  ;
                    ?>
                <caption><h1>Paiement du <?php
                 echo $mois?>  mois</h1></caption>
                <thead>
                <tr>
                <th scope="col">Identifiant du membre</th>
                    <th scope="col">nom</th>
                    <th scope="col">Prenom</th>
                    <th scope="col">login</th>
                    <th scope="col">Date de paiement</th>
                    <th scope="col">Montant</th>
                </tr>
                </thead>
                <tbody>
                    
                    <?php
                        if($mois) :
                    ?>
                    <?php 
                        require_once ("conn.php") ;
                        $req = "SELECT membre.id_membre,nom,prenom,login,date_paiement,montant FROM membre,paiement
                        WHERE membre.id_membre = paiement.id_membre and MONTH(date_paiement) = '$mois'" ;
                        $ps=$pdo->prepare($req);
                        $ps->execute();
                    ?>
                    <?php while ($et=$ps->fetch()) {?>
                        <tr>
                        <td><?php echo ($et['id_membre'])?></td>
                            <td><?php echo ($et['nom'])?></td>
                            <td><?php echo ($et['prenom'])?></td>
                            <td><?php echo ($et['login'])?></td>
                            <td><?php echo ($et['date_paiement'])?></td>
                            <td><?php echo ($et['montant'])?></td>
                        <tr>
                        <?php }?> 
                        <?php
                        endif
                    ?>                
                </tbody>
            </table>
            <a  id="re" href="../php/etap.php">RETOUR</a>
        </div>
    </body>
</html>