<?php
/**

 */
class ConfirmationFormulaireInscription {
	
    /*
    INSERT INTO mi_utilisateurs (nom, prenom, courriel, nom_utilisateur, mot_de_passe, sexe, DOB, ID_adresse, ID_forfait, ID_agence, ID_photo, ID_role)
            VALUES ("$nom", "$prenom", "email", "bob", "abc123" , "male", 07-07-2013, 1, 1, null, null, 1);
    */
	function __construct ($nom = '', $prenom = '', $mp = '', $cmp ='', $sexe ='', $dob='', $courriel='', $ville='', $province='')
	{
        //$this->test($nom);
        //$this->test($prenom);
        //$this->test($mp);
        
        //$this->test($cmp);
        //$this->test($sexe);  
        //$this->test($dob);   
        //$this->test($courriel);  
        //$this->test($ville); 
        //$this->test($province);
        $validationNom = $this->validationNomPrenom($nom, $prenom);
        $motDePasse = $this->validationMotDePasse($mp, $cmp);
        
	}
	
    public function test($i)
    {
        var_dump($i);
        echo "<br/>";
    }
	
	/**
	 * @access public
	 * @return boolean
	 */
   
    /*source: http://www.phpsources.org/scripts609-PHP.htm*/
    public function verificationAlpha($str){
        preg_match("/([^A-Za-z])/",$str,$result);
        //On cherche toutt les caractères autre que [A-z] 
        if(!empty($result)){//si on trouve des caractère autre que A-z
            return false;
        }
        return true;
    }

    /*source: http://www.phpsources.org/scripts609-PHP.htm*/
    public function verificationAlphaNum($str){
        preg_match("/([^A-Za-z0-9])/",$str,$result);
        //On cherche tout les caractères autre que [A-Za-z] ou [0-9]
        if(!empty($result)){//si on trouve des caractère autre que A-Za-z ou 0-9
            return false;
        }
        return true;
    }
    
    /*inspirer de: http://www.phpsources.org/scripts609-PHP.htm*/
    public function verificationNum($str){
        preg_match("/([^0-9])/",$str,$result);
        //On cherche tout les caractères autre que [0-9]
        if(!empty($result)){//si on trouve des caractère autre que 0-9
            return false;
        }
        return true;
    }
    //[a-zA-Z0-9_-.+]+@[a-zA-Z0-9-]+.[a-zA-Z]+/
    public function verificationEmail($str){
        preg_match("/[a-zA-Z0-9_-.+]+@[a-zA-Z0-9-]+.[a-zA-Z]+/",$str,$result);
        //On cherche tout les caractères autre que [0-9]
        if(!empty($result)){//si on trouve des caractère autre que 0-9
            return false;
        }
        return true;
    }
    
    
    
    
    public function validationMotDePasse($mp, $cmp)
    {
        /*condition, si $mp et $cmp son pareil, ainsi que sil ne contienne que des valeur alphabetique et numerique*/
        if (($mp == $cmp) && ($this->verificationAlphaNum($mp)) && ($this->verificationAlphaNum($cmp)))
        {
            return true;
        }
        else
        {
            return false;
        }
    }
}
