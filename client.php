 <?php

class Client
{
//private static $num=0;
private $code;
private $nom;
private $prenom;
private $sexe;
private $ddn;
private $LieuNaissance;
private $adresse;
private $Ville;
private $Nationalite;
private $Email;

public function Client($code,$nom,$prenom,$sexe,$ddn,$LieuNaissance,$adresse,$Ville,$Nationalite,$Email)
{
$this->code=$code;
$this->nom=$nom;
$this->prenom=$prenom;
$this->sexe=$sexe;
$this->ddn=$ddn;
$this->LieuNaissance=$LieuNaissance;
$this->adresse=$adresse;
$this->Ville=$Ville;
$this->Nationalite=$Nationalite;
$this->Email=$Email;
}

public static function newClient($client)
{
return new Client($client['numero'],$client['nom'],$client['prenom'],$client['sexe'],$client['ddn'],$client['LieuNaissance'],$client['adresse'],$client['Ville'],$client['Nationalite'],$client['Email']);
}

public function getCode()
{
return $this->code;
}

public function getNom()
{
return $this->nom;
}

public function setNom($nom)
{
$this->nom=$nom;
}

public function getPrenom()
{
return $this->prenom;
}

public function setPrenom($prenom)
{
$this->prenom=$prenom;
}

public function getSexe()
{
return $this->sexe;
}

public function setSexe($sexe)
{
$this->sexe=$sexe;
}

public function getDdn()
{
return $this->ddn;
}

public function setDdn($ddn)
{
$this->ddn=$ddn;
}

public function getAdresse()
{
return $this->adresse;
}

public function setAdresse($adresse)
{
$this->adresse=$adresse;
}

public function toString()
{
return "Code : ".$this->code." Nom = ".$this->nom." Prénom = ".$this->prenom." Sexe = ".$this->sexe." DDN = ".$this->ddn.
		" LieuNaissance = ".$this->LieuNaissance." adresse = ".$this->adresse." Ville = ".$this->Ville." Nationalite = ".$this->Nationalite.
		" Email = ".$this->Email.'<br>';
}

public function afficher()
{
echo $this->toString();
}

public function toArray()
{
return array($this->code,$this->nom,$this->prenom,$this->sexe,$this->ddn,$this->LieuNaissance,$this->adresse,$this->Ville,$this->Nationalite,$this->Email);
}

public function toAssociateArray()
{
return array('numero'=>'','nom'=>$this->nom,'prenom'=>$this->prenom,'sexe'=>$this->sexe,'DateNaissance'=>$this->ddn,'LieuNaissance'=>$this->LieuNaissance,'Adresse'=>$this->adresse,'Ville'=>$this->Ville,'Nationalite'=>$this->Nationalite,'Email'=>$this->Email);
}

public function save()
{
	$client=$this->toAssociateArray();
	include 'modele_ajout.php';
}

public static function load($code)
{
	$CodeClt=$code;
	include 'modele_one.php';
	return Client::newClient($client);

}

}


//$c=new Client(1,"zellou","ahmed","M","2010-12-12","rabat","rabatadresse","rabatville","mar","zel@zel");
//$c->afficher();
//print_r($c->toAssociateArray());
//$c->save();

$c=Client::load(6);
$c->afficher();
?>