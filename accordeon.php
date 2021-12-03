
<!--à faire la modif ici pour un projet bientôt-->
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Commentaires</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css" />
    <script type="application/javascript" src="js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</head>
<body>

<h1>Commentaires</h1>

<?php

// Connection BDD
$db = mysqli_connect("localhost","root","","commentaires");

// Lecture BDD
$sql = 'select * from commentaire';
echo $sql.'<br>';
//
$res = mysqli_query($db,$sql);
echo '<div class="accordion" id="accordionExample">';
$i=1;
while($ligne = mysqli_fetch_array($res))
{
    echo $ligne["commentaire_contenu"].'<br>'  ;
    /*
        $passerligne = '<br>'  ;
        echo $ligne["commentaire_contenu"].'<br>';
        echo 'date :'.$ligne["commentaire_date"].' écrit par : '.$ligne["commentaire_email"];
        echo $ligne["commentaire_email"];

        echo '<br>'  ;

        $passerligne = '<br>'  ;
        echo $ligne["commentaire_contenu"].'<br>';
        echo '<b>date : </b>'.$ligne["commentaire_date"].' écrit par : '.$ligne["commentaire_email"];
        echo $ligne["commentaire_email"];
    */

    if ($i==1)
        $show = 'show';
    else
        $show = '';


    echo '
    
    <div class="accordion-item">
        <h2 class="accordion-header" id="heading'.$i.'">
            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse'.$i.'" aria-expanded="true" aria-controls="collapse'.$i.'">
                '.$ligne["commentaire_date"].'
            </button>
        </h2>
        <div id="collapse'.$i.'" class="accordion-collapse collapse '.$show.'" aria-labelledby="heading'.$i.'" data-bs-parent="#accordionExample">
            <div class="accordion-body">
            '.$ligne["commentaire_contenu"].'
            </div>
        </div>
    </div>
    
    
    
    
    
    ';

    $i++;

}
echo '</div>';

mysqli_close($db);

?>





</body>
</html>
