var searchElement = document.getElementById('search'),
    results = document.getElementById('results'),
    selectedResult = -1, //-1 équivaut à:  aucune recherche en cours
    previousRequest,
    previousValue = searchElement.value;

function getResults(keyword){
    //creation objet xml XMLHttpRequest
    if (window.XMLHttpRequest) {
        xmlhttp = new XMLHttpRequest();
    } else {
        if (window.ActiveXObject)
            try {
                xmlhttp=new ActiveXObject("Msxml2.XMLHTTP");
            } catch (e) {
                try {
                    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
                } catch (e) {
                    return NULL;
                }
            }
    }

    xmlhttp.open('GET','./controller/backoffice/autocompletion.php?search='+encodeURIComponent(keyword),true);


    xmlhttp.onreadystatechange=function () {
        if (xmlhttp.readyState==4 && xmlhttp.status==200){
            displayResults(xmlhttp.responseText);
        }
    }


    xmlhttp.send(null);
    return xmlhttp;

}

function displayResults(response){
    results.style.display = response.length ? 'block':'none';
    if(response.length){
        response = response.split('|');
        var responseLength = response.length;

        results.innerHTML=''; //on vide les anciens résultats

        for (var i=0;i < responseLength;i++){
            var row;
            var user;
            var action;

            action = document.createElement("td");
            action.style.width = "250px";

            row = results.appendChild(document.createElement("tr"));
            user = document.createElement("td");
            user.style.width = "250px";
            row.appendChild(user);
            row.appendChild(action);
            user.innerHTML = response[i];
            action.innerHTML = " <button class=\"edit_btn\"><img src=\"./view/img/mode_edit.png\" alt=\"edit\" width=15px>modifier </button> <button class=\"edit_btn\"><img src=\"./view/img/delete.png\" alt=\"supprimer\" width=15px>supprimer </button> " ;

            
        }
    }
}

function chooseResult(result){
    searchElement.value = previousValue = result.innerHTML;
    results.style.display = 'none';
    results.className = '';
    selectedResult = -1;
    searchElement.focus();
}

searchElement.addEventListener('keyup', function (e) {
    var divs = results.getElementsByTagName('td');

    if (e.key == 38 && selectedResult > -1){ //38 represente la fleche du haut
        divs[selectedResult--].className='';

        if (selectedResult > -1){
            divs[selectedResult].className='result_focus';
        }

    }

    else if (e.key==40 && selectedResult<divs.length-1){ //40 represente la fleche du bas
        results.style.display = 'block';
        if (selectedResult > -1){
            divs[selectedResult].className='';
        }
        divs[++selectedResult].className='result_focus';
    }

    else if (e.key==13 && selectedResult > -1){
        chooseResult(divs[selectedResult]);
    }

    else if (selectedResult != previousValue){ //on modifie la recherche
        previousValue = searchElement.value;

        if (previousRequest && previousRequest.readyState < XMLHttpRequest.DONE){
            previousRequest.abort(); //arrêt de la requete en cours
        }

        previousRequest = getResults(previousValue);

        selectedResult = -1;
    }
})