<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page de reunion de l'administrateur</title>
    <link rel="stylesheet" href="../css/style.css">
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
                        <p id="titre_reunion">REUNION EN COURS</p>
                    </div>
                </div>
                <div class="panel-body">
                    <img class="logo2" src="../img/Logo.png" alt="image">
                    <input class="btn_cours" type="submit" name="cours" value="En cours...."><br><br>
                    <div class="row">
                        <div class="col-lg-6 col-xs-6 col-md-offset-1">
                            <img class="img_video" src="../img/image7.jpg" alt="image">
                        </div>
                        <div class="col-lg-6 col-xs-6 col-md-offset-1">
                            <img class="img_video" src="../img/image7.jpg" alt="image">
                        </div>
                    </div><br/><br/>
                    <div class="row">
                        <div class="col-lg-6 col-xs-6 col-md-offset-1">
                            <img class="img_video" src="../img/image7.jpg" alt="image">
                        </div>
                        <div class="col-lg-6 col-xs-6 col-md-offset-1">
                            <img class="img_video" src="../img/image7.jpg" alt="image">
                        </div>
                    </div>     
                </div><br>
                <div class="mess">
                    <label for="message">Message</label>
                    <textarea name="message" id="message"></textarea>
                </div>
                <a href="../php/visioconference.php"><input class="btn_terminer" type="submit" name="cours" value="Terminer"></a>
            </div>
        </div>
    </div>
</body>
</html>