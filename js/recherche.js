/* 
 * Ajax pour recherche
 * @author Mehdi
 * 2014/07/07
 */
window.addEventListener('load', init, false);
window.addEventListener('load', affichageValeurPrix, false);

// Appeler sur le chargement du DOM
function init(){
    document.getElementById('categorie').addEventListener('change', menuRequeteAjax, false);
    // Affichage de la valeur range (prix)
    document.getElementById('prix').addEventListener('change', affichageValeurPrix);
}


function menuRequeteAjax(){
    var valeurSelection = document.getElementById('categorie').selectedIndex;
    
    var request = new XMLHttpRequest(); // Création de l'objet
    url = 'ajaxControler.php?controler=recherche&categorie='+valeurSelection;
    //console.log(url);
    request.open("GET", url, true);// Création de la requête
    request.send(); // Envoie de la requête

    request.onreadystatechange = function (){
        //console.log ("readyState : " + request.readyState);
        //console.log ("status : " + request.status);
        if(request.readyState ==4 && request.status == 200){
            //console.log("Reponse : " + request.responseText);
            document.getElementById('typeBien').innerHTML=request.responseText;
        }
    }
}

function affichageValeurPrix(){
    var val = document.getElementById('prix').value;
    //console.log(val);
    var range;
    switch (val) {
        case '0':
            range = "(moins de 50 000 $)";
            break;
        case '1':
            range = "(moins de 100 000 $)";
            break;
        case '2':
            range = "(moins de 250 000 $)";
            break;
        case '3':
            range = "(moins de 500 000 $)";
            break;
        case '4':
            range = "(moins de 1 000 000 $)";
            break;
        case '5':
            range = "(Illimité)";
            break;
    }
    //console.log(range);
    var valeur = document.getElementById('prixScriptVal');
    valeur.innerHTML = range;
}


