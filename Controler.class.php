<?php
/**
 * Class Controler
 * Gère les requêtes HTTP
 * 
 * @author Jonathan Martel
 * @version 1.0
 * @update 2013-12-10
 * @license Creative Commons BY-NC 3.0 (Licence Creative Commons Attribution - Pas d’utilisation commerciale 3.0 non transposé)
 * @license http://creativecommons.org/licenses/by-nc/3.0/deed.fr
 * 
 */

class Controler 
{
	
        /**
         * Traite la requête
         * @return void
         */
        public function gerer()
        {   
            switch ($_GET['page']) {
                    case 'accueil':
                            $this->afficherAccueil();
                            break;
                    case 'creerCompte':
                            $this->creationCompte();
                            break; 
                    case 'forfait':
                            $this->afficherForfait();
                            break; 
                    case 'blog':
                            $this->afficherBlog();
                            break;  
                    case 'choixForfait':
                            $this->afficherChoixforfait();
                            break;
                    case 'infosCompte':
                            $this->afficherInformationCompte();
                            break;
                    
                    case 'validationFormulaireClient':
                            $this->validerFormulaireClient();
                            break;
                    case 'validationFormulaireAgence':
                            $this->validerFormulaireAgence();
                            break;
                    
                    case 'creerAgence':
                            $this->creationAgence();
                            break;
                    case 'ForfaitParticulier':
                            $this->afficherForfaitParticulier();
                            break;
                    case 'ForfaitEntreprise':
                            $this->afficherForfaitEntreprise();
                            break;  
                    case 'connexionCompte':
                            $this->connexionCompte();
                            break; 
                    case 'deconnexionCompte':
                            $this->deconnexionCompte();
                            break;         
                    default:
                            $this->afficherAccueil();
                            break;
            }
        
        }  
        
        
        private function afficherAccueil()
        {
            $oNav = new Nav();
            $oNav->afficheNavigateur('accueil');

            $page = new Accueil();
            $page->afficheContenuAccueil();
            
        }

            private function creationCompte() {
            
            $oNav = new Nav();
            $oNav->afficheNavigateur('');
            
            $page = new creerCompte();
            $page->afficheCreerCompte();
            

        }
        
        private function afficherForfait() {
            
            $oNav = new Nav();
            $oNav->afficheNavigateur('forfait');
            
            $page = new Forfait();
            $page->afficheContenuForfait();
            

        }
        
        
        private function afficherBlog() {
          
            $oNav = new Nav();
            $oNav->afficheNavigateur();
            
            $page = new Blog();
            $page->afficheContenuBlog();
            

        }
    
        private function afficherChoixforfait() {
          
            $oNav = new Nav();
            $oNav->afficheNavigateur();
            
            $page = new choixForfait();
            $page->afficheChoixForfait();
            

        }
    
        private function afficherInformationCompte() {
          
            $oNav = new Nav();
            $oNav->afficheNavigateur();
            
            $page = new infosCompte();
            $page->afficheInformationCompte();
            

        }
    
        private function creationAgence() {
          
            $oNav = new Nav();
            $oNav->afficheNavigateur();
            
            $page = new creerAgence();
            $page->afficheCreerAgence();
            

        }
    
        private function afficherForfaitParticulier() {
          
            $oNav = new Nav();
            $oNav->afficheNavigateur();
            
            $page = new ForfaitParticulier();
            $page->afficheContenuForfait();
            

        }
    
        private function afficherForfaitEntreprise() {

                $oNav = new Nav();
                $oNav->afficheNavigateur();

                $page = new ForfaitEntreprise();
                $page->afficheContenuForfait();


        }
    
        
        private function validerFormulaireClient()
        {
            $formulaire = new ConfirmationFormulaireInscription($_POST["nom"], $_POST["prenom"], $_POST["mp"], $_POST["cmp"], 
                $_POST["sexe"], $_POST["dob"], $_POST["courriel"], $_POST["ville"], $_POST["province"], $_POST["nomUtilisateur"],
                $_POST["telephoneUtilisateur"], $_POST["nbrue"], $_POST["nomrue"], $_POST["codePostal"]);
            $validation = $formulaire->validation();
            
            //echo "<pre>".print_r($formulaire,true)."</pre>";
            //var_dump($validation);
            if($validation)
            {
                echo "SUCCESS";
                //Un objet va gerer le formulaire et envoyer dans db les informations qui son correct
                $ManipulationClient = new ManipulationInformationClientDB($formulaire);
                $ManipulationClient->insertUtilisateur();

                $this->afficherChoixforfait();
                //echo "<pre>".print_r($ManipulationClient,true)."</pre>";
                //echo $Manipulation->getFormulaire()->getNom();
                //$req = "INSERT INTO mi_utilisateurs (nom, prenom, courriel, mot_de_passe, sexe, DOB, ID_adresse, ID_forfait, ID_agence, ID_photo, ID_role)" .  "VALUES  ( '".$formulaire->getNom()."' , '".$formulaire->getPrenom()."' , '".$formulaire->getCourriel()."' , '".$formulaire->getMotDePasse()."' , '".$formulaire->getSexe()."' , '".$formulaire->getDateNaissance()."' , 1, 0, 0, 0, 0)";
                //$req = "SELECT * FROM mi_province WHERE province = '".$formulaire->getProvince()."'";
                //$req = "SELECT * FROM mi_ville WHERE ville = '".$formulaire->getVille()."'";
                //echo "PROVINCE<br/>";
                //echo "<pre>".print_r($ManipulationClient->getProvinceID(),true)."</pre>";
                //echo "VILLE<br/>";
                //echo "<pre>".print_r($ManipulationClient->getVilleID(),true)."</pre>";
                //echo $ManipulationClient->getProvinceID();
                //$log = new ConnectionCompte($ManipulationClient->getFormulaire()->getCourriel(), $ManipulationClient->getFormulaire()->getConfMotDePasse());
                //var_dump($log);
                //var_dump($ManipulationClient->getFormulaire()->getCourriel());
                //var_dump($ManipulationClient->getFormulaire()->getConfMotDePasse());
                
                //if($log->getInfoCompte() == NULL)
                //{

                   // echo "test NULL";
                    /*
                    $oNav = new Nav();
                    $oNav->afficheNavigateur('accueil');

                    $page = new Accueil();
                    $page->afficheContenuAccueil();
                    */
                /*
                }
                else
                {
                    echo "test marche";
                    $_SESSION["ID_utilisateur"] = $log->getIDCompte();
                    $_SESSION["nom_utilisateur"] = $log->getNomCompte();
                    $_SESSION["prenom_utilisateur"] = $log->getPrenomCompte();
                */
                //echo "<pre>".print_r($log->getInfoCompte(),true)."</pre>";
                //echo "id compte: ".$log->getIDCompte()."<br/>";
                
                //echo "id compte: ".$_SESSION["utilisateur"]."<br/>";
                //echo "prenom compte: ".$log->getPrenomCompte()."<br/>";
                
                //echo "nom compte: ".$log->getNomCompte()."<br/>";
                
                //echo "prenom compte: ".$_SESSION["prenom_utilisateur"]."<br/>";
                //echo "nom compte: ".$_SESSION["nom_utilisateur"]."<br/>";
                    //$this->afficherChoixforfait();
                //}    
            }
            else
            {
                //echo "ECHEC";
                $this->creationCompte();
            }
         }
        
        
        private function validerFormulaireAgence()
        {
            $formulaire = new ConfirmationFormulaireAgence($_POST["nom"], $_POST["courriel"], $_POST["siteweb"], $_POST["telephone"], $_POST["nbrue"], $_POST["nomrue"], $_POST["ville"], $_POST["province"]);
            //$validation = $formulaire->validation();
            echo "<pre>".print_r($formulaire,true)."</pre>";
            //var_dump($validation);
            
         }
        
        private function connexionCompte()
        {
            $valide = new ConfirmationChampsConnection($_POST["courrielUtilisateur"] , $_POST["MPUtilisateur"]);
            $log = new ConnectionCompte($_POST["courrielUtilisateur"] , $_POST["MPUtilisateur"]);
            //echo "login Info<br/>";
            if($log->getInfoCompte() == NULL || !$valide)
            {
                $oNav = new Nav();
                $oNav->afficheNavigateur('accueil');

                $page = new Accueil();
                $page->afficheContenuAccueil();
            }
            else
            {
                $_SESSION["ID_utilisateur"] = $log->getIDCompte();
                $_SESSION["nom_utilisateur"] = $log->getNomCompte();
                $_SESSION["prenom_utilisateur"] = $log->getPrenomCompte();

                $this->agenceAccueil();
                //echo "<pre>".print_r($log->getInfoCompte(),true)."</pre>";
                //echo "id compte: ".$log->getIDCompte()."<br/>";
                
                //echo "id compte: ".$_SESSION["utilisateur"]."<br/>";
                //echo "prenom compte: ".$log->getPrenomCompte()."<br/>";
                
                //echo "nom compte: ".$log->getNomCompte()."<br/>";
                
                //echo "prenom compte: ".$_SESSION["prenom_utilisateur"]."<br/>";
                //echo "nom compte: ".$_SESSION["nom_utilisateur"]."<br/>";
            }
        }

        private function deconnexionCompte()
        {
            $_SESSION["ID_utilisateur"] = NULL;
            $_SESSION["nom_utilisateur"] = NULL;
            $_SESSION["prenom_utilisateur"] = NULL;

            $this->afficherAccueil();
        }
        
        
        
    /****************************** Back office : Agence immobilière ********/
    public function gererAgenceImmobiliere(){
        
            switch ($_GET['section']) {

                case 'agenceAccueil':
                    $this->agenceAccueil();
                    break;
                case 'ResponsableAgence':
                    $this->profilResponsableAgence();
                    break;
                case 'infosAgence':
                    $this->informationAgence();
                    break;
                case 'statut':
                    $this->statutAgence();
                    break;
                case 'plusVisite':
                    $this->annoncePlusVisite();
                    break;
                case 'alerte':
                    $this->mesAlertes();
                    break;                
                case 'demandeur':
                    $this->demandeurBien();
                    break; 
                case 'ajoutAnnonce':
                    $this->ajouterAnnonce();
                    break;
                case 'visionner':
                    $this->visionnerAnnonce();
                    break;
                 case 'modifier':
                    $this->modifierAnnonce();
                    break;
                default:
                    $this->agenceAccueil();
                    break;
            }       
    }        
    private function agenceAccueil()
    { 
        $oNav = new Nav();
        $oNav->afficheNavigateur();
        
        $oHeaderAgence = new HeaderAgence();
        $oHeaderAgence->AfficheHeaderAgence();
        
   
        $oNavAgence= new NavAgence();
        $oNavAgence->afficheNavAgence('agenceAccueil');
   
        $page = new agenceAccueil();
        $page->afficheAgenceAccueil();
    }
    
    
    private function profilResponsableAgence()
    { 
        $oNav = new Nav();
        $oNav->afficheNavigateur();
        
        $oHeaderAgence = new HeaderAgence();
        $oHeaderAgence->AfficheHeaderAgence();
        
   
        $oNavAgence= new NavAgence();
        $oNavAgence->afficheNavAgence('ResponsableAgence');
   
        $page = new ProfilResponsableAgence();
        $page->afficheProfilResponsable();
    }

    private function informationAgence()
    { 
        $oNav = new Nav();
        $oNav->afficheNavigateur();
        
        $oHeaderAgence = new HeaderAgence();
        $oHeaderAgence->AfficheHeaderAgence();
        
   
        $oNavAgence= new NavAgence();
        $oNavAgence->afficheNavAgence('infosAgence');
   
        $page = new infosAgence();
        $page->afficheInformationAgence();
    }

    private function statutAgence()
    { 
        $oNav = new Nav();
        $oNav->afficheNavigateur();
        
        $oHeaderAgence = new HeaderAgence();
        $oHeaderAgence->AfficheHeaderAgence();
        
   
        $oNavAgence= new NavAgence();
        $oNavAgence->afficheNavAgence('statut');
   
        $page = new statutAgence();
        $page->afficheStatutAgence();
    }

    private function annoncePlusVisite()
    { 
        $oNav = new Nav();
        $oNav->afficheNavigateur();
        
        $oHeaderAgence = new HeaderAgence();
        $oHeaderAgence->AfficheHeaderAgence();
        
   
        $oNavAgence= new NavAgence();
        $oNavAgence->afficheNavAgence('plusVisite');
   
        $page = new annonceVisite();
        $page->afficheAnnonceVisite();
    }

    private function mesAlertes()
    { 
        $oNav = new Nav();
        $oNav->afficheNavigateur();
        
        $oHeaderAgence = new HeaderAgence();
        $oHeaderAgence->AfficheHeaderAgence();
        
   
        $oNavAgence= new NavAgence();
        $oNavAgence->afficheNavAgence('alerte');
   
        $page = new mesAlertes();
        $page->afficheMesAlertes();
    }
    
    private function demandeurBien(){
        $oNav = new Nav();
        $oNav->afficheNavigateur();
        
        $oHeaderAgence = new HeaderAgence();
        $oHeaderAgence->AfficheHeaderAgence();
        
   
        $oNavAgence= new NavAgence();
        $oNavAgence->afficheNavAgence('demandeur');
   
        $page = new demandeursBien();
        $page->afficheDemandeurBien();
    }
    
    private function ajouterAnnonce(){

        $oNav = new Nav();
        $oNav->afficheNavigateur();
        
        $oHeaderAgence = new HeaderAgence();
        $oHeaderAgence->AfficheHeaderAgence();
        
   
        $oNavAgence= new NavAgence();
        $oNavAgence->afficheNavAgence();
   
        $page = new ajouterAnnonce();
        $page->formulaireAjoutAnnonce();        
    }

    private function visionnerAnnonce(){

        $oNav = new Nav();
        $oNav->afficheNavigateur();
        
        $oHeaderAgence = new HeaderAgence();
        $oHeaderAgence->AfficheHeaderAgence();
        
   
        $oNavAgence= new NavAgence();
        $oNavAgence->afficheNavAgence();
   
        $page = new visionnerAnnonce();
        $page->afficherAnnonce();        
    } 
 
     private function modifierAnnonce(){

        $oNav = new Nav();
        $oNav->afficheNavigateur();
        
        $oHeaderAgence = new HeaderAgence();
        $oHeaderAgence->AfficheHeaderAgence();
        
   
        $oNavAgence= new NavAgence();
        $oNavAgence->afficheNavAgence();
   
        $page = new modifierAnnonce();
        $page->formulaireModifierAnnonce();        
    }

}








