/* 
 * Ajax pour details
 * @author Mehdi
 * 2014/07/11
 */
window.addEventListener('load', init, false);

// Appeler sur le chargement du DOM
function init(){
    affichageResultats(1,4);
}


function affichageResultats(pageActuelle, parPage){
    var ct = document.getElementById('chercheTexteRes').value;
    var cat = document.getElementById('categorieRes').value;
    var tdb = document.getElementById('typeDeBienRes').value;
    var px = document.getElementById('prixRes').value;
    var camb = document.getElementById('chambresRes').value;
    var sdb = document.getElementById('sallesDeBainRes').value;
    var fr = document.getElementById('FiltrerResultatsRes').value;
    var tr = document.getElementById('TrierResultatsRes').value;
    
    var request = new XMLHttpRequest(); // Création de l'objet
    url = 'ajaxControler.php?controler=resultats&ct='+ct+'&cat='+cat+'&tdb='+tdb+'&px='+px+'&camb='+camb+'&sdb='+sdb+'&fr='+fr+'&tr='+tr+'&parPage='+parPage+'&pageActuelle='+pageActuelle;
    //console.log(url);
    request.open("GET", url, true);// Création de la requête
    request.send(); // Envoie de la requête

    request.onreadystatechange = function (){
        //console.log ("readyState : " + request.readyState);
        //console.log ("status : " + request.status);
        if(request.readyState ==4 && request.status == 200){
            //console.log("Reponse : " + request.responseText);
            document.getElementById('resultat').innerHTML=request.responseText;
            //var pageNum =document.getElementsByClassName('pageNum');
            var pageNum =document.getElementsByClassName('pageNum');
            var parPage = document.getElementById('parPage');
            parPage.addEventListener('change', affichagePerPage, false);
            for (var i=0; i<pageNum.length; i++){
                pageNum[i].addEventListener('click', getPage, false);
            }
            if(document.getElementById('pageSuv')){
                var pageSuv =document.getElementById('pageSuv');
                pageSuv.addEventListener('click', getPageSuv, false);
            }
            if(document.getElementById('pagePer')){
                var pageSuv =document.getElementById('pagePer');
                pageSuv.addEventListener('click', getPagePer, false);
            }
        }
    }
    
    function getPage(e){
        //console.log(e.currentTarget.textContent);
        var parPage = document.getElementById('parPage').value;
        affichageResultats(e.currentTarget.textContent,parPage);
    }
    
    function getPageSuv(e){
        var pageActive =document.getElementsByClassName('pageLi active');
        var pageSuv = parseInt(pageActive[0].firstChild.textContent)+1;
        var parPage = document.getElementById('parPage').value;
        affichageResultats(pageSuv,parPage);
    }
    
    function getPagePer(e){
        var pageActive =document.getElementsByClassName('pageLi active');
        var pagePer = parseInt(pageActive[0].firstChild.textContent)-1;
        var parPage = document.getElementById('parPage').value;
        affichageResultats(pagePer,parPage);
    }
    
    function affichagePerPage(e){
        affichageResultats(1,e.currentTarget.value);
    }
}


