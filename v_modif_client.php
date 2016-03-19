<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Document sans titre</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>
<br>
<form action="../site.html" method="get">
<table border=1 align=center>
<tr><th>Code</th><td><input type="text" name="num" value="<?php echo $client[0]; ?>" readonly=""></td></tr>
<tr><th>Non</th><td><input type="text" name="nom" value="<?php echo $client[1]; ?>"></td></tr>
<tr><th>Prenom</th><td><input type="text" name="prenom" value="<?php echo $client[2]; ?>"></td></tr>
<tr><th>Sexe</th><td> M <input type="radio" name="sexe" value="M" <?php if($client[3]=="M") echo "checked"; ?>> F <input type="radio" name="sexe" value="F" <?php if($client[3]=="F") echo "checked"; ?>></td></tr>
<tr><th>DateNaissance</th><td><input type="text" name="DateNaissance" value="<?php echo $client[4]; ?>"></td></tr>
<tr><th>LieuNaissance</th><td><input type="text" name="LieuNaissance" value="<?php echo $client[5]; ?>"></td></tr>
<tr><th>Adresse</th><td><textarea name="Adresse"><?php echo $client[6]; ?></textarea></td></tr>
<tr><th>Ville</th><td><input type="text" name="Ville" value="<?php echo $client[7]; ?>"></td></tr>
<tr><th>Nationalite</th><td><input type="text" name="Nationalite" value="<?php echo $client[8]; ?>"></td></tr>
<tr><th>Email</th><td><input type="text" name="Email" value="<?php echo $client[9]; ?>"></td></tr>
<tr><td><div align="center">
  <input type="submit" value="Modifier">
</div></td><td><div align="center">
  <input type="reset" value="Annuler">
</div></td></tr>
<input type="hidden" name="action" value="valmodif">
</table>
</form>
<a href="index.php">Retour</a>
<br>
</body>
</html>