<!DOCTYPE html>
<html lang="en">
  <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../css/djik.css">
        <script src="../bootstrap/js/main.js"></script>
        <title>Document</title>
  </head>
  <body>
    <div class="corpsEtat">
      <div id="titre">
        <h3>ETAT <a href="#etat"> &nbsp &nbsp &nbsp &nbsp &nbsp<img src="../img/deroulant.png" alt="" ></h3>
      </div>
        <div id="fer1" ><a href="../php/accueil_admin.php" id="fer">X</a>  </div>
          <div id="etat">
            <a href="#"><h2  class="titreetat" onclick="listemois()">Payé</h2></a>
            <a href="#"> <h2 class="titreetat" onclick="listemois()">Impayé</h2></a> 
          </div>
          <div id="">
            <form action="../php/liste_paiement.php" method="post">
              <select name="mois" id="mois">
                  <option value="">Choisir un mois</option>
                  <option value="01">Janvier</option>
                  <option value="02">Février</option>
                  <option value="03">Mars</option>
                  <option value="04">Avril</option>
                  <option value="05">Mai</option>
                  <option value="06">juin</option>
                  <option value="07">juillet</option>
                  <option value="08">Août</option>
                  <option value="09">Septembre</option>
                  <option value="10">Octobre</option>
                  <option value="11">Novembre</option>
                  <option value="12">Decembre</option>
              </select>
              <button type="submit">Select</button>
            </form>
          <div>
          <!-- <button type="submit"> Select</button> -->
        </div>
    </div>
</body>
</html>
<?php 
  require_once("conn.php");
?>