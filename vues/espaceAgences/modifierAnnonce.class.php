<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of modifierAnnonce
 *
 * @author bouchra
 */
class modifierAnnonce {
    
    public function formulaireModifierAnnonce(){
        ?>
            


	<div class="rows block3">
	<!-- sidebar -->
		<div class="col-xs-12 col-lg-4">			
			<div class="panel panel-default">
				  <div class="panel-heading">
					  <h3 class="panel-title">
					  	Recherche rapide
					  </h3>
				  </div>
				  <div class="panel-body">
				    Pour un recherche rapide
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
				     	Permet à l'agence de chercher une ou des annonce(s) bien précise 
				     </p>
				  </div>
			</div>
		</div>
		<!-- fin sidebar -->
		<!-- contenu du centre (article)-->
		<div class="col-xs-12 col-lg-8">
         <!--  <h2 class="sub-header">Section title</h2> -->

         	<div class="row">
			  <div class="col-xs-12 col-lg-12  well well-sm wellBlanc titreAnnonce">
			  		<div class="media">	
				    	<p class="media-heading"><strong>Modifier annonce Réf : Ceinture21.312.14</strong></p>	
					</div>
			  </div>
			</div>
			<div class="row well wellBlanc ">
				<div class="col-xs-12 col-lg-12 ">
					<form class="form-horizontal" role="form">
						<div class="col-xs-12 col-lg-6">
							<div class="form-group form-inline">
									<label for="nbrChambre">Nombre de chambre  </label>
			                   		<input type="text" id="nbrChambre" class="form-control modifInput"  value="4" pattern="^[a-zA-Z][a-zA-Z0-9-_\.]{1,20}$">
		                    </div>

		                    <div class="form-group form-inline">
								<label for="nbrSalleBain">Nombre de salle de bain </label>
		                   		<input type="text" id="nbrSalleBain" class="form-control modifInput"  value="2" pattern="^[a-zA-Z][a-zA-Z0-9-_\.]{1,20}$">
		                    </div>
                    	</div>
                    	<div class="col-xs-5 col-lg-5 col-lg-offset-1">
		        			<div class="form-group form-inline">
								<label for="superficie">Superficie  </label>
		                   		<input type="text" id="superficie" class="form-control modifInput"  value="120" pattern="^[a-zA-Z][a-zA-Z0-9-_\.]{1,20}$">
		                    </div>
		                    <div class="form-group form-inline">
								<label for="anneeConstruction">Année<!-- <small>(construction)</small> --></label>
		                   		<input type="date" id="anneeConstruction" class="form-control modifInput"  value="1988-08-22" pattern="^[a-zA-Z][a-zA-Z0-9-_\.]{1,20}$">
		                    </div>
		                </div>

                    	<div class="col-xs-12 col-lg-12 well wellForm">
		        			<div class="form-group form-inline text-center">

		                   		<div class="checkbox">
							    <label>
							       Ascenceur <input type="checkbox" checked>
							    </label>
							    <label>
							       Foyer <input type="checkbox">
							    </label>
							    <label>
							       Bord de l'eau <input type="checkbox">
							    </label>
							    <label>
							       Stationnement <input type="checkbox" checked>
							    </label>
							    <label>
							       Piscine <input type="checkbox" checked>
							    </label>
							  </div>
		                    </div>

		                </div>
	                    <div class="col-xs-12 col-lg-12">
					    	<div class="form-group form-inline modifInput">
								<label for="superficie">Description  </label>
		                   		<textarea class="form-control  well wellForm" rows="5" cols="80">IMPECCABLE condo pour occupation immédiate - situé à 2 minutes de l'aut.25 / pont A-25 -près des transports et services - Grandes pièces - Terrasse à l'arrière -stationnement extérieur 
		                   		</textarea>
	                    	</div>
	                    </div>
	                    <div class="col-xs-12 col-lg-12">
	                    	<button type="button" class="btn btn-default btn-default active modifInput">Annuler</button>
							<button type="button" class="btn btn-default btn-default active modifInput"> Modifier</button>
	                    </div>

					</form>
				</div>		
			</div>
			
			</div>
          
		</div>
	</div><!-- / block3-->


	
	<!--</div>-->
	<hr/>
	

        <?php
    }
}

?>
