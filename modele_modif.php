<?php
include 'modele.php';
print_r ($client);
echo count($client);
$modif_client->execute(array($client['nom'],$client['prenom'],$client['sexe'],$client['DateNaissance'],$client['LieuNaissance'],$client['Adresse'],$client['Ville'],$client['Nationalite'],$client['Email'],$client['num']));
?>