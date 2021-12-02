
<!--à faire la modif ici pour un projet bientôt-->

<?php

$emaildemonform = $_POST["email"];
$commentdemonform = $_POST["commentaire"];

// Connection BDD
$db = mysqli_connect("localhost","root","","commentaires");


//$sql = 'INSERT INTO commentaire(commentaire_email,commentaire_contenu) VALUES ("toto@gmail.com","testcommentaire")';



$sql = 'INSERT INTO commentaire(commentaire_email,commentaire_contenu) VALUES ("'.$emaildemonform.'","'.$commentdemonform.'")';
echo $sql;
mysqli_query($db,$sql);






?>
