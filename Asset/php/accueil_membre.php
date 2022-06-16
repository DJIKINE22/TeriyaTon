<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--le lien css-->
    <link rel="stylesheet" href="../css/accueil_membre.css">
    <!--les liens bootstrap-->
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="..bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../bootstrap/js/main.js">
    <!-- <script src="bootstrap/js/bootstrap.bundle.js"></script> -->
    <title>ACCUEIL MEMBRE</title>
    <style>
        /* body{
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            
        } */
        h1{
         font-size: 2em;
         color: black;
         width: 20%;
         margin: auto;
         
         
        }
        h1 span{
             display: table-cell; 
           animation: test 5s  infinite;
           
           margin: auto;
        }
        h1 span:nth-child(1)
        {
            animation-delay: 0s;
        }
        h1 span:nth-child(2)
        {
            animation-delay: 0.25s;
        }
        h1 span:nth-child(3)
        {
            animation-delay: 0.75s;
        }
        h1 span:nth-child(4)
        {
            animation-delay: 1s;
        }
        h1 span:nth-child(5)
        {
            animation-delay: 1.25s;
        }
        h1 span:nth-child(6)
        {
            animation-delay: 1.75s;
            letter-spacing: 20px;
        }
        h1 span:nth-child(7)
        {
            animation-delay: 2s;
        }
        @keyframes test { 
            0%,20%{
                color: #AA56FF;
                /* filter: blur(1px); */
        
                text-shadow: 
                0 0 50px #FFF,
                            0 0 20px #FFFF,
                            0px 0px 10px #FFF;
            }
            60%,70%{
                color: #CC1664;
                /* filter: blur(1px); */
        
                text-shadow: 
                0 0 50px #ff0000,
                            0 0 20px #ff0000,
                            0px 0px 10px #ff0000;
            }
            80%,100%{
                color: rgb(250, 251, 251);
                /* filter: blur(0); */
             
            }
            
        }
    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="row" id="haut">
            <div>
            <h1>
                <span>T</span>
                <span>E</span>
                <span>R</span>
                <span>I</span>
                <span>Y</span>
                <span>A</span>
                <span>T</span>
                <span>O</span>
                <span>N</span>
               
            </h1>
        </div>
        </div>
    </div>

    <div class="container">
        <img src="../img/Logo.png" alt="photo" style="width: 15%; height: 15%; " id="logo" >
        <div class="row" id="section">
            <div class="col-md-6" id="section1">
                <div class="carre1">
                    <a href="../php/tontine.php" class="btn btn-default btn-sm"><strong>PAIEMENT</strong><img src="../img/Paiement.png"  style="width: 70%; height: 100%; "></a> <br/> 
                </div>
                <br/><br/><br/>
                <div class="carre2">
                    <a href="../php/visio_membre.php" class="btn btn-default btn-sm"><strong><small>VISIOCONFERENCE</small></strong><img src="../img/Viedeo.png"  style="width: 70%; height: 100%; ">
                </div></a> <br/> 
            </div>

            <div class="col-md-6" id="section2">
                <div class="carre3">
                    <a href="../php/tchat.php" class="btn btn-default btn-sm"><strong>TCHAT</strong><img src="../img/Discution.png"  style="width: 70%; height: 100%; "></a> <br/> 
                </div>
                <br/><br/><br/>
                <div class="carre4">
                    <a href="../php/deconnexion.php" class="btn btn-default btn-sm"><strong>DECONNEXION</strong><img src="../img/Deconnexion.png"  style="width: 70%; height: 100%; "></a> <br/> 
                </div>
            </div>
        </div>
    </div>
</body>
</html>