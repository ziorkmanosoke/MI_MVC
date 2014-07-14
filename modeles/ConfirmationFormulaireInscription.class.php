<?php
/**

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

	function __construct ($nom = '', $prenom = '', $mp = '', $cmp ='', $sexe ='', $dob='', $courriel='', $ville='', $province='')
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
        
        $this->test($this->getNom());
        $this->test($this->getPrenom());
        $this->test($this->getMotDePasse());
        $this->test($this->getConfMotDePasse());
        $this->test($this->getSexe());
        $this->test($this->getDateNaissance());
        $this->test($this->getCourriel());
        $this->test($this->getVille());
        $this->test($this->getProvince());  
        
        $this->validation();
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
        return $this->mp;
    }
    
    private function setMotDePasse($str)
    {
        $this->mp = $str;
    }
    
    /*get et set de cmp*/
    public function getConfMotDePasse()
    {
        return $this->cmp;
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
    
    /*function qui va valider si les informations recu son correcte dependant des normes pre établis et retourne true ou false si tous est correcte*/
    public function validation()
    {
        /*        
$this->test($this->getNom());
        $this->test($this->getPrenom());
        $this->test($this->getMotDePasse());
        $this->test($this->getConfMotDePasse());
        $this->test($this->getSexe());
        $this->test($this->getDateNaissance());
        $this->test($this->getCourriel());
        $this->test($this->getVille());
        $this->test($this->getProvince());  
        */
        $validationNom = $this->verificationAlpha($this->getNom());
        $validationPrenom = $this->verificationAlpha($this->getPrenom());
        $validationCourriel = $this->verificationEmail($this->getCourriel());
        $validationDateDeNaissance = $this-> verificationDoB($this->getDateNaissance());
        $validationVille = $this->verificationAlphaEx($this->getVille());
        $validationProvince = $this->verificationAlphaEx($this->getProvince());
        $motDePasse = $this->validationMotDePasse($this->getMotDePasse(), $this->getConfMotDePasse());
        
        //return $this->valide($validationNom && $validationPrenom && $validationCourriel && $validationVille && $validationProvince && $motDePasse && $validationDateDeNaissance);
    }
    
    
    public function valide($validationNom ="", $validationPrenom ="", $validationCourriel ="", $validationVille ="", $validationProvince ="", $motDePasse ="", $validationDateDeNaissance ="")
    {
        $this->test($validationNom);
        $this->test($validationPrenom);
        $this->test($validationCourriel);
        $this->test($validationVille);
        $this->test($validationProvince);
        $this->test($validationProvince);
        $this->test($validationDateDeNaissance);
        $this->test($motDePasse);
        
        if ($validationNom && $validationPrenom && $validationCourriel && $validationVille && $validationProvince && $motDePasse && $validationDateDeNaissance)
        {
            return true;
        }
        else
        {
            return false;
        }
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
