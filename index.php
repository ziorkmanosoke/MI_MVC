<?php session_start(); 
    
    if(!isset($_SESSION['ID_utilisateur']))
    {
        $_SESSION['ID_utilisateur'] = NULL;
    }
    if(!isset($_SESSION['nom_utilisateur']))
    {
        $_SESSION['nom_utilisateur'] = NULL;
    }
    if(!isset($_SESSION['prenom_utilisateur']))
    {
        $_SESSION['prenom_utilisateur'] = NULL;
    }

/**
 * Fichier de lancement du MVC, Il appel le var.init et le gabarit HTML 
 * @author Jonathan Martel
 * @version 1.0
 * @update 2013-03-11
 * @license Creative Commons BY-NC 3.0 (Licence Creative Commons Attribution - Pas d’utilisation commerciale 3.0 non transposé)
 * @license http://creativecommons.org/licenses/by-nc/3.0/deed.fr
 * 
 */
	 /***************************************************/
    /** Fichier de configuration, contient l'autoloader **/
    /***************************************************/
	require_once("./config.php");
	
   /***************************************************/
    /** Initialisation des variables **/
    /***************************************************/
	require_once("./var.init.php");
   
   /***************************************************/
    /** Gabarit **/
    /***************************************************/
        require_once("./gabarit.projet.php");
   


?>
