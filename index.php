<?php



if ($_GET['lien'] == "page1") {
    include "entree.php";
} elseif ($_GET['lien'] == "page2") {
    include "milieux.php";
} else {
    include "fin.php";
}
$page = (expresion)
?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Mes recettes</title>

</head>
<body>
    <h1>Bonjour tout le monde<h1>
    
    <ul>
        <li>
        <a href="index.php?lien=page1">Entrée</a>
        </li>
        <li>
            <a href="index.php?lien=page2"> milieux </a>
        </li>
        <li>
            <a href="index.php?lien=page3"> fin </a>
        </li>
    </ul>
    <div>
        <?= 
</body>
</html>




