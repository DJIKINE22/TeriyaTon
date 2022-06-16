
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/djik.css">
    <!-- <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css"> -->
    <title>Authentification</title>
    <style>
        
    </style>
</head>
<body>
    
    <div class="container">
       
            <?PHP
                if(isset($_GET['login'])){
                    $login=$_GET['login'];
                    $request=$PDO->query("SELECT * FROM membre WHERE login=\"$login\"");
                    if($rows=$request->fetch()) {
                        echo'
                            <form method="POST" action="../php/tr_pass.php">
                                <labe>Saisissez votre login</label>
                                <input type="hidden" value='.$rows['login'].' name="login" /><br><br>
                                <labe>Saisissez votre nouveau mot de passe</label>
                                <input type="hidden" value='.$rows['pass'].' name="pass" /><br><br>
                                <input type="submit" name="MODIFIER" value="MODIFIER" class="btn1"/>
                                        
                            </form>
                        ';
                    }
                }
                    else{
                        echo'
                            <form method="POST" action="../php/tr_pass.php"> 
                            <div class="form-group row">
                            <label for="" id="log2" class="col-md-3 col-form-label"> Login</label>
                            <div class="col-sm-6">
                                <input type="TEXT"  name="login"  class="form-control"/n required><br><br>
                                </div>
                                </div>
                                <div class="form-group row">
                                <label for="" id="pass2" class="col-sm-3 col-form-label"> Nouveau mot de passe</label>
                                <div class="col-sm-6">
                                <input type="password"  name="pass"  class="form-control"  required/><br><br>
                                </div>
                                </div>
                                <input type="submit" name="MODIFIER" value="MODIFIER" class="btn1"/>      
                            </form>
                        '; 
                    }
                   
            ?>
        
      
    </div>
</body>
</html>