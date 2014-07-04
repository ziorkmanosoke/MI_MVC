<?php
/**
 * Description of NavAgence
 *
 * @author 
 */
class NavAgence {
    
     public function afficheNavAgence($pageActive="") {
    ?>
<!--          menu de la navigation -->

        <nav class="navbar navbar-default" role="navigation">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#"></a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li class="<?php echo ($pageActive == 'agenceAccueil' ? 'active' : '' ) ?>">
                            <a href="index.php?page=agenceAccueil">
                            <span class="glyphicon glyphicon-cog"></span>Panel</a>
                        </li>
                        <li class="<?php echo ($pageActive == 'ResponsableAgence' ? 'active' : '' ) ?>">
                            <a href="index.php?page=agenceAccueil&section=ResponsableAgence">Mon profil</a>
                        </li>
                        <li class="<?php echo ($pageActive == 'infosAgence' ? 'active' : '' ) ?>">
                            <a href="index.php?page=agenceAccueil&section=infosAgence">Information agence</a>
                        </li>
                        <li class="<?php echo ($pageActive == 'statut' ? 'active' : '' ) ?>">
                            <a href="index.php?page=agenceAccueil&section=statut">Statut</a>
                        </li>
                        <li class="<?php echo ($pageActive == 'plusVisite' ? 'active' : '' ) ?>">
                            <a href="index.php?page=agenceAccueil&section=plusVisite">Annonces plus visitées</a>
                        </li>
                        <li class="<?php echo ($pageActive == 'alerte' ? 'active' : '' ) ?>">
                            <a href="index.php?page=agenceAccueil&section=alerte">Mes alertes</a>
                        </li>
                        <li class="<?php echo ($pageActive == 'demandeur' ? 'active' : '' ) ?>">
                            <a href="index.php?page=agenceAccueil&section=demandeur">Les demandeurs</a>
                        </li>
                    </ul>

                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container-fluid -->
        </nav>
     <?php
     }
}
