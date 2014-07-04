<?php
/**
 * Class Vue
 * Template de classe Vue. Dupliquer et modifier pour votre usage.
 * 
 * @author Jonathan Martel
 * @version 1.0
 * @update 2013-12-11
 * @license Creative Commons BY-NC 3.0 (Licence Creative Commons Attribution - Pas d’utilisation commerciale 3.0 non transposé)
 * @license http://creativecommons.org/licenses/by-nc/3.0/deed.fr
 * 
 */
class Nav {
    
        /**
	 * Affiche le navigateur
	 * @access public
	 * 
	 */
    public function afficheNavigateur($pageActive="") {

?>
    <body>
    <div role="navigation" class="navbar navbar-default navbar-fixed-top">
         <div class="container">
             <div class="navbar-header">
                 <button data-target=".navbar-collapse" data-toggle="collapse" class="navbar-toggle" type="button">
                     <span class="sr-only">Toggle navigation</span>
                     <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
                 </button>
                 <a href="index.php?page=accueil" class="navbar-brand navbarLogo"></a>
             </div>

             <div class="navbar-collapse collapse">
                 <ul class="nav navbar-nav">
                     <li>
                         <a href="index.php?page=accueil">
                             <span class="glyphicon glyphicon-home"></span>
                         </a>
                     </li>
                 </ul>
                 <?php if ($_GET['page']<>'agenceAccueil') { ?>
                 
                 <form action="index.php?page=agenceAccueil" class="navbar-form navbar-left" method="POST">
                     <div class="form-group">
                         <input type="text" placeholder="Courriel" class="form-control">
                     </div>
                     <div class="form-group">
                         <input type="password" placeholder="Mot de passe" class="form-control">
                     </div>
                     <button type="submit" class="btn btn-success">Connexion</button>
                     <div class="form-group divCreerCompte">
                         <a href="index.php?page=creerCompte"><p>Créer un</p><p>compte</p></a></div>
                 </form>
                 
                 <?php } ?>
                 
                 <!-- nav -->
                    <nav>
                            <ul class="nav navbar-nav navbar-right">
                                <li class="dropdown <?php echo ($pageActive == 'accueil' ? 'active' : '' ) ?>">
                                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">Acheter
                                        <b class="caret"></b>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a href="#">Résidentielle</a>
                                        </li>
                                        <li>
                                            <a href="#">Commerciale</a>
                                        </li>
                                        <li>
                                            <a href="#">Multi logement</a>
                                        </li>
                                        <li>
                                            <a href="#">Terrain</a>
                                        </li>
                                        <li>
                                            <a href="#">Ferme</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">Vendre
                                        <b class="caret"></b>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a href="#">Notre offre</a>
                                        </li>
                                        <li>
                                            <a href="#">Inscrivez votre propriété</a>
                                        </li>
                                        <li>
                                            <a href="#">Devenir un courtier</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="<?php echo ($pageActive == 'forfait' ? 'active' : '' ) ?>">
                                    <a href="index.php?page=forfait">Nos Forfaits</a>
                                </li>
                                <li>
                                    <a href="#">Contact</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
            <!--/nav -->
            
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <h1 class="brand">monimmobilier
                    <span class="domain">.ca</span>
                </h1>
            </div>
        </div>
    </div>
    
            
		<?php
		
	}
    
    
}
