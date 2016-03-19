<?php
include 'modele.php';
$select_clients->execute();
$clients = $select_clients->fetchAll();
?>