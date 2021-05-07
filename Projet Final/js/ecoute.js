var pseudoElt = document.getElementById("fm_vl_la_loire_prenom");
    pseudoElt.value = "";

        // Affichage d'un message contextuel pour la saisie du Prénom
        pseudoElt.addEventListener("focus", function () {
        document.getElementById("aidePrenom").textContent = "N'oublier pas la majuscule au début";
        });
        // Suppression du message contextuel pour la saisie du pseudo
        pseudoElt.addEventListener("blur", function (e) {
        document.getElementById("aidePrenom").textContent = "";
        });



var pseudoElt = document.getElementById("fm_vl_la_loire_nom");
    pseudoElt.value = "";

        // Affichage d'un message contextuel pour la saisie du nom
        pseudoElt.addEventListener("focus", function () {
        document.getElementById("aidenom").textContent = "N'oublier pas la majuscule au début";
        });
        // Suppression du message contextuel pour la saisie du pseudo
        pseudoElt.addEventListener("blur", function (e) {
        document.getElementById("aidenom").textContent = "";
        });

var adresseElt = document.getElementById("fm_vl_la_loire_email");
    adresseElt.value = "";

        // Affichage d'un message contextuel pour la saisie de l'adresse email
        adresseElt.addEventListener("focus", function () {
        document.getElementById("aidecouriel").textContent = "N'oubliez pas le '@' et le domaine Ex: .fr .com etc...";
        });
        // Suppression du message contextuel pour la saisie de l'adresse email
        adresseElt.addEventListener("blur", function (e) {
        document.getElementById("aidecouriel").textContent = "";
        });
