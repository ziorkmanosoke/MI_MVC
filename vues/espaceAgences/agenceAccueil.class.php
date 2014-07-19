<?php 
/**
 * Description of agenceAccueil
 *
 * @author equipe
 */
class agenceAccueil {
    
    public function afficheAgenceAccueil($aAnnonces=Array()) {
//        var_dump($aAnnonces);
?>       
        <div class="container-fluid block3">
            <!-- sidebar -->
            <div class="col-lg-4 col-md-4 col-sm-12  col-xs-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                          Recherche rapide
                      </h3>
                    </div>
                    <div class="panel-body">
                        Pour une recherche rapide
                    </div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Moteur de recherche</h3>
                    </div>
                    <div class="panel-body">
                        <p>
                            les critères de selection à insèrer.
                        </p>
                        <p>
                            Permet à l'agence de chercher une ou des annonce(s)
                            d'un bien précise
                        </p>
                    </div>
                </div>
            </div>
            <!-- fin sidebar -->
            <!-- contenu du centre (article)-->
            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
             

                <div class="row">
                    <div class="col-xs-12 col-lg-4 col-lg-offset-8 well well-sm ajouterannonce">
                        <div class="media">
                            <a class="pull-left" href="#">
                                <img class="media-object pull-left icone" src="./img/adminAgence/add.png">
                            </a>
                            <div class="media-body">
                                <p class="media-heading">
                                    <a class="pull-left" href="index.php?page=agenceAccueil&section=ajoutAnnonce&ref=<?php echo $_SESSION['ID_utilisateur'];?>&id=<?php echo $annonce['ID_annonce'];?>">
                                        Ajouter une annonce
                                    </a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>



                <div class="table-responsive ">
                    <table class="table table-striped">          
                        <tbody>                            
                            <?php $aAnnonces; 
                            
                                foreach($aAnnonces as $cle => $annonce)
                                   { 
                                    
                               ?>
                            
                            <tr>
                                <td>Réf.<?php echo $annonce['ID_annonce']?></td>
                                <td>
                                   
                                    <?php echo $annonce['typedebien']?> à <?php echo $annonce['statut'];
                                ?>
                                        <br/>Superficie habitable : <?php echo $annonce['superficie_habitable']?>
                                        <br/>Nombre de pièce :<?php echo $annonce['nb_pieces']?>
                                        <br/>Nombre de Chambre :<?php echo $annonce['nb_chambre']?>
                                        <br/>Prix : <?php echo $annonce['prix']?> $
                                </td>
                                
                                
                                
                                <!-- Bouchra--
                                <td>
                                    <a href="index.php?page=agenceAccueil&ref=<?php //echo $_SESSION['ID_utilisateur'];?>&id=<?php //echo $annonce['ID_annonce'];?>">
                                        <img class="icone" data-toggle="modal" data-target="#myModal1" src="./img/adminAgence/upload.png">
                                    </a>
                                </td>
                                <!-- /bouchra->
                                <!-- Fadi-->
                                <td>
                                    <a data-toggle="modal" data-target="#myModal<?php echo $annonce['ID_annonce'];?>" href="#myModal<?php echo $annonce['ID_annonce'];?>">
                                        <img class="icone" src="./img/adminAgence/upload.png">
                                    </a>
                                </td>
								<!----Modal téléversement de photos--->
    <div class="modal fade myModals" id="myModal<?php echo $annonce['ID_annonce']?>">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4>Ajoutez une photo</h4>
                </div>
                <div class="modal-body ">
                    <div class="container-fluid col-xs-6 col-md-6 pull-left">
                        <div class="row">
                            <div class="col-xs-6 col-md-3 pull-left">
                                <a href="#">
                                    <img id="myimage" src="<?php $profilepic = new uploadImg(); $profilepic->checkmyThumb('img/photos/vignettes/tn_'.$annonce['ID_annonce'].'.jpg');?>" width="150" height="150" class="thumbnail" alt="...">
                                </a>
								<form method="post" action="index.php?page=deleteImg" role="form">
								<button type="submit" class="btn btn-success" >supprimer</button>
								
								<input type="hidden" id="deletePhotos" name="deletePhoto" value="<?php echo "img/photos/large/tn_".$annonce['ID_annonce'].".jpg";?>">
								</form>

                            </div>
                        </div>
                        <div class="row">
				<?php
						$thumbgal= new uploadImg();
						$thumbgal->generateThumbs($annonce['ID_annonce']);
						//echo $aAnnonces['ID_annonce'];
				?>

                        </div>
                    </div>
                    <div>
                        <form enctype="multipart/form-data" method="post" action="index.php?page=ajoutImg" role="form">
                            <fieldset>
                                <legend>Televersez une photo</legend>
                                <br/>

                                <div class="control-group" class="navbar-search pull-left">


									<select name="quellephoto">
									  <option value="1">vue Exterieur</option>
									  <option value="2">vue d'ensemble</option>
									  <option value="3">salon</option>
									  <option value="4">chambre a coucher</option>
									  <option value="5">cuisine</option>
									  <option value="6">salle de bain</option>
									</select> 
                                    <input type="file" id="fileToUpload" name="fileToUpload" placeholder="choisir une photo">
                                    </br>
                                    <button type="submit" class="btn btn-default" style="padding-left:13px">Televerser</button>
                                    </br>
                                    <p>6 photos maximum</br>uniquement le format "jpg" sera accepte, et sera redimensioné en 600 x 450 px
                                    </p>
                                    </br>
                                    </br>
                                    </br>
									<input type="hidden" name="annonce" value="<?php echo $annonce['ID_annonce']?>">
                                    
                               <div class="row">
                                        <button type="button" class="btn" data-dismiss="modal">Annuler</button>
                               </div>
                                </div>
                                
                            </fieldset>
							

                        </form>
						
                                                    
                               
                    </div>
                    <div class="modal-footer">

                    </div>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>



    </div>
    <!-- /.modal -->
                            <!-- /Fadi-->




                            <td>
                                <a href="index.php?page=agenceAccueil&section=visionner&ref=<?php echo $_SESSION['ID_utilisateur'];?>&id=<?php echo $annonce['ID_annonce'];?>">
                                    <img class="icone" src="./img/adminAgence/visionner.png">
                                </a>
                            </td>
                            <td>
                                <a href="index.php?page=agenceAccueil&section=modifier&ref=<?php echo $_SESSION['ID_utilisateur'];?>&id=<?php echo $annonce['ID_annonce'];?>">
                                    <img class="icone" src="./img/adminAgence/modifier.jpg">
                                </a>
                            </td>
                            <td>
                                <a data-toggle="modal" href="#desactiver<?php echo $annonce['ID_annonce'];?>">
                                   <?php
                                       if ($annonce['etat']=='off') {                                               
                                     ?>
                                    <img class="icone" src="./img/adminAgence/desactiver.jpg">
                                     <?php
                                        }
                                        else {
                                     ?>
                                    <img class="icone" src="./img/adminAgence/activer.png">
                                    <?php
                                        }
                                     ?>
                                </a>


                                <div class="modal" id="desactiver<?php echo $annonce['ID_annonce']?>" aria-hidden="true" style="display: none;">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal">x</button>
                                                <h3 class="media-heading text-danger">Votre annonce est désactivée</h3>
                                            </div>
                                            <div class="modal-body">
                                                <div class="media">
                                                    <img class="img-thumbnail" src="./img/adminAgence/maison.png">
                                                    <div class="media-body pull-left">


                                                          <?php

                                                        if ($annonce['etat']=='on') {

                                                       ?>
                                                            <span class="media-heading ">Votre annonce ne sera plus visible sur le site</span>
                                                        <?php

                                                        }
                                                        else {
                                                       ?>
                                                            <span class="media-heading ">Votre annonce sera visible sur le site</span>
                                                       <?php
                                                            }
                                                        ?>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <form action="index.php?page=agenceAccueil&section=etatAnnonce&ref=<?php echo $_SESSION['ID_utilisateur'] ?>" method="POST">
                                                  <input type="hidden" value="<?php echo $annonce['ID_annonce'];?>" name="ref">  
                                             <?php
//                                                 echo "etat : ".$annonce['etat'];
                                                if ($annonce['etat']=='on') {

                                               ?>
                                                    <input type="hidden" value="off" name="etat">
                                                    <button type="submit" class="btn btn-default">Désactiver</button>
                                                <?php

                                                }
                                                else {
                                               ?>
                                                   <input type="hidden" value="on" name="etat">
                                                    <button type="submit" class="btn btn-default">Activer</button>
                                               <?php
                                                    }
                                                ?>
                                               </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                            </td>
                            <td>

                            <a data-toggle="modal" href="#infos<?php echo $annonce['ID_annonce']?>">
                                <img class="icone" src="./img/adminAgence/remove.png">
                            </a>


                            <div class="modal" id="infos<?php echo $annonce['ID_annonce']?>" aria-hidden="true" style="display: none;">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <div class="media">
                                                <img class="pull-left" src="./img/adminAgence/supp-icn.png">
                                                <div class="media-body">
                                                    <h3 class="media-heading text-danger">Êtes-vous sûr de supprimer l'annonce suivante</h3>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-body">
                                            <div class="media">
                                                <img class="img-responsive img-thumbnail" src="./img/adminAgence/maison.png">
                                                <div class="media-body pull-left">
                                                    <span class="media-heading ">
                                                       Réf.<?php echo $annonce['ID_annonce'];
                                                             echo " ".$annonce['typedebien']." , (";
                                                        if ($annonce['ID_statut']==1){
                                                            $transaction = "Vente";
                                                        } else {
                                                            $transaction = "Location";
                                                        }
                                                        echo $transaction; ?>)
                                                        <br/>Superficie habitable : <?php echo $annonce['superficie_habitable']?>
                                                        <br/>Nombre de pièce : <?php echo $annonce['nb_pieces']?>
                                                         Nombre de Chambre : <?php echo $annonce['nb_chambre']?>
                                                         Prix : <?php echo $annonce['prix']?> $
                                                    </span>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <form action="index.php?page=agenceAccueil&section=supprimerAnnonce&ref=<?php echo $_SESSION['ID_utilisateur'] ?>" method="POST">
                                                <input type="hidden" value="<?php echo $annonce['ID_adresse']?>" name="ID_adresse">
                                                <input type="hidden" value="<?php echo $annonce['ID_annonce'];?>" name="ID_annonce"> 
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Annuler</button>
                                                <button type="submit" class="btn btn-default">Supprimer</button>

                                             </form>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            </td>
                        </tr>

                       <?php
                             }
                        ?>
                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
    <hr/>

        
<?php
     
    }
}
