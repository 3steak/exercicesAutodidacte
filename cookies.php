<?php

// l'utilisateur ne peut se connecter que si il rentre son prénom


// nom du cookie, donnée, temps avant expiration
$nom = null;

if (!empty($_COOKIE['utilisateur'])) {
    $nom = $_COOKIE['utilisateur'];
}
if (!empty($_POST['nom'])) {
    setcookie('utilisateur', $_POST['nom']);
    $nom = $_POST['nom'];
}
?>
<?php
if ($nom) {
    echo "Bonjour $nom";
} else { ?>
    <form action="" method="post">
        <p>Entre ton pseudo pour te connecter: <input type="text" name="nom"></p>
    </form>
<?php } ?>