
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/djik.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <title>Authentification</title>
    <style>
        
    </style>
</head>
<body>
    <div class="container">
        <form action="tr_Authentification.php" method="POST">
            <div class="img-fluid ">
                <img src="../img/Logo.png" alt="" width="60%" >
            </div>

            <div class="form-group row">
                <label for="" id="log" class="col-md-3 col-form-label">Login</label>
                <div class="col-sm-6">
                    <input type="email" name="login" class="form-control" placeholder="Nom d'utilisateur">
                </div>
            </div>
            <div class="form-group row">
                <label for="" id="pass" class="col-sm-3 col-form-label">Password</label>
                <div class="col-sm-6">
                    <input type="password" name="password" class="form-control" placeholder="Mot de passe">
                </div>
            </div>

            <!-- <button id="btn2">
            </button><br> -->
            <input id="btn2" type="submit" name="connexion" value="Se Connecter">
            <button  formaction="../MotdepassOublié.html"; id="btn1" >Mot de passe oublié ?</button>
        </form>
    </div>
</body>
</html>