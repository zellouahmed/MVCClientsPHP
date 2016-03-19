<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Document sans titre</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>
<br>
<table border=1 align=center>
<tr><th>Code</th><td><?php echo $client[0]; ?></td></tr>
<tr><th>Non</th><td><?php echo $client[1]; ?></td></tr>
<tr><th>Prenom</th><td><?php echo $client[2]; ?></td></tr>
<tr><th>Sexe</th><td><?php echo $client[3]; ?></td></tr>
<tr><th>DateNaissance</th><td><?php echo $client[4]; ?></td></tr>
<tr><th>LieuNaissance</th><td><?php echo $client[5]; ?></td></tr>
<tr><th>Adresse</th><td><?php print $client[6]; ?></td></tr>
<tr><th>Ville</th><td><?php echo $client[7]; ?></td></tr>
<tr><th>Nationalite</th><td><?php echo $client[8]; ?></td></tr>
<tr><th>Email</th><td><?php echo $client[9]; ?></td></tr>
</table>
<a href="index.php">Retour</a>
<br>
</body>
</html>