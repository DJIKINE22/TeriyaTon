<?php
require_once("conn.php");
if(isset($_POST['MODIFIER'])){
    $modif=$_POST['login'];
    $pass=$_POST['pass'];
    $request=$pdo->query("UPDATE membre SET  pass='$pass' WHERE login='$modif'");
    
    header("location:../php/Authentification.php");
}
?>
 <script>
         alert("Votre mot de passe a été modifié avec succés");
       </script>