<?php
require('conn.php');
	if(isset($_POST['connexion'])){
        $login=$_POST['login'];
		$password=$_POST['password'];
		$request=$pdo->query("SELECT * FROM membre WHERE login='$login' AND pass='$password'");
		if($row=$request->fetch()){
			$_SESSION['id_membre']=$row['id_membre'];
			$_SESSION['groupuser']=$row['groupuser'];
			$groupuser=$row['groupuser'];
			header('location:index.php?menu='.$groupuser.'');
		}
	}
?>