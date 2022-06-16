<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--le lien css-->
    <link rel="stylesheet" href="../css/planification.css">
    <!--les liens bootstrap-->
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../bootstrap/js/main.js">
    <!-- <script src="bootstrap/js/bootstrap.bundle.js"></script> -->
    <title>PLANIFICATION</title>
</head>
<body>
    <div class="container">
        <div class="page">
            <div class="row" id="haut">
                <h2><strong>PLANIFICATION</strong></h2>
            </div>
            <form action="../php/planification.php" method="POST">
                <!-- <div>
                    <label>ID</label>
                    <input type="int" required="required" placeholder="veuillez entrez votre id" class="form-control" name="id">
                </div> -->
    
                <div>
                    <label>DATE</label>
                    <input type="date" required="required" placeholder="veuillez entrez la date" class="form-control" name="date">
                </div>
    
                <div>
                    <label>HEURE</label>
                    <input type="time" required="required" placeholder="veuillez entrez l'heure" class="form-control" name="heure">
                </div>
    
                <div>
                    <label>LIEN</label>
                    <input type="text" required="required" placeholder="veuillez entrez le lien" class="form-control" name="lien"><img src="../Asset/img/Lien.png" style="width: 5%; height: 5%">
                </div>
                <br>
                <div>
                    <input onclick="alert('Insertion reuçut avec succès !!!')" type="submit" value="valider" class="btn btn-default" style="background-color: #FFADD6; color: white;  border-radius: 10px">
                </div>
            </form>
        </div>
    </div>
</body>
</html>