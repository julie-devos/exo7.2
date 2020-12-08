<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Exercice 6-Partie 2</title>
</head>
<body>
<?php
$isOK= rand(0, 1);
?>
<p><?=$isOK." ";?></p>
<?= $isOK==false ? "C'est pas bon !!!" : "C'est bon !!!";?>

</body>
</html>