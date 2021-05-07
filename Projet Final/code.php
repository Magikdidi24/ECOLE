<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <title align= "center">Réponse Formulaire La Loire à Vélo</title>
     <link rel='stylesheet' type='text/css' href='css2/CSS_image.css'
  </head>


  <body>
<form>

    <p>
    <h1>Formulaire La Loire à Vélo</h1>
    </p>

<li>Bonjour <?php  echo $_POST['fm_vl_la_loire_civi'] . ' ' . $_POST['fm_vl_la_loire_nom'] . ' ' . $_POST['fm_vl_la_loire_prenom']; ?></li>

<h2> Récapitulatif information</h2>

<li> Genre :<?php  echo $_POST['fm_vl_la_loire_civi'];?></li>
<li>Nom :<?php  echo $_POST['fm_vl_la_loire_nom']; ?></li>
<li>Prénom :<?php  echo $_POST['fm_vl_la_loire_prenom']; ?></li>
<li>Nombre :<?php  echo $_POST['fm_vl_la_loire_personne']; ?></li>
<li>code postal :<?php  echo $_POST['fm_vl_la_loire_postal']; ?></li>
<li>Ville :<?php  echo $_POST['fm_vl_la_loire_Ville']; ?></li>
<li>Pays :<?php  echo $_POST['fm_vl_la_loire_pays']; ?></li>
<li>Numéro de téléphone :<?php  echo $_POST['fm_vl_la_loire_phone']; ?></li>
<li>Adresse email :<?php  echo $_POST['fm_vl_la_loire_email']; ?></li>
<li>Date d'arrivée :<?php  echo $_POST['fm_vl_la_loire_date_arrivee']; ?></li>
<li>Date du départ :<?php  echo $_POST['fm_vl_la_loire_date_départ']; ?></li>
<li>Commentaire :<?php  echo $_POST['fm_vl_la_loire_comment']; ?></li>

<p> Merci pour votre inscription et à bientôt sur nos routes! </p>
<?php
$fichier = fopen('recapitulatif.txt', 'w+');
fwrite($fichier, "Nom:". ' ' . $_POST['fm_vl_la_loire_nom'] . "\n");
fwrite($fichier, "Prenom:".' ' .$_POST['fm_vl_la_loire_prenom']. "\n");
fwrite($fichier, "Personne:".' ' .$_POST['fm_vl_la_loire_personne']. "\n");
fwrite($fichier, "Postal:".' ' .$_POST['fm_vl_la_loire_postal']. "\n");
fwrite($fichier, "Ville:".' ' .$_POST['fm_vl_la_loire_Ville']. "\n");
fwrite($fichier, "Pays:".' ' .$_POST['fm_vl_la_loire_pays']. "\n");
fwrite($fichier, "Phone:".' ' .$_POST['fm_vl_la_loire_phone']. "\n");
fwrite($fichier, "Email:".' ' .$_POST['fm_vl_la_loire_email']. "\n");
fwrite($fichier, "Date d'arrivée:".' ' .$_POST['fm_vl_la_loire_date_arrivee']. "\n");
fwrite($fichier, "Date de départ:". ' ' .$_POST['fm_vl_la_loire_date_départ']. "\n");
fwrite($fichier, "Commentaire:". ' ' .$_POST['fm_vl_la_loire_comment']. "\n");
?>
</form>
</body>
</html>
