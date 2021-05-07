<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <title align= "center">Formulaire La Loire à Vélo</title>
    <link rel="stylesheet" type="text/css" href="css/code_pageinternet.css">
  </head>

  <body>
    <p>
    <h1>Formulaire La Loire à Vélo</h1>
    </p>

     <form  action="code.php" method="POST">

       <label>Genre</label>
       <input type="radio"  name="fm_vl_la_loire_civi" value="Madame" />Madame
       <input type="radio"  name="fm_vl_la_loire_civi" value="Mademoiselle" />Mademoiselle
       <input type="radio"  name="fm_vl_la_loire_civi" value="Monsieur" />Monsieur
       <input type="radio"  name="fm_vl_la_loire_civi" value="Autres" />Autres


       <label for="fm_vl_la_loire_prenom">Votre prénom</label>
       <input type="text" name="fm_vl_la_loire_prenom" id = "fm_vl_la_loire_prenom" placeholder="Prénom" required />
       <span id="aidePrenom"></span>




       <label for="fm_vl_la_loire_nom">Votre nom</label>
       <input type="text" id = "fm_vl_la_loire_nom" name="fm_vl_la_loire_nom" value=""placeholder="Nom" required/>
       <span id="aidenom"></span>

       <label>Nombre</label>
       <select name="fm_vl_la_loire_personne">
          <option value="1" selected="selected">1 personne</option>
          <option value="2">2 personnes</option>
          <option value="3">3 personnes</option>
          <option value="4">4 personnes</option>
          <option value="5">5 personnes</option>
          <option value="6">6 personnes</option>
       </select>


       <label>Votre code postal</label>
       <input   type="text"
                name="fm_vl_la_loire_postal"
                pattern="[0-9]{5}"
                placeholder="72000"
                required/>


       <label>Ville</label>
       <input   type="text"
                name="fm_vl_la_loire_Ville"
                value=""
                placeholder="LE MANS"
                required/>



        <label for="pays">Pays</label>
        <select name="fm_vl_la_loire_pays" id="pays">
                <optgroup label="Europe">
                    <option value="France">France</option>
                    <option value="Espagne">Espagne</option>
                    <option value="Italie">Italie</option>
                    <option value="Royaume-uni">Royaume-Uni</option>
                </optgroup>
                <optgroup label="Amérique">
                    <option value="Canada">Canada</option>
                    <option value="Etats-Unis">Etats-Unis</option>
                </optgroup>
                <optgroup label="Asie">
                    <option value="Chine">Chine</option>
                    <option value="Japon">Japon</option>
                </optgroup>
        </select>

         <label>Numéro de téléphone</label>
       <input   type="tel"
                name="fm_vl_la_loire_phone"
                pattern="0[1-9][0-9]{8}"
                placeholder="0623568974"
                required/>


        <label>Adresse email</label>
      <input  type="email"
              name="fm_vl_la_loire_email"
              id="fm_vl_la_loire_email"
              placeholder="gerald.123@site.fr"
              required/>
     <span id="aidecouriel"></span>

      <label>Date d'arrivée</label>
      <input type="date" name="fm_vl_la_loire_date_arrivee" value="<?php echo date('Y-m-d'); ?>"
      min="<?php echo date('Y-m-d');?>" max=2021-12-31>


      <label>Date du départ</label>
      <input type="date" name="fm_vl_la_loire_date_départ" value="<?php echo date('Y-m-d'); ?>"
      min="<?php echo date('Y-m-d');?>" max=2021-12-31>


    <label for="fm_vl_la_loire_comment">Commentaire</label>
    <textarea id="fm_vl_la_loire_comment"
              name="fm_vl_la_loire_comment"
              rows=4
              cols=40>
    </textarea>



    <p>
      <input type="submit" value="Envoyer"/>
      <input type="reset" value="Effacer"/>
    </p>
</form>

<script src="js/ecoute.js"></script>

<?php echo "Celle-ci a été ecrite par samuel";?>

</body>
</html>
