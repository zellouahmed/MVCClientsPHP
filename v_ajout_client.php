<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Document sans titre</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>
<br>
<form action="index.php" method="get"><input type="hidden" name="num" value="">
<table border=1 align=center>
<tr><th>Nom</th><td><input type="text" name="nom"></td></tr>
<tr><th>Prenom</th><td><input type="text" name="prenom" ></td></tr>
<tr><th>Sexe</th><td> M <input type="radio" name="sexe" value="M" checked> F <input type="radio" name="sexe" value="F" ></td></tr>
<tr><th>DateNaissance</th><td><input type="text" name="DateNaissance" ></td></tr>
<tr><th>LieuNaissance</th><td><input type="text" name="LieuNaissance" ></td></tr>
<tr><th>Adresse</th><td><textarea name="Adresse"></textarea></td></tr>
<tr><th>Ville</th><td><input type="text" name="Ville" ></td></tr>
<tr><th>Nationalite</th><td><input type="text" name="Nationalite" ></td></tr>
<tr><th>Email</th><td><input type="text" name="Email" ></td></tr>
<input type="hidden" name="action" value="valajout">
<tr><td><div align="center">
  <input type="submit" value="Ajouter">
</div></td><td><div align="center">
  <input type="reset" value="Annuler">
</div></td></tr>

</table>
</form>
<a href="index.php">Retour</a>
<br>
</body>
</html>