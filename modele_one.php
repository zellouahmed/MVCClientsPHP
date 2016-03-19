<?php
include 'modele.php';
$select_client->execute(array($CodeClt));
$client = $select_client->fetch();
?>