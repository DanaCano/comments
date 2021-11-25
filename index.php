<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Commentaires</title>
    <link rel="stylesheet" href="css/style.css" />
    <script type="application/javascript" src="js/script.js"></script>
</head>
<body>

<h1>Commentaires</h1>

<?php echo 'toto'; ?>

<?php
$mysqli = new mysqli("localhost","root","","commentaires");

// Check connection
if ($mysqli -> connect_errno) {
    echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
    exit();
}
else
    echo 'succes';
?>



</body>
</html>
