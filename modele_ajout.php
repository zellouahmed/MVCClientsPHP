<?php
include 'modele.php';
print_r ($client);
//$insert_client->execute(array($client));
$insert_client->execute(array($client['numero'],$client['nom'],$client['prenom'],$client['sexe'],$client['DateNaissance'],$client['LieuNaissance'],$client['Adresse'],$client['Ville'],$client['Nationalite'],$client['Email']));
?>