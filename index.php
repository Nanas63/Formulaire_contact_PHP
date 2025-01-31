<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire contact</title>


    <link rel="stylesheet" href="/asset//style.css">

</head>

<body>
   <h1><?php echo "Formulaire de contact"?></h1><br>
        <form method="post" action="">
            <label for= "nom">Votre Nom</label>
            <input id="nom" type="text" name="nom"><br><br>

            <label for="prenom">Votre prénom</label>
            <input id="prenom" type="text" name="prenom"><br><br>

            <label for="email">Votre email</label>
            <input id ="email" type="email" name="email"><br><br>

            <label for="telephone">Votre téléphone</label>
            <input id="telephone" type="number" name="telephone"><br><br>



            <label for="objet">Objet</label>
             <select name="objet" id="but">
                <option value="">--Choisissez une option--</option>
                <option value="rappel">Voulez-vous être rappelé ?</option>
                <option value="rdv">Voulez-vous prendre un RDV ?</option>
                <option value="renseignement">Vous souhaitez des renseignements ?</option>
                <option value="contact sav">Vous souhaitez contacter le SAV ?</option>
                <option value="autre">Autre</option>
            </select><br><br>


            <label for="message">Message</label>
            <textarea id="message" name="message" rows="5"></textarea><br><br>

            <input type="submit" class="bouton" value="Valider"><br><br>



</form>
</body>
</html>