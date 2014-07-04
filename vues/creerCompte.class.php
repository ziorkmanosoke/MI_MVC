<?php

/**
 * Description of creerCompte
 *
 * @author bouchra
 */
class creerCompte {
 
    public function afficheCreerCompte(){
        
        ?>
        
            
    
<!-- contenu de la page-->
    <article class="container well">
        <!-- contient le formulaire d'inscription -->
            <h1 class="brand">Formulaire inscription.</h1>
            <article>
                <form class="form-horizontal">     
                    <!-- article qui contiendra le nom--> 
                    <article class="form-group ">
                        <label for="inputNom" class="col-sm-2 control-label">Nom: </label>
                        <section class="col-sm-4">
                            <input type="text" class="form-control" id="inputNom" placeholder="Votre Nom" required>
                        </section>
                    </article>

                    <!-- article qui contiendra le prenom-->    
                    <article class="form-group">
                        <label for="inputPrenom" class="col-sm-2 control-label">Prenom: </label>
                        <section class="col-sm-4">
                            <input type="text" class="form-control" id="inputPrenom" placeholder="Votre Prenom">
                        </section>
                    </article>

                    <!-- article qui contiendra le mot de passe--> 
                    <article class="form-group ">
                        <label for="inputMP" class="col-sm-2 control-label">Mot de passe: </label>
                        <section class="col-sm-4">
                            <input type="text" class="form-control" id="inputMP" placeholder="Mot de passe" required>
                        </section>
                    </article>

                    <!-- article qui contiendra la confirmation de mot de passe--> 
                    <article class="form-group ">
                        <label for="inputCMP" class="col-sm-2 control-label">Confirmation Mot de passe: </label>
                        <section class="col-sm-4">
                            <input type="text" class="form-control" id="inputCMP" placeholder="Confirmation Mot de passe" required>
                        </section>
                    </article>

                    <!-- article qui contiendra les radion bouton de sexe-->    
                    <article class="form-group">
                        <label for="inputSexe" class="col-sm-2 control-label">Sexe: </label>
                        <section class="col-sm-6"> 
                            <section class="col-md-3">
                                <label for="inputSexeH" class="control-label">Homme </label>
                                <input type="radio" name="sexe" id="homme" value="homme" checked>   
                            </section>
                            <section class="col-md-3">
                                <label for="inputSexeF" class="control-label">Femme </label>
                                <input type="radio" name="sexe" id="femme" value="femme">   
                            </section>
                            <section class="col-md-3">
                                <label for="inputSexeA" class="control-label">Autre </label>
                                <input type="radio" name="sexe" id="autre" value="autre">   
                            </section>

                        </section>
                    </article>

                    <!-- article qui contiendra la date de naissance-->    
                    <article class="form-group">
                        <label for="inputDoB" class="col-sm-2 control-label">Date de naissance: </label>
                        <section class="col-sm-4">
                            <input type="date" class="form-control" id="inputDoB" placeholder="Votre date de naissance">
                        </section>
                    </article>

                    <!-- article qui contiendra le courriel-->    
                    <article class="form-group">
                        <label for="inputCourriel" class="col-sm-2 control-label">Courriel: </label>
                        <section class="col-sm-4">
                            <input type="email" class="form-control" id="inputCourriel" placeholder="Votre courriel">
                        </section>
                    </article>

                    <!-- article qui contiendra votre nom de Ville-->    
                    <article class="form-group">
                        <label for="inputNomVille" class="col-sm-2 control-label">Nom de Ville: </label>
                        <section class="col-sm-4">
                            <input type="text" class="form-control" id="inputNomVille" placeholder="Votre nom de ville">
                        </section>
                    </article>

                    <!-- article qui contiendra votre nom de Province-->    
                    <article class="form-group">
                        <label for="inputNomProvince" class="col-sm-2 control-label">Nom de Province: </label>
                        <section class="col-sm-4">
                            <select class="form-control">
                                <option>Ontario</option>
                                <option>Québec</option>
                                <option>Nouvelle-Écosse</option>
                                <option>Manitoba</option>
                                <option>Colombie-Britannique</option>
                                <option>Île-du-Prince-Édouard</option>
                                <option>Saskatchewan</option>
                                <option>Alberta</option>
                                <option>Terre-Neuve-et-Labrador</option>
                                <option>Nouveau-Brunswick</option>
                            </select>
                        </section>
                    </article>



                    <article class="form-group">
                        <section class="col-sm-offset-2 col-sm-10">
                            <button type="button" onClick="location.href='choixForfais.html'" class="btn btn-success"><span class="glyphicon glyphicon-pencil"></span> Continuer</button>
                        </section>
                    </article>  
                </form>       
    </article>


        <?php
    }
}

?>
