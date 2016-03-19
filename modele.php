<?php
define('host',"localhost");
define('user',"root");
define('pass',"");
define('dbname',"blog");
$db = new PDO('mysql:host=localhost;dbname=mit', user,pass);
$select_clients = $db->prepare('SELECT numero, nom FROM clients');
$select_client = $db->prepare('SELECT * FROM clients WHERE numero = ?');
$insert_client = $db->prepare('INSERT INTO clients VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)');
$delete_client = $db->prepare('DELETE FROM clients WHERE num = ?');
$modif_client = $db->prepare('UPDATE clients set nom = ?, Prenom = ?, Sexe = ?, DateNaissance = ?, LieuNaissance = ?, Adresse = ?, Ville= ?, Nationalite = ?, email = ? WHERE num = ?') or die();

?>