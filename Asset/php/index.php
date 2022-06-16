<?PHP
    require('conn.php');
    if(isset($_GET['menu'])){
        ($groupuser=$_GET['menu']);
    }
    else{
        ($groupuser='login');
    }
    if($groupuser=='login'){
        require '../php/Authentification.php';
    }
    elseif($groupuser=='admin'){
        require '../php/accueil_admin.php';
    }
    elseif($groupuser=='membre'){
        require '../php/accueil_membre.php';
    }
    else{
        echo'desoler';		
    }
?>

