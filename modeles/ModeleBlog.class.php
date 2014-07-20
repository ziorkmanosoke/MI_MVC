<?php 
/**
* BASE SUR EXEMPLE FAIT PAR Jonathan Martel
* 
*/
	class ModeleBlog {
	private $DB;
    
	function __construct ()
	{
            $this->DB = BD::getInstance("e1395342", "dbconnect");
	}
	
		public function getBillets() 
	{
		$aArticles = Array();
		$res = $this->DB->getBD()->query("Select * from mi_billets");
		if($this->DB->getBD()->affected_rows >0){
                    
                    while($row = $res->fetch_array(MYSQLI_ASSOC)){
                        $aArticles[] = $row;    
                    }
		}
		return $aArticles;
	}
	public function insertBillets($data) 
	{

		$this->DB->getBD()->query("insert into mi_billets (ID_user , titre_billet , contenue_billet) VALUES ('1' ,'". $data['topic'] ."' , '". $data['monText'] ."')");
	}
	public function insertCommentaire($data) 
	{
		
		$this->DB->getBD()->query("insert into mi_commentaire (ID_user , id_billet , contenu_commentaire) VALUES ('1' ,'". $data['idbillet'] ."' , '". $data['monCommentaire'] ."')");

	}
		public function getUser($id){
		$res = $this->DB->getBD()->query("Select prenom,nom from mi_utilisateurs where ID_utilisateurs = '".$id ."'");
		if($this->DB->getBD()->affected_rows >0)
		{
			
                    while($row = $res->fetch_array(MYSQLI_ASSOC)){
                        $user[] = $row;    
                    }
		}
		$Auser= $user[0]['prenom']." ". $user[0]['nom'];
		return $Auser;
		}
		public function getCommentaires($idbillet) 
	{
		$aCommentaires = Array();
		$res = $this->DB->getBD()->query("Select * from mi_commentaire where id_billet ='".$idbillet."';") ;
		if($this->DB->getBD()->affected_rows >0)
		{

                    while($row = $res->fetch_array(MYSQLI_ASSOC)){
                        $aCommentaires[] = $row;    
                    }
		}
		return $aCommentaires;
	}
	
	
	}
	
	
	
	
	?>