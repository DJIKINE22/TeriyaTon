<!DOCTYPE html>
<html>
<head>
    <link href="../css/tontin.css" rel="stylesheet" />
    <script src="tontine.js"></script>
</head>
<body>
    <div class="v8_2">
        <form action="../php/tr_tontine.php" method="POST">
            <span >
                <select name="num" style="width: 200px" class="form-control"  id="v2_100"> 
                    <?php
                        require_once("conn.php");
                        $request=$pdo->query("SELECT * FROM membre");
                        while ($row=$request->fetch()) {
                            echo '
                                <option value=" '.$rows['id_membre'].'">
                                    '.$row['id_membre'].'
                                </option>
                            '; 
                        }
                    ?>
                </select>
            </span>
            <span ><input type="number" name="montant" placeholder="Montant" class="v8_53"></span>
            <span ><input type="date" name="date" placeholder="Date" class="v74_455" > </span>
            <!-- <input type="number" name="numero" placeholder="Numero compte" class="v8_23"> -->
            <span >
                <select name="numero" id="" class="v8_23">
                    <option value="">1919191</option>
                </select>
            </span>
            <span class="v38_408">Paiement</span>
            <div class="v102_422"><img src="../img/LogoMoov.png" width="95px" height="45px" alt=""></div>
            <div class=> <input type="radio"  id="v102_424" name="paiement" value="Orange Money"></div>
            <div class=> <input type="radio"  id="v102_425" name="paiement" value="Moov Money">
            </div>
            <div>
            </div>
            <div class="v102_426"><img src="../img/logo1.png" width="120px" height="80px" alt=""></div>
            <a href="../php/accueil_membre.php"> <span class="v118_409">X</span></a>
            <a href="../php/accueil_membre.php"><span class="v186_599">Annuler</span></a> 
            <span  > <input type="submit" value="Valider" class="v186_602" onclick="alert('Insertion reuçut avec succès !!!')"> </span>
        </form>
        <div class="name"></div>
        <span class="v238_592">Mode de paiement</span>
        <span class="v238_593">Numéro du compte</span>
        <span class="v238_594">Montant</span>
        <span class="v238_595">Date</span>
        <span class="v2_100">Identifiant du group</span>
    </div>
    <!-- <div class="v74_408" id="mois">
        <div class="v74_409"></div>
        <span class="v74_410">Janvier</span><br>
        <span class="v74_411">Février</span><br>
        <span class="v74_412">Mars</span><br>
        <span class="v74_413">Avril</span><br>
        <span class="v74_414">Mai</span><br>
        <span class="v74_415">Juin</span><br>
        <span class="v74_416">Juillet</span><br>
        <span class="v74_417">Aout</span><br>
        <span class="v74_418">Septembre</span><br>
        <span class="v74_419">Octobre</span><br>
        <span class="v74_420">Novembre</span><br>
        <span class="v74_421">Décembre</span><br>
    </div> -->
</body>
</html> 