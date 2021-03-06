<?php
/*

 */
class ConfirmationFormulaireInscription {
	/*declaration des variables de la classes*/
    private $nom;
    private $prenom;
    private $mp;
    private $cmp;
    private $sexe;
    private $dob;
    private $courriel;
    private $ville;
    private $province;

    private $nomutilisateur;
    private $telephone;
    private $norue;
    private $nomrue;
    private $codepostal;

	function __construct ($nom = '', $prenom = '', $mp = '', $cmp ='', $sexe ='', $dob='', $courriel='', $ville='', $province='',
        $utilisateur='', $telephone='', $nbrue = '', $nomrue='', $codepostal='')
	{  
        $this->setNom($nom);
        $this->setPrenom($prenom);
        $this->setMotDePasse($mp);
        $this->setConfMotDePasse($cmp);
        $this->setSexe($sexe);
        $this->setDateNaissance($dob);
        $this->setCourriel($courriel);
        $this->setVille($ville);
        $this->setProvince($province);
        $this->setNomRue($nomrue);
        $this->setCodePostal($codepostal);
        $this->setNumeroDeRue($nbrue);
        $this->setNomUtilisateur($utilisateur);
        $this->setTelephone($telephone);
	}
    
    /*get et set de nom*/
    public function getNom()
    {
        return $this->nom;
    }
    
    private function setNom($str)
    {
       $this->nom = $str; 
    }
    
    /*get et set de prenom*/
    public function getPrenom()
    {
        return $this->prenom;
    }
    
    private function setPrenom($str)
    {
        $this->prenom = $str;
    }
    
    /*get et set de mp*/
    public function getMotDePasse()
    {
        return hash('sha256',$this->mp);
    }
    
    private function setMotDePasse($str)
    {
        $this->mp = $str;
    }
    
    /*get et set de cmp*/
    public function getConfMotDePasse()
    {
        return hash('sha256',$this->cmp);
    }
    
    private function setConfMotDePasse($str)
    {
        $this->cmp = $str;
    }
    
    /*get et set de sexe*/
    public function getSexe()
    {
        return $this->sexe;
    }
    
    private function setSexe($str)
    {
        $this->sexe = $str;
        if($this->sexe == "homme")
        {
            $this->sexe = 'M';
        }
        else if ($this->sexe == "femme")
        {
            $this->sexe = 'F';
        }
        else
        {
            $this->sexe = 'A';
        }
    }
    
    /*get et set de dob*/
    public function getDateNaissance()
    {
        return $this->dob;
    }
    
    private function setDateNaissance($str)
    {
        $this->dob = $str;
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

    /*get et set de telephone*/
    public function getTelephone()
    {
        return $this->telephone;
    }
    
    private function setTelephone($str)
    {
        $this->telephone = $str;
    }

    /*get et set de nom utilisateur*/
    public function getNomUtilisateur()
    {
        return $this->nomutilisateur;
    }
    
    private function setNomUtilisateur($str)
    {
        $this->nomutilisateur = $str;
    }

    /*get et set de no rue*/
    public function getNumeroDeRue()
    {
        return $this->norue;
    }
    
    private function setNumeroDeRue($str)
    {
        $this->norue = $str;
    }

    /*get et set de nom de la rue*/
    public function getNomRue()
    {
        return $this->nomrue;
    }
    
    private function setNomRue($str)
    {
        $this->nomrue = $str;
    }

    /*get et set de code postal*/
    public function getCodePostal()
    {
        return $this->codepostal;
    }
    
    private function setCodePostal($str)
    {
        $this->codepostal = $str;
    }

    /*function qui va valider si les informations recu son correcte dependant des normes pre établis et retourne true ou false si tous est correcte*/
    public function validation()
    {
        $validationNom = $this->verificationAlpha($this->getNom());
        if ($validationNom != 1)
        {
            //echo "nom fail";
            return false;
        }
        $validationPrenom = $this->verificationAlpha($this->getPrenom());
        if ($validationPrenom != 1)
        {
            //echo "prenom fail";
            return false;
        }
        $validationCourriel = $this->verificationEmail($this->getCourriel());
        if ($validationCourriel != 1)
        {
            //echo "courriel fail";
            return false;
        }
        $validationDateDeNaissance = $this-> verificationDoB($this->getDateNaissance());
        if ($validationDateDeNaissance != 1)
        {
            //echo "dob fail";
            return false;
        }
        $validationVille = $this->verificationAlphaEx($this->getVille());
        if ($validationVille != 1)
        {
            //echo "ville fail";
            return false;
        }
        $validationProvince = $this->verificationAlphaEx($this->getProvince());
        if ($validationProvince != 1)
        {
            //echo "province fail";
            return false;
        }
        $motDePasse = $this->validationMotDePasse($this->getMotDePasse(), $this->getConfMotDePasse());
        if ($motDePasse != 1)
        {
            //echo "mp fail";
            return false;
        }
        $validationNumeroRue = $this->verificationNum($this->getNumeroDeRue());
        if ($validationNumeroRue != 1)
        {
            //echo "numero rue fail";
            return false;
        }
        $validationNomRue = $this->verificationAlphaEx($this->getNomRue());
        if ($validationNomRue != 1)
        {
            //echo "nom rue fail";
            return false;
        }
        $validationNomutilisateur = $this->verificationAlphaNum($this->getNomUtilisateur());
        if ($validationNomutilisateur != 1)
        {
            //echo "nom utilisateur fail";
            return false;
        }
        $validationTelephone = $this->verificationNum($this->getTelephone());
        if ($validationTelephone != 1)
        {
            //echo "telephone fail";
            return false;
        }
        $validationCodePostal = $this->verificationCodepostal($this->getCodePostal());
        if ($validationCodePostal != 1)
        {
            //echo "code postal fail";
            return false;
        }
        /*si tous les test on passer avec success, retourne vrai*/
        return true;
    }
   
    public function test($i)
    {
        //echo "<pre>".print_r($i,true)."</pre>";
        //var_dump($i);
        //echo "<br/>";
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
        /*regarde si le mot de passe et sa confirmation son conforme au regex*/
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

    public function verificationCodepostal($str)
    {
        preg_match("/^[a-zA-Z][0-9][a-zA-Z][ ][0-9][a-zA-Z][0-9]$/",$str,$result);
        //On cherche tout les caractères autre que [0-9]
        //echo "<pre>".print_r($result,true)."</pre>";
        if(empty($result)){//si on trouve des caractère autre que 0-9
            return false;
        }
        return true;
    }
}
