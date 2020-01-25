var div = document.getElementById("modify");
var formulaire = document.createElement("form");
div.appendChild(formulaire);
formulaire.setAttribute("method","post");
formulaire.setAttribute("action","/backoffice")


function modify(){
    formulaire.innerHTML = "<br>Question:<br>\n" +
        "<input type=\"text\" name=\"question\"><br>\n" +
        "Réponse:<br>\n" +
        "<input type=\"text\" name=\"reponse\"><br>\n" +
        "<br><input type=\"submit\" value=\"Ajouter\"><br>\n";
}