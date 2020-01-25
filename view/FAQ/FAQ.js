var questions;
var rep;

var wraper = document.getElementById("faq");


getFAQ();




function getFAQ() {
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
    xmlhttp.open('GET', './controller/FAQ_control.php?request=faq', true);
    xmlhttp.send();

    //traitement de la réponse
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            displayFAQ(xmlhttp.responseText);
        }
    };
}

function displayFAQ(faq) {
    faq = faq.split('¬');

    questions = faq[0];
    rep = faq[1];

    questions = questions.split('|');
    rep = rep.split('|');

    for (var i=0;i<questions.length;i++){
        var field = document.createElement("section");
        field.setAttribute("class","faq-section");

        var questionField = document.createElement("label");
        var questionInput = document.createElement("input");
        questionInput.setAttribute("type","checkbox");
        questionInput.setAttribute("id","q"+i);
        questionField.setAttribute("for","q"+i);

        var repField = document.createElement("p");

        repField.setAttribute("class","rep");

        wraper.appendChild(field);
        field.appendChild(questionInput);
        field.appendChild(questionField);
        field.appendChild(repField);

        questionField.innerText = questions[i];
        repField.innerText = rep[i];
    }
}
