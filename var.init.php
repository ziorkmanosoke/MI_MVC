<?php
  /**
   * Faire l'assignation des variables ici avec les isset() ou !empty()
   */
   
   define("BASE", dirname(__FILE__));
	if(empty($_GET['requete']))
	{
		$_GET['requete'] = '';
	}
    
        if(empty($_GET['page']))
	{
		$_GET['page'] = '';
	}
        
        if(empty($_GET['section']))
	{
		$_GET['section'] = '';
	}
         
        
        
?>