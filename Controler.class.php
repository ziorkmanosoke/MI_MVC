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








