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
    private function gererAgenceImmobiliere(){

        if(isset($_GET['page'])){
            switch ($_GET['page']) {

                case 'agenceAccueil':
                    $this->agenceAccueil();
                    break;

                default:
                    $this->agenceAccueil();
                    break;
            }
        }else{
            //$this->interfaceLogin();
        }
    }  
      
    private function agenceAccueil()
    {
        $page = new agenceAccueil();
        $page->afficheAgenceAccueil();
    }

       
}
?>















