
var formulaire = document.getElementById("modifyFaq")



function modifyFaq(){
    formulaire.innerHTML = "<br>Question:<br>\n" +
        "<input type=\"text\" name=\"question\"><br>\n" +
        "Réponse:<br>\n" +
        "<input type=\"text\" name=\"reponse\"><br>\n" +
        "<br><input type=\"submit\" value=\"Ajouter\"><br>\n";
}