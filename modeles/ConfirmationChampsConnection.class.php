<?php
/**
 * Class Modele
 * Template de classe modèle. Dupliquer et modifier pour votre usage.
 * 
 * @author Jonathan Martel
 * @version 1.0
 * @update 2013-12-11
 * @license Creative Commons BY-NC 3.0 (Licence Creative Commons Attribution - Pas d’utilisation commerciale 3.0 non transposé)
 * @license http://creativecommons.org/licenses/by-nc/3.0/deed.fr
 * 
 */
class ConfirmationChampsConnection {
	
    private $courriel;
    private $mp;

	function __construct ($courriel, $mp)
	{
		$this->setCourriel($courriel);
		$this->setMotDePasse($mp);
	}
	
	/*
	 */
	/*get et set de courriel*/
    public function getCourriel()
    {
        return $this->courriel;
    }
    
    private function setCourriel($str)
    {
        $this->courriel = $str;
    }

    /*get et set de mot de passe*/
    public function getMotDePasse()
    {
        return $this->mp;
    }
    
    private function setMotDePasse($str)
    {
        $this->mp = $str;
    }

    /*validateur qui renvoie true ou false dependant la validation des champs*/
    public function valider()
    {
    	$validationCourriel = $this->verificationEmail($this->getCourriel());
        if ($validationCourriel != 1)
        {
            echo "courriel fail";
            return false;
        }
        $motDePasse = $this->verificationAlphaNum($this->getMotDePasse());
        if ($motDePasse != 1)
        {
            echo "mp fail";
            return false;
        }
        return true;
    }

    /*source: http://www.phpsources.org/scripts609-PHP.htm*/
    public function verificationAlphaNum($str){
        preg_match("/([^A-Za-z0-9])/",$str,$result);
        //On cherche tout les caractères autre que [A-Za-z] ou [0-9]
        //echo "<pre>".print_r($result,true)."</pre>";
        if(!empty($result)){//si on trouve des caractère autre que A-Za-z ou 0-9
            return false;
        }
        return true;
    }

    //[a-zA-Z0-9_-.+]+@[a-zA-Z0-9-]+.[a-zA-Z]+/
    public function verificationEmail($str){
        $result = preg_match("/^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+.[a-zA-Z]+$/", $str, $result);
        //On cherche tout les caractères autre que [0-9]
        //echo "<pre>".print_r($result,true)."</pre>";
        if(empty($result)){//si on trouve des caractère autre que 0-9
            return false;
        }
        return true;
    }

}




?>