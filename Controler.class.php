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
                        case 'resultats':
                                $this->afficherResultats();
                                break;
                        case 'details':
                                $this->afficherDetails();
                                break;
                        case 'ajoutBillet':
                                $this->nouveauBillet($_POST);
                                break; 
                        case 'ajoutCommentaire':
                                $this->nouveauCommentaire($_POST);
                                break; 
                        case 'ajoutImg':
                                $this->uploadPhoto($_POST);
                                break;
                        case 'choixForfait':
                            $this->afficherChoixforfait();
                            break;
                        case 'infosCompte':
                                $this->afficherInformationCompte();
                                break;
                        case 'validationForfait':
                                $this->validerFormulaire();
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
                        case 'contact':
                                $this->afficherContact();
                                break;
                        case 'apropos':
                                $this->afficheraPropos();
                                break;
                        case 'termesConditions':
                                $this->afficherTermesConditions();
                                break;
                        case 'politiquesConfidentialite':
                                $this->afficherPolitiquesConfidentialite();
                                break;
                        case 'emailTo':
                                $this->envoyerCommentaires($_POST);
                                break;
                        case 'connexionCompte':
                                $this->connexionCompte();
                                break; 
                        case 'deconnexionCompte':
                                $this->deconnexionCompte();
                                break;
                        case 'ajoutImg':
                                $this->uploadPhoto($_POST);
                                break; 
                        case 'ajoutLogo':
                                $this->uploadLogo($_POST);
                                break;
                        case 'ajoutLogoAgence':
                                $this->ajoutLogoAgence($_POST);
                                break;
                        case 'deleteImg':
                                $this->deletePhoto($_POST);
                                break;
   
                          
                            
                        default:
                                $this->afficherAccueil();
                                break;
                }
        
        }  
        
        //Accueil
        private function afficherAccueil()
        {
            $oNav = new Nav();
            $oNav->afficheNavigateur('accueil');

            $page = new Accueil();
            $page->afficheContenuAccueil();
            
        }
        
        //Resultats
        private function afficherResultats(){
            $oNav = new Nav();
            $oNav->afficheNavigateur('accueil');

            $page = new Resultats();
            $page->afficheContenuResultats();
            
        }
        
        //Details
        private function afficherDetails(){
            $oNav = new Nav();
            $oNav->afficheNavigateur('accueil');

            $page = new Details();
            $page->afficheContenuDetails();
            
        }

        
        //Compte
        private function creationCompte() {

        $oNav = new Nav();
        $oNav->afficheNavigateur('');

        $page = new creerCompte();
        $page->afficheCreerCompte();
            

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
                //echo "SUCCESS";
                //Un objet va gerer le formulaire et envoyer dans db les informations qui son correct
                $ManipulationClient = new ManipulationInformationClientDB($formulaire);
                $operation = $ManipulationClient->insertUtilisateur();

                if ($operation)
                {
                    $valide = new ConfirmationChampsConnection($_POST["courriel"] , $_POST["mp"]);
                    $log = new ConnectionCompte($_POST["courriel"] , $_POST["mp"]);
                    //echo "login Info<br/>";
                    if($log->getInfoCompte() == NULL || !$valide)
                    {
                        //echo "probleme";
                    }
                    else
                    {
                        $_SESSION["ID_utilisateur"] = $log->getIDCompte();
                        $_SESSION["nom_utilisateur"] = $log->getNomCompte();
                        $_SESSION["prenom_utilisateur"] = $log->getPrenomCompte();

                        $this->afficherChoixforfait();
                    }
                    
                }
                else
                {
                    $this->creationCompte();
                }  
            }
            else
            {
                echo "ECHEC";
                $this->creationCompte();
            }
         }
        
        
        private function validerFormulaireAgence()
        {

            $formulaire = new ConfirmationFormulaireAgence($_POST["nom"], $_POST["courriel"], $_POST["siteweb"], $_POST["telephone"], $_POST["nbrue"], $_POST["nomrue"], $_POST["ville"], $_POST["province"], $_POST["codePostal"]);
            $validation = $formulaire->validation();

            if($validation)
            {
                //echo "SUCCESS VALIDATION<br/>";
                //Un objet va gerer le formulaire et envoyer dans db les informations qui son correct
                $ManipulationClient = new ManipulationInformationAgenceDB($formulaire);
                $operation = $ManipulationClient->insertAgence();

                /*si operation recois false, il reste a la page de creation agence*/
                if ($operation)
                {
                    //echo "Id fraichement creez $operation";
                    $this->afficherForfaitEntreprise();
                }
                /*autrement il va a la page de selection de forfait car il est fonctionnel*/
                else
                {
                    $this->creationAgence();
                }
            }
            else
            {
                //echo "ECHEC VALIDATION<br/>";
                /*retourne a la page de formulaire dinscription agence*/
                $this->creationAgence();
            }
            //echo "<pre>".print_r($formulaire,true)."</pre>";
            //var_dump($validation);
            
         }
        
        
        //Forfait
        private function afficherForfait() {
            
            $oNav = new Nav();
            $oNav->afficheNavigateur('forfait');
            
            $page = new Forfait();
            $page->afficheContenuForfait();
            

        }
        private function afficherChoixforfait() {
          
            $oNav = new Nav();
            $oNav->afficheNavigateur();
            
            $page = new choixForfait();
            $page->afficheChoixForfait();
            

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
        
        //Les Page
        private function afficherContact() {

                $oNav = new Nav();
                $oNav->afficheNavigateur();

                $page = new Contact();
                $page->afficherContact();


        }
		
	private function afficheraPropos() {

                $oNav = new Nav();
                $oNav->afficheNavigateur();

                $page = new Propos();
                $page->aPropos();
        }
		
	private function afficherTermesConditions() {

                $oNav = new Nav();
                $oNav->afficheNavigateur();

                $page = new termesConditions();
                $page->afficheTermesConditions();
        }
		
	private function afficherPolitiquesConfidentialite() {

                $oNav = new Nav();
                $oNav->afficheNavigateur();

                $page = new politiquesConfidentialite();
                $page->affichePolitiquesConfidentialite();
        }
		
	private function envoyerCommentaires($data) {

                $oNav = new Nav();
                $oNav->afficheNavigateur();

                $page = new ModeleEmailTo();
                $page->emailA($data);
        }
        
        
        
        //Blog
        private function afficherBlog() {
          
            $oNav = new Nav();
            $oNav->afficheNavigateur();
            
            $page = new Blog();
            $page->afficheContenuBlog();
        }
        private function nouveauBillet($data) {
            $ajoutBillet=new ModeleBlog();
            $ajoutBillet->insertBillets($data);
            $this->afficherBlog();
        }
        private function nouveauCommentaire($data) {
            $ajoutCommentaire=new ModeleBlog();
            $ajoutCommentaire->insertCommentaire($data);
            $this->afficherBlog();
        }
        
        
        //Image
      
        private function uploadPhoto($data) {
			$ajoutPhoto=new uploadImg();
			$ajoutPhoto->televerserPhoto($data);
            $this->agenceAccueil();
        }
		
        private function ajoutLogoAgence($data) {
			$ajoutPhoto=new uploadImg();
			$ajoutPhoto->televerserLogoAgence($data);
            $this->informationAgence();
        }
        private function uploadLogo($data) {
			$ajoutPhoto=new uploadImg();
			$ajoutPhoto->televerserLogo($data);
            $this->profilResponsableAgence();
        }
	private function deletePhoto($data) {
			$deletePic=new uploadImg();
			$deletePic->supprimer($data);
            $this->agenceAccueil();
        }
        
        
        //Connexion
        private function connexionCompte()
        {
            $valide = new ConfirmationChampsConnection($_POST["courrielUtilisateur"] , $_POST["MPUtilisateur"]);
            $log = new ConnectionCompte($_POST["courrielUtilisateur"] , $_POST["MPUtilisateur"]);
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
                
                $oNav = new Nav();
                $oNav->afficheNavigateur('accueil');

                $page = new Accueil();
                $page->afficheContenuAccueil();

                //$this->agenceAccueil();
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
                case 'modifierSave':
                    $this->modifierSaveAnnonce();
                    break;
                 case 'choixBien':
                    $this->choisirBien();
                    break;
                 case 'saveBien':
                    $this->saveBien();
                    break;
                 case 'etatAnnonce':
                    $this->etatAnnonce();
                    break;
                 case 'supprimerAnnonce':
                    $this->supprimerAnnonce();
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
        
        $agence= new Agences();
        $agence = $agence->getAgence($_GET['ref']);
        
        $oHeaderAgence = new HeaderAgence();
        $oHeaderAgence->AfficheHeaderAgence($agence);
        
   
        $oNavAgence= new NavAgence();
        $oNavAgence->afficheNavAgence('agenceAccueil');
   
        $oAnnones = new Annonces();
        $aAnnonces = $oAnnones->getAnnonces();
        
        $page = new agenceAccueil();
        $page->afficheAgenceAccueil($aAnnonces);  
            
        
    }
 
     private function agenceAccueil_()
    { 
   
        $oAnnones = new Annonces();
        $aAnnonces = $oAnnones->getAnnonces();
        
        $page = new agenceAccueil();
        $page->afficheAgenceAccueil($aAnnonces);  
            
        
    }   
 
    
    private function profilResponsableAgence()
    { 
        $oNav = new Nav();
        $oNav->afficheNavigateur();
        
        $agence= new Agences();
        $agence = $agence->getAgence($_GET['ref']);
        
        $oHeaderAgence = new HeaderAgence();
        $oHeaderAgence->AfficheHeaderAgence($agence);
        
   
        $oNavAgence= new NavAgence();
        $oNavAgence->afficheNavAgence('ResponsableAgence');
        
        $utilisateur= new Utilisateurs();
        $utilisateur = $utilisateur->getUtilisateur($_GET['ref']);
   
        $page = new ProfilResponsableAgence();
        $page->afficheProfilResponsable($utilisateur);
    }

    private function informationAgence()
    { 
        $oNav = new Nav();
        $oNav->afficheNavigateur();
        
        $agence= new Agences();
        $agence = $agence->getAgence($_GET['ref']);
        
        $oHeaderAgence = new HeaderAgence();
        $oHeaderAgence->AfficheHeaderAgence($agence);
        
   
        $oNavAgence= new NavAgence();
        $oNavAgence->afficheNavAgence('infosAgence');
       
   
        $page = new infosAgence();
        $page->afficheInformationAgence($agence);
    }

    private function statutAgence()
    { 
        $oNav = new Nav();
        $oNav->afficheNavigateur();
        
        $agence= new Agences();
        $agence = $agence->getAgence($_GET['ref']);
        
        $oHeaderAgence = new HeaderAgence();
        $oHeaderAgence->AfficheHeaderAgence($agence);
        
   
        $oNavAgence= new NavAgence();
        $oNavAgence->afficheNavAgence('statut');
   
        $page = new statutAgence();
        $page->afficheStatutAgence();
    }

    private function annoncePlusVisite()
    { 
        $oNav = new Nav();
        $oNav->afficheNavigateur();
        
        $agence= new Agences();
        $agence = $agence->getAgence($_GET['ref']);
        
        $oHeaderAgence = new HeaderAgence();
        $oHeaderAgence->AfficheHeaderAgence($agence);
        
   
        $oNavAgence= new NavAgence();
        $oNavAgence->afficheNavAgence('plusVisite');
   
        $page = new annonceVisite();
        $page->afficheAnnonceVisite();
    }

    private function mesAlertes()
    { 
        $oNav = new Nav();
        $oNav->afficheNavigateur();
        
        $agence= new Agences();
        $agence = $agence->getAgence($_GET['ref']);
        
        $oHeaderAgence = new HeaderAgence();
        $oHeaderAgence->AfficheHeaderAgence($agence);
        
   
        $oNavAgence= new NavAgence();
        $oNavAgence->afficheNavAgence('alerte');
   
        $page = new mesAlertes();
        $page->afficheMesAlertes();
    }
    
    private function demandeurBien(){
        $oNav = new Nav();
        $oNav->afficheNavigateur();
        
        $agence= new Agences();
        $agence = $agence->getAgence($_GET['ref']);
        
        $oHeaderAgence = new HeaderAgence();
        $oHeaderAgence->AfficheHeaderAgence($agence);
        
   
        $oNavAgence= new NavAgence();
        $oNavAgence->afficheNavAgence('demandeur');
   
        $page = new demandeursBien();
        $page->afficheDemandeurBien();
    }
    
    private function ajouterAnnonce(){

        $oNav = new Nav();
        $oNav->afficheNavigateur();
        
        $agence= new Agences();
        $agence = $agence->getAgence($_GET['ref']);
        
        $oHeaderAgence = new HeaderAgence();
        $oHeaderAgence->AfficheHeaderAgence($agence);
        
   
        $oNavAgence= new NavAgence();
        $oNavAgence->afficheNavAgence();
   
        $page = new ajouterAnnonce();
        $page->formulaireAjoutAnnonce();
        
       
    }

    private function visionnerAnnonce(){

        $oNav = new Nav();
        $oNav->afficheNavigateur();
        
        $agence= new Agences();
        $agence = $agence->getAgence($_GET['ref']);
        
        $oHeaderAgence = new HeaderAgence();
        $oHeaderAgence->AfficheHeaderAgence($agence);
        
   
        $oNavAgence= new NavAgence();
        $oNavAgence->afficheNavAgence();
   
        $page = new visionnerAnnonce();
        $page->afficherAnnonce();        
    } 
 
     private function modifierAnnonce(){

        $oNav = new Nav();
        $oNav->afficheNavigateur();
        
        $agence= new Agences();
        $agence = $agence->getAgence($_GET['ref']);
        
        $oHeaderAgence = new HeaderAgence();
        $oHeaderAgence->AfficheHeaderAgence($agence);
        
   
        $oNavAgence= new NavAgence();
        $oNavAgence->afficheNavAgence();
   
               
        //echo $_GET['ref'];
        $erreur='';
        if($_GET['ref'] != '') {
            $aAnnonces=Array();
            try
            {
                $oAnnonces =new Annonces();
                $aAnnonces = $oAnnonces->getAnnonce($_GET['ref'] );
            }
            catch(Exception $e)
            {
                $erreur = $e->getMessage();
            }
            
            $page = new modifierAnnonce();
            $page->formulaireModifierAnnonce($aAnnonces); 
            
            
        }  
    }

     private function modifierSaveAnnonce(){

        $oNav = new Nav();
        $oNav->afficheNavigateur();
        
        $agence= new Agences();
        $agence = $agence->getAgence($_GET['ref']);
        
        $oHeaderAgence = new HeaderAgence();
        $oHeaderAgence->AfficheHeaderAgence($agence);
        
   
        $oNavAgence= new NavAgence();
        $oNavAgence->afficheNavAgence();
   
        $oAnnonce = new Annonces();
        $modif = $oAnnonce->setAnnonce($_POST);
        
        $this->agenceAccueil_();
         
    }
    
    
     private function choisirBien(){

        $oNav = new Nav();
        $oNav->afficheNavigateur();
        
        $agence= new Agences();
        $agence = $agence->getAgence($_GET['ref']);
        
        $oHeaderAgence = new HeaderAgence();
        $oHeaderAgence->AfficheHeaderAgence($agence);
        
   
        $oNavAgence= new NavAgence();
        $oNavAgence->afficheNavAgence();
   
        $page = new choisirBien();
        $page->formulairechoisirBien(); 
    }
        
     private function saveBien(){

        $oNav = new Nav();
        $oNav->afficheNavigateur();
        
        $agence= new Agences();
        $agence = $agence->getAgence($_GET['ref']);
        
        $oHeaderAgence = new HeaderAgence();
        $oHeaderAgence->AfficheHeaderAgence($agence);
        
   
        $oNavAgence= new NavAgence();
        $oNavAgence->afficheNavAgence();
   
        $oAnnonce = new Annonces();
        $ajout = $oAnnonce->addAnnonce($_POST);
        
        $page = new saveBien();
        $page->confirmationAjoutBien(); 
        
        
        

    }
    
    private function etatAnnonce(){
   
        $oAnnonce = new Annonces();
        $ajout = $oAnnonce->etatAnnonce($_POST['ref'],$_POST['etat']);
        
        $this->agenceAccueil();

    }
    
    
    private function supprimerAnnonce(){

     $oAnnonce = new Annonces();
     $ajout = $oAnnonce->suppAnnonce($_POST);

     $this->agenceAccueil();

    } 
    
}