<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page de tchat</title>
    <link rel="stylesheet" href="../Asset/css/style.css">
    <link rel="stylesheet" href="../Asset/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="../Asset/bootstrap/css/bootstrap.min.css">
    <!-- <script src="bootstrap5/js/bootstrap.js"></script>
    <script src="bootstrap5/js/bootstrap.min.js"></script> -->
</head>
<body>
    <div>
        <p id="title">TERIYA TON</p>
        <marquee behavior="" direction="right"><p class="defiler"> Bienvenue sur TERIYA TON, l'application de gestion de tontine</p></marquee>
        <section id="section1">
            <div class="droit">
                <img class="logo" src="../Asset/img/Logo.png" alt="image" sizes="">
                <div class="mess">
                    <label for="message">Message</label>
                    <textarea name="message" id="message_tchat" placeholder="Saisissez">
                    </textarea>
                    <input type="submit" name="envoyer" value="Envoyer">
                    <!-- <img src="../Asset/img/env2.png" alt="" srcset="" style="width: 30px; height: 30px; position: relative; top: -10px; right: 35px; color: rgba(137, 43, 226, 0.205);"> -->
                </div>
                <a href="../Asset/accueil_membre.html"><img src="../Asset/img/Retour.png" alt="image" srcset="" style="position:relative; left: 88%;"></a>
            </div>
            <div class="gauche">
                <div class="rows">
                    <a href="../Asset/tontine.html"><img class="icones" src="../Asset/img/Paiement.png" alt="image" sizes=""></a>
                    <a href="../Asset/tchat.html"><img class="icones" src="../Asset/img/Discution.png" alt="image" sizes=""></a>
                    <a href="../Asset/visioconference.html"><img class="icones" src="../Asset/img/Viedeo.png" alt="image" sizes=""></a>
                </div>
            </div>  
            <hr id="bar_haut">
            <hr id="bar_bas">
            </div>
        </section>
    </div>
    <?php
        if (isset($_POST['Envoyer'])) {
            $request=$PDO->query("SELECT Message.Message, membre.nom,
            membre.prennom, membre.adresse, membre.fonction, membre.login, membre.pass, membre.groupuser,
            membre.telephone message.Date, message.Expediteur FROM 
            membre WHERE message.Date=Date.id_membre AND 
            Date='$Date' AND Expediteur='$Expediteur'");
        }
    ?>  
</body>
</html>