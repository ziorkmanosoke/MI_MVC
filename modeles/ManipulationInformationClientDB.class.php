<?php
/*

 */
class ManipulationInformationClientDB {
	
    private $formulaire;
    private $BD;
    private $provinceID;
    private $villeID;
    private $adresseID;

	function __construct ($objet)
	{
		$this->setFormulaire($objet);
		$this->BD = BD::getInstance("e1395342","dbconnect");
	}
	
		
	/**
	 * get et set de lobjet formulaire
	 */
	public function getFormulaire() 
	{
		return $this->formulaire;
	}

	/*
	*/
	private function setFormulaire($obj) 
	{
			$this->formulaire = $obj;		
	}

	public function getProvinceID() 
	{
		//echo $this->provinceID;
		return $this->provinceID;
	}


	public function setProvinceID()
	{
		$req = "SELECT ID_province FROM mi_province WHERE province = '".$this->getFormulaire()->getProvince()."'";
		$idp = $this->BD->getBD()->query($req);
		/*verifie si on a trouve au moin un resultat*/
		if($idp->num_rows <= 0 && $idp->num_rows > 1)
        {
            //echo "Requete vide";
            return "";
        }
        else
        {
            //echo "Requete success";
            $id = mysqli_fetch_assoc($idp);
            //echo $id['ID_province'];
            $this->provinceID = $id['ID_province'];
        }
	}


	/*verifie si ville existe autrement la creez et retourne sa valeur ID*/
	public function getVilleID()
	{
		$req = "SELECT * FROM mi_ville WHERE ville = '".$this->getFormulaire()->getVille()."' AND ID_province  ='".$this->getProvinceID()."'";
		$idp = $this->BD->getBD()->query($req);
		//var_dump($idp);

		if($idp->num_rows <= 0)
		{
			//echo "ville non repertorier";
			//$reqInsert = "INSERT INTO 'mi_ville' ('ID_ville','ID_province','ville') VALUES  ( NULL, ".$this->getProvinceID()." , '".$this->getFormulaire()->getVille()."');";
$reqInsert ="INSERT INTO `mi_ville` (`ID_ville`, `ID_province`, `ville`) VALUES (NULL, ".$this->getProvinceID().", '".$this->getFormulaire()->getVille()."');";
//var_dump($reqInsert);
			$this->BD->getBD()->query($reqInsert);
			return $this->DB->getBD()->insert_id; 
		}
		else
		{
			//echo "trouve";
			$info = mysqli_fetch_assoc($idp);
			return $info['ID_ville'];
		}
	}

	/*Verifie si le nom utilisateur est disponible dans la db et retourne true si disponible et false si utlise*/
	private function verificationDisponibilite()
	{
		$req = "SELECT * FROM `mi_utilisateurs` WHERE nom_utilisateur = '".$this->formulaire->getNomUtilisateur()."' AND courriel = '".$this->formulaire->getCourriel()."';";
		$idp = $this->BD->getBD()->query($req);
		if($idp->num_rows <= 0)
		{
			//echo "valide";
			return true;
			//return $this->DB->getBD()->insert_id; 
		}
		else
		{
			//echo "utilise";
			return false;
			//$info = mysqli_fetch_assoc($idp);
			//return $info['ID_ville'];
		}
	}
	/*insert le formulaire dans la db si lutilisateur n'est pas deja utiliser*/
	public function insertUtilisateur()
	{
		$userDispo = $this->verificationDisponibilite();
		if ($userDispo)
		{
			echo "Disponible<br/>";
			$req = "INSERT INTO `mi_utilisateurs` (`ID_utilisateurs` ,`nom` ,`prenom` ,`courriel` ,`mot_de_passe` ,`sexe` ,`DOB` ,`ID_adresse` ,`ID_forfait` ,`ID_agence` ,`ID_photo` ,`ID_role` ,`telephone_utilisateur` ,`nom_utilisateur`)VALUES (NULL , '".$this->formulaire->getNom()."', '".$this->formulaire->getPrenom()."', '".$this->formulaire->getCourriel()."', '".$this->formulaire->getMotDePasse()."', '".$this->formulaire->getSexe()."', '".$this->formulaire->getDateNaissance()."', '0', '0', '0', '0', '0', '".$this->formulaire->getTelephone()."', '".$this->formulaire->getNomUtilisateur()."');";
			//var_dump($req);
			$this->BD->getBD()->query($req);
			return true;
		}
		else
		{
			echo "Pas Disponible<br/>";
			return false;
		}
		echo "oups pas supposer etre la ";
	}

}

?>