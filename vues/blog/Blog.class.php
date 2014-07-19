<?php

/**
 * Description of blog
 *
 * @author belhmidi
 */
class Blog {
    
        public function afficheContenuBlog() {
        ?>
        
        
    <div class="container" id="accueil">        
       

        <!---Billets Blog------->
       <div class="panel-group" id="accordion">

		<article>
			
		<?php
		$blogBillets= new ModeleBlog();
		$articles = $blogBillets->getBillets();
		
		?>
		<h2>Bienvenue sur notre Blog ! <input type="button" class="btn btn-success " data-toggle="modal" data-target="#redigez" value="Redigez un nouveau billet"></h2>
		<?php
		if(count($articles) >0)
		{
			foreach($articles as $cle => $article)
			{
			?>
			            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" data-target="#collapse<?php echo $article['ID_billet'];?>" href="#collapse<?php echo $article['ID_billet'];?>">
                        <img src="img/account_and_control.png" alt="logo agence" width="50" height="50"/> Exemple Billet blog : Date : <?php echo $article['Date'];?> par : <?php echo $blogBillets->getUser($article['ID_user']);?> Topic : <?php echo $article['titre_billet'];?>

                    </a>
                </h4>
                </div>
                <div id="collapse<?php echo $article['ID_billet'];?>" class="panel-collapse collapse">
                    <div class="panel-body">
                       <?php echo $article['contenue_billet'];?>
                    </div>
					
                    <div class="panel-footer">
					<?php
					$commentaires = $blogBillets->getCommentaires($article['ID_billet']);
					 if(count($commentaires) >0){
					foreach($commentaires as $cles => $commentaire)
			{ ?>
			<p>commentaire par : <?php echo $blogBillets->getUser($article['ID_user']);?> Date : <?php echo $commentaire['Date'];?> </p>
			<p><?php echo $commentaire['contenu_commentaire'];?></p><hr>
		
		<?php } }
		else {echo '<p>Aucun commentaire</p>';}?>
						<form role="form" method="post" action="index.php?page=ajoutCommentaire">
							<textarea name="monCommentaire" rows="4" cols="50">

                             </textarea>
                       <!-- <input type="text" name="commentaire" />-->
                        
						<input type="hidden" name="idbillet" value="<?php echo $article['ID_billet'];?>" /></br>
						<input type="submit" class="btn btn-primary" value="ajoutez un commentaire" />
						</form>
                    </div>
                </div>
            </div>
		
			<?php 
			}
			
		}
		else
		{
			?>
					         <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" data-target="#collapse" href="#collapse">
                        <img src="img/account_and_control.png" alt="logo agence" width="50" height="50"/> Exemple Billet blog : Date :  par :  Topic : 

                    </a>
                </h4>
                </div>
                <div id="collapse" class="panel-collapse collapse">
                    <div class="panel-body">
                       <p>Aucun billet enregistrer dans le Blog!<p>
                    </div>
                    <div class="panel-footer"><textarea rows="4" cols="50"></textarea>
                        <!--<input type="text" name="commentaire" />-->
                        <input type="button" class="btn btn-primary" value="ajoutez un commentaire" />
                    </div>
                </div>
            </div>
			<?php 
		}
		?>
			
		</article>

		</div>

        <!--Fin Billets Blog-------->
        
 <!----Modal - Redigez un billet--->


    <div class="modal fade" id="redigez">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title">Redigez un billet</h4>
                </div>
                <div class="modal-body ">

                    <div>
                        <form role="form" method="post" action="index.php?page=ajoutBillet">
                            <fieldset>
                                <legend>
                                    <h1>Redigez un billet</h1>
                                </legend>
                                Topic</br>
                                <input type="text" Name="topic" />
                                </br>
                                Message</br>
                                <textarea Name="monText" rows="4" cols="50"></textarea>


                            </fieldset>
                            <button type="submit" class="btn btn-success" >Enregistrez le billet</button>
							<button type="button" class="btn btn-success" data-dismiss="modal">Fermer</button>
							
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
    <!-- /.modal Redigez -->
        <?php
            
        }
    
}
