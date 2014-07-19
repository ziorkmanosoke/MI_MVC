<?php
/*
 */
class ConnectionCompte {
	private $BD;
	private $motPasse;
	private $courriel;
	private $infoCompte;

    
	function __construct ($courriel ="", $mp="")
	{
		$this->BD = BD::getInstance("e1395529","dbconnect");
		$this->setCourriel($courriel);
		$this->setMotPasse($mp);
		$this->setInfoCompte();
	}

		
	/*	get et set de IDCompte 
	 */
	public function getIDCompte() 
	{	
		if (isset($this->infoCompte['ID_utilisateurs']))
		{
			return $this->infoCompte['ID_utilisateurs'];
		}
		else
		{
			return "";
		}
		
	}

	public function getPrenomCompte() 
	{	
		if (isset($this->infoCompte['prenom']))
		{
			return $this->infoCompte['prenom'];
		}
		else
		{
			return "";
		}
		
	}

	public function getNomCompte() 
	{	
		if (isset($this->infoCompte['nom']))
		{
			return $this->infoCompte['nom'];
		}
		else
		{
			return "";
		}
		
	}

	/*	get et set de courriel 
	 */
	public function getCourriel() 
	{	
		return $this->courriel;
	}

	private function setCourriel($str) 
	{	
		$this->courriel = $str;
	}

	/*	get et set de mot de passe 
	 */
	public function getMotPasse() 
	{	
		return hash('sha256',$this->motPasse);
	}

	private function setMotPasse($str) 
	{	
		$this->motPasse = $str;
	}

	private function requeteBD() 
	{	
		if($this->motPasse == "" || $this->courriel =="")
		{
			return "";
		}
		else
		{
			$req = "SELECT * FROM `mi_utilisateurs` WHERE courriel = '".$this->getCourriel()."' AND mot_de_passe = '".$this->getMotPasse()."';";
			//var_dump($req);
			$idp = $this->BD->getBD()->query($req);
			//var_dump($idp);
			//echo "<pre>".print_r($idp,true)."</pre>";
			return $idp;
		}
	}

	private function setInfoCompte()
	{
		$mysql = $this->requeteBD();
		//echo "<pre>".print_r($mysql,true)."</pre>";
		if ($mysql == "")
		{
			$this->infoCompte = "";
		}
		else
		{
			$this->infoCompte = mysqli_fetch_assoc($mysql);
			//echo "<pre>".print_r($this->infoCompte,true)."</pre>";
		}
		
	}

	public function getInfoCompte()
	{
		return $this->infoCompte;
	}
}
?>