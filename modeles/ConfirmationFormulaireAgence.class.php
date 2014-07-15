<?php
/**

 */
class ConfirmationFormulaireAgence {
	/*declaration des variables de la classes*/
    private $nom;
    private $courriel;
    private $siteweb;
    private $telephone;
    private $nbrue;
    private $nomrue;
    private $ville;
    private $province;

	function __construct ($nom = '', $courriel = '', $siteweb = '', $telephone ='', $nbrue ='', $nomrue='' , $ville='', $province='')
	{  
        $this->setNom($nom);
        $this->setCourriel($courriel);
        $this->setSiteWeb($siteweb);
        $this->setTelephone($telephone);
        $this->setNumeroRue($nbrue);
        $this->setNomRue($nomrue);
        $this->setVille($ville);
        $this->setProvince($province);
        
        //$this->test($this->getNom());
        //$this->test($this->getPrenom());
        //$this->test($this->getMotDePasse());
        //$this->test($this->getConfMotDePasse());
        //$this->test($this->getSexe());
        //$this->test($this->getDateNaissance());
        //$this->test($this->getCourriel());
        //$this->test($this->getVille());
        //$this->test($this->getProvince());  
        
        //$this->validation();
	}
    
    /*get et set de nom de la compagnie*/
    public function getNom()
    {
        return $this->nom;
    }
    
    private function setNom($str)
    {
       $this->nom = $str; 
    }
    
    /*get et set de courriel*/
    public function getCourriel()
    {
        return $this->courriel;
    }
    
    private function setCourriel($str)
    {
        $this->courriel = $str;
    }
     
    /*get et set de site web*/
    public function getSiteWeb()
    {
        return $this->siteweb;
    }
    
    private function setSiteWeb($str)
    {
        $this->siteweb = $str;
    }
    
    
    /*get et set du numero de telephone*/
    public function getTelephone()
    {
        return $this->telephone;
    }
    
    private function setTelephone($str)
    {
        $this->telephone = $str;
    }
    
    /*get et set de numero de la rue*/
    public function getNumeroRue()
    {
        return $this->nbrue;
    }
    
    private function setNumeroRue($str)
    {
        $this->nbrue = $str;
    }
    
    /*get et set du nom de la rue*/
    public function getNomRue()
    {
        return $this->nomrue;
    }
    
    private function setNomRue($str)
    {
        $this->nomrue = $str;
    }
     
    /*get et set de ville*/
    public function getVille()
    {
        return $this->ville;
    }
    
    private function setVille($str)
    {
        $this->ville = $str;
    }
    
    /*get et set de province*/
    public function getProvince()
    {
        return $this->province;
    }
    
    private function setProvince($str)
    {
        $this->province = $str;
    }
    
    
    
    
    
    
    
    
    
    /*function qui va valider si les informations recu son correcte dependant des normes pre établis et retourne true ou false si tous est correcte*/
    /******/
    public function validation()
    {
        $validationNom = $this->verificationAlpha($this->getNom());
        if ($validationNom != 1)
        {
            echo "nom fail";
            return false;
        }
        $validationPrenom = $this->verificationAlpha($this->getPrenom());
        if ($validationPrenom != 1)
        {
            echo "prenom fail";
            return false;
        }
        $validationCourriel = $this->verificationEmail($this->getCourriel());
        if ($validationCourriel != 1)
        {
            echo "courriel fail";
            return false;
        }
        $validationDateDeNaissance = $this-> verificationDoB($this->getDateNaissance());
        if ($validationDateDeNaissance != 1)
        {
            echo "dob fail";
            return false;
        }
        $validationVille = $this->verificationAlphaEx($this->getVille());
        if ($validationVille != 1)
        {
            echo "ville fail";
            return false;
        }
        $validationProvince = $this->verificationAlphaEx($this->getProvince());
        if ($validationProvince != 1)
        {
            echo "province fail";
            return false;
        }
        $motDePasse = $this->validationMotDePasse($this->getMotDePasse(), $this->getConfMotDePasse());
        if ($motDePasse != 1)
        {
            echo "mp fail";
            return false;
        }
        /*si tous les test on passer avec success, retourne vrai*/
        return true;
    }
   
    public function test($i)
    {
        //echo "<pre>".print_r($i,true)."</pre>";
        var_dump($i);
        echo "<br/>";
    }
	
	/**
	 * @access public
	 * @return boolean
	 */
   
    /*source: http://www.phpsources.org/scripts609-PHP.htm*/
    public function verificationAlpha($str){
        preg_match("/([^A-Za-z ])/",$str,$result);
        //On cherche toutt les caractères autre que [A-z] 
        //echo "<pre>".print_r($result,true)."</pre>";
        if(!empty($result)){//si on trouve des caractère autre que A-z
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
    
    /*inspirer de: http://www.phpsources.org/scripts609-PHP.htm*/
    public function verificationNum($str){
        preg_match("/([^0-9])/",$str,$result);
        //On cherche tout les caractères autre que [0-9]
        //echo "<pre>".print_r($result,true)."</pre>";
        if(!empty($result)){//si on trouve des caractère autre que 0-9
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
    
    
    public function verificationAlphaEx($str){
        preg_match("/[^A-Za-zéÉîÎ-]/",$str,$result);
        //On cherche tout les caractères autre que [0-9]
        //echo "<pre>".print_r($result,true)."</pre>";
        if(!empty($result)){//si on trouve des caractère autre que 0-9
            return false;
        }
        return true;
    }
    
    public function verificationDoB($str)
    {
        preg_match("/^(19|2[0-9])[0-9]{2}[\/ -](0[1-9]|1[0-2])[\/ -](0[1-9]|[1-2][0-9]|3[0-1])$/",$str,$result);
        //On cherche tout les caractères autre que [0-9]
        //echo "<pre>".print_r($result,true)."</pre>";
        if(empty($result)){//si on trouve des caractère autre que 0-9
            return false;
        }
        return true;
    }
    
    
    public function validationMotDePasse($mp, $cmp)
    {
        /*regarde si les */
        if (($this->verificationAlphaNum($mp)) && ($this->verificationAlphaNum($cmp)))
        {
            if ($mp == $cmp)
            {
                return true;
            }
            else
            {
                return false;
            }
        }
        
    }
}
