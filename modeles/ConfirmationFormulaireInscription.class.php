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
        $validationNom = $this->verificationAlpha($nom);
        $validationPrenom = $this->verificationAlpha($prenom);
        $validationCourriel = $this->verificationEmail($courriel);
        $validationDateDeNaissance = $this-> verificationDoB($dob);
        $validationVille = $this->verificationAlphaEx($ville);
        $validationProvince = $this->verificationAlphaEx($province);
        $motDePasse = $this->validationMotDePasse($mp, $cmp);
        
        if($validationNom && $validationPrenom && $validationCourriel && $validationVille && $validationProvince && $motDePasse && $validationDateDeNaissance)
        {
            echo "SUCCESS";
            $mp = hash('sha256', $mp)
            $req = "INSERT INTO mi_utilisateurs (nom, prenom, courriel, mot_de_passe, sexe, DOB, ID_adresse, ID_forfait, ID_agence, ID_photo, ID_role)
            VALUES ($nom, $prenom, $courriel , $mp , $sexe, $dob, 1, 1, null, null, 1)";
            requeteServeur::requeteMysql($req)
        }
        else
        {
            echo "ECHEC" ;
        }
        
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
        preg_match("/([^A-Za-z ])/",$str,$result);
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
        $result = preg_match("/^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+.[a-zA-Z]+$/", $str, $result);
        //On cherche tout les caractères autre que [0-9]
        if(empty($result)){//si on trouve des caractère autre que 0-9
            return false;
        }
        return true;
    }
    
    
    public function verificationAlphaEx($str){
        preg_match("/[^A-Za-zéÉîÎ-]/",$str,$result);
        //On cherche tout les caractères autre que [0-9]
        if(!empty($result)){//si on trouve des caractère autre que 0-9
            return false;
        }
        return true;
    }
    
    public function verificationDoB($str)
    {
        preg_match("/^(19|2[0-9])[0-9]{2}[\/ -](0[1-9]|1[0-2])[\/ -](0[1-9]|[1-2][0-9]|3[0-1])$/",$str,$result);
        //On cherche tout les caractères autre que [0-9]
        if(empty($result)){//si on trouve des caractère autre que 0-9
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
