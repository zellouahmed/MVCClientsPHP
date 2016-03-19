<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Document sans titre</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>
<table border=1 align=center>
<tr><th>Code</th><th>Nom</th><th>Suppression</th></tr>
<?php
foreach ($clients as $client)
{
echo "<tr><td>$client[0]</td><td>$client[1]</td><td align=center><a href=suppression.php?num=$client[0]><img src='images/drop.png' alt='supprimer'></a></td></tr>";
}
?>
</table>

</body>
</html>
