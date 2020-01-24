var searchElement = document.getElementById('search');
var results = document.getElementById('results');
var selected = document.getElementById('selected'); //Zone de modification de l'utilisateur
var modify = document.createElement("form"); //formulaire de mofidication de l'utilisateur
var selectedResult = -1; //-1 équivaut à:  aucune recherche en cours
var previousRequest;
var previousValue = searchElement.value;


selected.appendChild(modify);
modify.setAttribute('method', "post");
modify.setAttribute('action', "/backoffice");


function getResults(keyword) {
    //creation objet xml XMLHttpRequest
    var xmlhttp;
    if (window.XMLHttpRequest) {
        xmlhttp = new XMLHttpRequest();
    } else {
        if (window.ActiveXObject)
            try {
                xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
            } catch (e) {
                try {
                    xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
                } catch (e) {
                    return null;
                }
            }
    }

    //envoi de la requete au serveur
    xmlhttp.open('GET', './controller/backoffice/autocompletion.php?search=' + keyword, true);


    //traitement de la réponse
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            displayResults(xmlhttp.responseText);
        }
    };


    xmlhttp.send(null);
    return xmlhttp;

}

function displayResults(response) {
    results.style.display = response.length ? 'block' : 'none';
    if (response.length) {
        response = response.split('|');
        var responseLength = response.length;

        results.innerHTML = ''; //on vide les anciens résultats

        for (var i = 0; i < responseLength; i++) {
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
            var access_code = parseInt(user.innerHTML.match(/Code d'accès: (\d+)/i)[1]);
            action.innerHTML = " <button class=\"edit_btn\" onclick='getInfo(" + access_code + ")'><img src=\"./view/img/mode_edit.png\" alt=\"edit\" width=15px>modifier</button> " +
                " <button class=\"edit_btn\"><img src=\"./view/img/delete.png\" alt=\"supprimer\" width=15px>supprimer</button> ";
        }
    }
}

/*
function chooseResult(result){
    searchElement.value = previousValue = result.innerHTML;
    results.style.display = 'none';
    results.className = '';
    selectedResult = -1;
    searchElement.focus();
}
*/

function getInfo(access_code) {
    var xmlhttp;
    if (window.XMLHttpRequest) {
        xmlhttp = new XMLHttpRequest();
    } else {
        if (window.ActiveXObject)
            try {
                xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
            } catch (e) {
                try {
                    xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
                } catch (e) {
                    return null;
                }
            }
    }

    xmlhttp.open("GET", "./controller/backoffice/autocompletion.php?access_code=" + access_code, true);
    xmlhttp.send();

    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            displayUserInfo(xmlhttp.response);
        }
    }
}

function displayUserInfo(user) {
    user = user.split('|');


    modify.innerHTML = "Prénom:<br>\n" +
        "<input type=\"text\" name=\"first_name\" value=\"" + user[0] + "\"><br>\n" +
        "Nom:<br>\n" +
        "<input type=\"text\" name=\"name\" value=\"" + user[1] + "\"><br>\n" +
        "Adresse:<br>\n" +
        "<input type=\"text\" name=\"adress\" value=\"" + user[2] + "\"><br>\n" +
        "Mail:<br>\n" +
        "<input type=\"text\" name=\"mail\" value=\"" + user[3] + "\"><br>\n" +
        "Administrateur (1 si oui):<br>\n" +
        "<input type=\"text\" name=\"admin\" value=\"" + user[4] + "\"><br>\n" +
        "<br>" +
        "<input type='hidden' name='access_code' value='" + user[5] + "'>\n" +
        "<input type=\"submit\" value=\"Modifier l'utilisateur\"><br>";
}

searchElement.addEventListener('keyup', function (e) {
    if (selectedResult != previousValue) { //on modifie la recherche
        previousValue = searchElement.value;

        if (previousRequest && previousRequest.readyState < XMLHttpRequest.DONE) {
            previousRequest.abort(); //arrêt de la requete en cours
        }

        previousRequest = getResults(previousValue);

        selectedResult = -1;
        modify.innerHTML = " ";
    }
});