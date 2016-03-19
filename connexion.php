<?php
define('host',"localhost");
define('user',"root");
define('pass',"");
define('dbname',"blog");
$db = new PDO('mysql:host=localhost;dbname=blog', user,pass);
//require 'client.php';


$select_clients = $db->prepare('SELECT num, nom FROM clients');
$select_client = $db->prepare('SELECT num, nom FROM clients WHERE num = ?');
$insert_client = $db->prepare('INSERT INTO clients VALUES (?, ?)');
//récupère tous les utilisateurs (aucun puisque la table est vide)

//$insert_client->execute(array('',"koutbi"));
$select_clients->execute();
$clients = $select_clients->fetchAll();
?>
<table border=1 align=center>
<tr><th>Code</th><th>Nom</th><th>Suppression</th></tr>
<?php
foreach ($clients as $client)
{
echo "<tr><td>$client[0]</td><td>$client[1]</td><td align=center><a href=suppression.php?num=$client[0]><img src='images/drop.png' alt='supprimer'></a></td></tr>";
}
?>
</table>
<?php
//print_r($clients);

$select_client->execute(array(1)); //récupère l'utilisateur numéro 1
$client1 = $select_client->fetchAll();echo "<br>";
print_r($client1);
$select_client->execute(array(2)); //récupère l'utilisateur numéro 2
$client2 = $select_client->fetchAll();echo "<br>";
print_r($client2);
$select_client->execute(array(4)); //récupère l'utilisateur numéro 3
$client3 = $select_client->fetchAll();echo "<br>";
print_r($client3);
echo "<br>";
?>


// base

CREATE TABLE IF NOT EXISTS `clients` (
  `num` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `Prenom` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `Sexe` enum('M','F') CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `DateNaissance` date NOT NULL,
  `LieuNaissance` varchar(40) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `Adresse` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Ville` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Nationalite` varchar(3) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`num`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Contenu de la table `clients`
--

INSERT INTO `clients` (`num`, `nom`, `Prenom`, `Sexe`, `DateNaissance`, `LieuNaissance`, `Adresse`, `Ville`, `Nationalite`, `email`) VALUES
(1, 'zef', 'egeerg', 'M', '0000-00-00', 'zef', 'zef', 'zef', 'zf', 'zef'),
(2, 'alami', 'imad', 'F', '1900-00-00', 'zellou', 'rabat', 'rabat', 'mar', 'zel@rr.com'),
(15, 'hkjgd', 'gjgfjxf', 'M', '0000-00-00', 'uyt', 'gfx', 'fx', 'hhf', 'hfx@jg'),
(16, 'hkjgd', 'gjgfjxf', 'M', '0000-00-00', 'uyt', 'gfx', 'fx', 'hhf', 'hfx@jg');
