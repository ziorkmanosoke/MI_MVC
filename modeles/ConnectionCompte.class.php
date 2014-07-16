<?php
/*
 */
class ConnectionCompte {
	private $BD;
	private $motPasse;
	private $courriel;

    
	function __construct ($courriel ="", $mp="")
	{
		$this->BD = BD::getInstance("e1395342","dbconnect");
		$this->setCourriel($courriel);
		$this->setMotPasse($mp);
		$this->requeteBD();
	}

		
	/*	get et set de IDCompte 
	 */
	public function getIDCompte() 
	{	
		
	}

	private function setIDCompte() 
	{	
		
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
		return $this->hash('sha256',$this->motPasse);
	}

	private function setMotPasse($str) 
	{	
		$this->motPasse = $str;
	}

	private function requeteBD() 
	{	
		$req = "SELECT * FROM `mi_utilisateurs` WHERE courriel = '".$this->getCourriel()."' AND mot_de_passe = '".$this->getMotPasse()."';";
		var_dump($req);
		$idp = $this->BD->getBD()->query($req);
		var_dump($idp);
	}
}




?>