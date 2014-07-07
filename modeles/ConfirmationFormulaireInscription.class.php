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
        $validationNom $this->validationNomPrenom($nom, $prenom);
        $motDePasse = $this->validationMotDePasse($mp, $cmp);
        
	}
	
    public function test($i)
    {
        var_dump($i);
        echo "<br/>";
    }
    
	function __destruct ()
	{
		
	}
		
	/**
	 * @access public
	 * @return boolean
	 */
	public function validationNom($n) 
	{
        //for($i = 0; $i< $)
	}
    
    public function validationMotDePasse($mp, $cmp)
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
