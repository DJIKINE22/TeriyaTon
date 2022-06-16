
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--le lien css-->
    <link rel="stylesheet" href="../css/ajout_membre.css">
    <!--les liens bootstrap-->
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <script src="../Asset/bootstrap/js/bootstrap.js"></script>
    <script src="../Asset/bootstrap/js/bootstrap.min.js"></script>
    <script src="../Asset/bootstrap/js/bootstrap.bundle.js"></script>
    <title>AJOUT MEMBRE</title>
</head>
<body>
    <div id="page">
        <div class="titre">
            <h3>Ajouter Membre</h3>
            <a id="fermer" href="../php/accueil_admin.php"><strong>X</strong></a>
        </div>
        <form action="../php/ajout_membre.php" method="post">
            <div class="nom">
                <label></label>
                <input type="text" name="nom" placeholder="Nom" class="form-control" style="width: 200px">
            </div>
            <br>
            <div class="prenom">
                <label></label>
                <input type="text" name="prenom" placeholder="Prenom" class="form-control" style="width: 200px">
            </div>
            <br>
            <div class="adresse">
                <label></label>
                <input type="text" name="adresse" placeholder="Adresse" class="form-control" style="width: 200px">
            </div>
            <br>
            <div class="fonction">
                <label></label>
                <input type="text" name="fonction" placeholder="Fonction" class="form-control" style="width: 200px">
            </div>
            <br>
            <div class="login">
                <label></label>
                <input type="email" name="login" placeholder="Login" class="form-control" style="width: 200px" >
            </div>
            <br>
            <div class="pass">
                <label></label>
                <input type="password" name="pass" placeholder="Password" class="form-control" style="width: 200px">
            </div>
            <br>
            <div class="groupe">
                <label></label>
                <select id="monselect" name="groupe" style="width: 200px" class="form-control">
                    <option value="Admin">Admin</option>
                    <option value="membre" selected>membre</option>
                </select>
            </div>
            <br>
            <div class="telephone">
                <label></label>
                <input type="int" name="tel" placeholder="Telephone" class="form-control" style="width: 200px">
            </div>
            <br>
            <div class="id_groupe" class="form-control">
                <select name="id_groupe"  class="v8_23 form-control" style="width: 200px">
                    <?php
                        require_once("conn.php");
                        $request=$pdo->query("SELECT * FROM groupe");
                        while ($row=$request->fetch()) {
                            echo '
                                <option value=" '.$rows['id_groupe'].'">
                                    '.$row['id_groupe'].'
                                </option>
                            ';
                        }
                    ?>
                </select> 
            </div>
            <br>
            <div>
              <div class="ajouter"> <button class="btn btn-default" ><a href="../accueil_admin.html"  onclick="alert('Insertion reuçut avec succès !!!')"><strong>AJOUTER</strong></a></button>
              </div>
              <div class="annuler"> <button class="btn btn-default"><a href="../accueil_admin.html" ><strong>ANNULER</strong></a></button>
              </div>
            </div>
        </form>
    </div>
</body>
</html>