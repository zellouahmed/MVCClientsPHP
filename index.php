<?php
include 'v_entete.php';
$action="all";
if(isset($_GET['action'])) $action=$_GET['action'];
switch ($action)
{ 

case 'aff' :
{
$CodeClt=$_GET['num'];
include 'modele_one.php';
include 'v_client.php';
break;
}
case 'modif' :
{
$CodeClt=$_GET['num'];
include 'modele_one.php';
include 'v_modif_client.php';
break;
}
case 'valmodif' :
{ 
$client=$_GET;
array_splice ($client, 10); 
include 'modele_modif.php';
header('location:index.php');
break;
}
case 'ajout' :
{ 
include 'v_ajout_client.php';
break;
}
case 'valajout' :
{ 
$client=$_GET;
array_splice ($client, 10); 
include 'modele_ajout.php';
header('location:index.php');
break;
}
case 'supp' :
{
$CodeClt=$_GET['num'];
include 'modele_delete_one.php';
header('location:index.php');
break;
}

default : {
include 'modele_all.php';
include 'v_clients.php';
 		}
}

include 'v_footer.php';
?>