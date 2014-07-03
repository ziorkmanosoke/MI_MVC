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
        <!--<h2>Vous etes connecté comme : "Agence exemple" <input type="button" class="btn btn-success " data-toggle="modal" data-target="#redigez" value="Redigez un nouveau billet"></h2>-->

        <!---Billets Blog------->


        <div class="panel-group" id="accordion">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" data-target="#collapseOne" href="#collapseOne">
                        <img src="img/account_and_control.png" alt="logo agence" width="50" height="50"/> Exemple Billet blog : Date : 2014-06-05 par : "Agence exemple" Topic : "Titre Billet"

                    </a>
                </h4>
                </div>
                <div id="collapseOne" class="panel-collapse collapse in">
                    <div class="panel-body">
                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                    </div>
                    <div class="panel-footer">
                        <input type="text" name="commentaire" />
                        <input type="button" class="btn btn-primary" value="ajoutez un commentaire" />
                    </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" data-target="#collapseTwo" href="#collapseTwo">
                        <img src="img/account_and_control.png"  alt="logo agence" width="50" height="50"/> Exemple Billet blog : Date : 2014-06-04  par : "Agence exemple" Topic : "Titre Billet"
                    </a>
                </h4>
                </div>
                <div id="collapseTwo" class="panel-collapse collapse">
                    <div class="panel-body">
                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                    </div>
                    <div class="panel-footer">
                        <input type="text" name="commentaire" />
                        <input type="button" class="btn btn-primary" value="ajoutez un commentaire" />
                    </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" data-target="#collapseThree" href="#collapseThree">
                        <img src="img/account_and_control.png" alt="logo agence" width="50" height="50"/> Exemple Billet blog : Date : 2014-06-03  par : "Agence exemple" Topic : "Titre Billet"</a>
                </h4>
                </div>
                <div id="collapseThree" class="panel-collapse collapse">
                    <div class="panel-body">
                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                    </div>
                    <div class="panel-footer">
                        <input type="text" name="commentaire" />
                        <input type="button" class="btn btn-primary" value="ajoutez un commentaire" />
                    </div>
                </div>
            </div>
        </div>

        <!--Fin Billets Blog-------->

        <!--Pagination-->
        <div id="page">
            <ul class="pagination pagination-lg">
                <li class="disabled">
                    <a href="#">&laquo;</a>
                </li>
                <li class="active">
                    <a href="#">1
                </a>
                </li>
                <li>
                    <a href="#">2
                </a>
                </li>
                <li>
                    <a href="#">3
                </a>
                </li>
                <li>
                    <a href="#">4
                </a>
                </li>
                <li>
                    <a href="#">5
                </a>
                </li>
                <li>
                    <a href="#">6
                </a>
                </li>
                <li>
                    <a href="#">7
                </a>
                </li>
                <li>
                    <a href="#">8
                </a>
                </li>
                <li>
                    <a href="#">9
                </a>
                </li>
                <li>
                    <a href="#">10
                </a>
                </li>
                <li>
                    <a href="#">&raquo;</a>
                </li>
            </ul>
        </div>
    </div>
    <!-- pagination fin-->

        <?php
            
        }
    
}
