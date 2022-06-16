<?PHP
    require('conn.php');
    if(isset($_GET['menu'])){
        ($mois=$_GET['menu']);
    }
    else{
        ($mois='login');
    }
    if($groupuser=='login'){
        require 'Autentification.php';
    }
    elseif($groupuser=='admin'){
        require '../accueil_admin.html';
    }
    elseif($groupuser=='membre'){
        require '../accueil_membre.html';
    }
    else{
        echo'desoler';		
    }
?>

