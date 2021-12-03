<?php
require 'parametres.php';


//test si mon formulaire est bien renseigné
if(!empty($_POST["email"]) && !empty($_POST["commentaire"]))
{
    //je récupère les données de mon formulaire dans des variables
    $emaildemonform = $_POST["email"];
    $commentdemonform = $_POST["commentaire"];
    $objetdemonform = $_POST["objet"];
    // Connection BDD
    $db = mysqli_connect(SERVEUR,UTILISATEUR,MOTDEPASSE,BDD);

    //requete sql d'insertion dans la bdd (aide à ajouter les commentaires écrits sur le site dans ma bdd)
    $sql = 'INSERT INTO commentaire(commentaire_email,commentaire_contenu, commentaire_objet) VALUES ("'.$emaildemonform.'","'.$commentdemonform.'","'.$objetdemonform.'")';

    //exécution de la requete sql d'insertion dans la bdd
    mysqli_query($db,$sql);
}
//sinon j'affiche une erreur mais faut mieux pas le faire car sinon elle s'affichera pour tout le monde au premier chargement
else
    //echo 'erreur';


//dans tous les cas, j'affiche le reste de ma page
?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>Commentaires</title>
        <link rel="stylesheet" href="css/style.css" />
    </head>
    <body>
        <h1>Commentaires</h1>

        <?php

        // Connection BDD
        $db = mysqli_connect(SERVEUR,UTILISATEUR,MOTDEPASSE,BDD);

        // requete
        $sql = "select * from commentaire";

        // Execution de la requete
        $res = mysqli_query($db,$sql);

        // début Boucle qui permet d'afficher les commentaires
        // mysqli_fetch_array : interroge la ligne suivante
        while($ligne = mysqli_fetch_array($res))
        {
            echo $ligne["commentaire_objet"].'<br>';
            echo $ligne["commentaire_contenu"].'<br>';
            echo 'date :'.$ligne["commentaire_date"].' écrit par : '.$ligne["commentaire_email"];
            echo '<br><br>'  ;
        }
        // Fin de la boucle

        // fermeture bdd
        mysqli_close($db);

        ?>

    <form method="post" action="index.php">
        <label for="email">Votre adresse e-mail</label><br />
        <input required type="email" name="email" id="email" placeholder="Votre adresse e-mail" size="30" maxlength="100" /><br>
        <label for="objet">Votre Objet</label><br />
        <input required type="objet" name="objet" id="objet" placeholder="Votre Objet" size="30" maxlength="100" /><br>
        <label for="commentaire">Merci de rensigner votre commentaire</label><br />
        <textarea name="commentaire" id="commentaire" placeholder= "Commentaire" rows="10" cols="50" maxlength="5000"></textarea>
        <br />
        <input type="submit" value="Envoyer" name="submit_envoyer"/>
    </form>
</body>
</html>