<?php

require_once('conn.php');

$nom = $_POST['nom'] ;
$prenom = $_POST['prenom'];
$adresse = $_POST['adresse'];
// $age = $_POST['age'];
$fonction = $_POST['fonction'];
$login = $_POST['login'];
$pass = $_POST['pass'];
$groupus = $_POST['groupus'];
$tel= $_POST['tel'];
$idgrp= $_POST['idgrp'];

	
		$q=$pdo->prepare('INSERT INTO membre(nom,prenom,adresse,fonction,login,pass,groupuser,telephone,idgroup)VALUES(?,?,?,?,?,?,?,?,?)');
		$params=array($nom,$prenom,$adresse,$fonction,$login,$pass,$groupus,$tel,$idgrp);
		$q ->execute($params);
		
 ?>