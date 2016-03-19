<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<script language="javascript">
function confirmerSupression()
{

return confirm('Est ce que vous voulez supprimer ce client ?');
}
function confirmerModification()
{

return confirm('Est ce que vous voulez modifier ce client ?'); 
}
</script>
<title>Document sans titre</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>
<table border=1 align=center>
<tr><th>Code</th><th>Nom</th><th>Suppression</th><th>Modifier</th><th>Affichage</th></tr>
<!--
<td align=center><a href=../liste-aff-$client[0].html><img src='images/view.png' alt='afficher'></a></td>
-->
<?php
foreach ($clients as $client)
{
echo "<tr><td>$client[0]</td><td>$client[1]</td>
<td align=center><a href=index.php?action=supp&num=$client[0]><img src='images/drop.png' alt='supprimer' onClick='return confirmerSupression()'></a></td>
<td align=center><a href=../liste-modif-$client[0].html><img src='images/edit.png' alt='supprimer' onClick='return confirmerModification()'></a></td>
<td align=center><a href=../liste/aff/$client[0].html><img src='mvc/images/view.png' alt='afficher'></a></td>
</tr>";
}
?>
<tr><th colspan="5">Nombre de clients : <?php echo count($clients);?></tr>
</table>
<a href="index.php?action=ajout">Ajout nouveau client</a>
<br>


</body>
</html>