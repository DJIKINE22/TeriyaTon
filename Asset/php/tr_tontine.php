  <?php
    include 'conn.php';
    // echo "bonjour";
      $mode=$_POST["paiement"];
      $numero=$_POST["numero"];
      $date=$_POST["date"];
      $montant=$_POST["montant"];
      $num=$_POST["num"];
      $sql= "INSERT INTO paiement (mode, montant, date_paiement, numero_compte, id_membre )
      VALUES('$mode', '$montant', '$date', '$numero', '$num')";
      $pdo->exec($sql);
      header("location:../php/accueil_membre.php");
  ?>    
</body>
</html>
