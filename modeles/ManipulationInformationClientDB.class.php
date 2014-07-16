<?php
/*

 */
class ManipulationInformationClientDB {
	
    private $formulaire;
    private $BD;
    private $provinceID;

	function __construct ($objet)
	{
		$this->setFormulaire($objet);
		$this->BD = BD::getInstance("e1395342","dbconnect");
		$this->setProvinceID();
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
		var_dump($idp);

		if($idp->num_rows <= 0)
		{
			//echo "ville non repertorier";
			//$reqInsert = "INSERT INTO 'mi_ville' ('ID_ville','ID_province','ville') VALUES  ( NULL, ".$this->getProvinceID()." , '".$this->getFormulaire()->getVille()."');";
$reqInsert ="INSERT INTO `mi_ville` (`ID_ville`, `ID_province`, `ville`) VALUES (NULL, ".$this->getProvinceID().", '".$this->getFormulaire()->getVille()."');";
var_dump($reqInsert);
			$this->BD->getBD()->query($reqInsert);
			return $this->DB->getBD()->insert_id; 
		}
		else
		{
			//echo "trouve";
			$info = mysqli_fetch_assoc($idp);
			return $info;
		}
	}

}




?>