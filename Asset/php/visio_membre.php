<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page de Visio_conference</title>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/joindre_reunion.css">
    <!-- <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script> -->
    <!-- <script src="bootstrap5/js/bootstrap.js"></script>
    <script src="bootstrap5/js/bootstrap.min.js"></script> -->
</head>
<body>
 
        <!-- <nav class="navbar"> -->
            <p id="title">TERIYA TON</p>
            <!-- <marquee behavior="" direction="right"></marquee> -->
        <!-- </nav> -->
        <marquee behavior="" direction="right"><p class="defiler">Bienvenue sur TERIYA TON, l'application de gestion de tontine.</marquee>
        <section id="section1">
            <div class="droit">
                <img class="logo" src="../img/Logo.png" alt="image">
                <div class="page">
                    <div class="row" id="haut">
                        <h3>JOINDRE REUNION</h3>
                    </div>
                </div>
                <div class="contenu ">
                    <label for="" ><img class="super"  src="../img/Lien.png" style="width: 10%; height: 10%" id="lien"></label>
                    <input type="text"  class="super"  placeholder="veullez entrez le lien ">
                    <br><br>
                    <a id="continuer" href="../php/reunion_membre.php" class="btn btn-default btn-sm" style="background-color: white ;" ><strong>CONTINUER</strong></a>
                </div>
            </div>
            <div class="gauche">
                <div class="rows">
                    <a href="../php/tontine.php"><img class="icones" src="../img/Paiement.png" alt="image" sizes="" title="Effetuez le paiement"></a>
                    <a href="../php/tchat.php"><img class="icones" src="../img/Discution.png" alt="image" sizes="" title="Discussion"></a>
                    <a href="../php/visio_membre.php"><img class="icones" src="../img/Viedeo.png" alt="image" sizes="" title="VisioConference"></a>
                </div>
                <!-- <div class="rows">
                    <p class="text_images col-mg-1">Payement1</p>
                    <p class="text_images col-mg-1">Tchat</p>
                    <p class="text_images col-mg-1">Visio_Conference</p>
                </div> -->
                
            </div>
            <hr id="bar_haut">
            <hr id="bar_bas">
        </section>
    <!-- <script src="../css/essai.js"></script> -->
</body>
</html>