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
        if(empty($_GET['ref']))
	{
		$_GET['ref'] = '';
	}
        if(empty($_GET['id']))
	{
		$_GET['id'] = '';
	}
        
        if(!isset($_POST['categorie']))
	{
		$_POST['categorie'] = 'tous';
	}
        
        if(!isset($_POST['typeDeBien']))
	{
		$_POST['typeDeBien'] = 'tous';
	}
        
        if(!isset($_POST['prix']))
	{
		$_POST['prix'] = '4';
	}
        if(!isset($_POST['chambres']))
	{
		$_POST['chambres'] = '0';
	}
        if(!isset($_POST['sallesDeBain']))
	{
		$_POST['sallesDeBain'] = '0';
	}
        if(!isset($_POST['FiltrerResultats']))
	{
		$_POST['FiltrerResultats'] = 'tous';
	}
        if(!isset($_POST['TrierResultats']))
	{
		$_POST['TrierResultats'] = 'moinsCher';
	}
        if(!isset($_POST['chercheTexte']))
	{
		$_POST['chercheTexte'] = '';
	}
        if(!isset($_POST['selectParPage']))
	{
		$_POST['selectParPage'] = '4';
	}

?>