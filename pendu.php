<?php

// on démarre une session pour sauvegarder les infos 
session_start();

$list = [
    "Aimer",
    "Assez",
    "Avion",
    "Balai",
    "Banjo",
    "Barbe",
    "Bonne",
    "Bruit",
    "Buche",
    "Cache",
    "Capot",
    "Carte",
    "Chien",
    "Cycle",
    "Essai",
    "Gifle",
    "Honni",
    "Jambe",
    "Koala",
    "Livre",
    "Lourd"
];



function tranformeMotEnPointInterrogation($mot)
{
    $retour = "";
    for ($i = 0; $i < strlen($mot); $i++) {

        $retour = $retour . "?";
    }
    return $retour;
}


function prendMotDeLaListeAuHasard($liste)
{
    $return = array_rand($liste, 1);
    return $liste[$return];
}





// si deuxieme erreur afficher la deuxieme image etc.....
// afficher les lettres déjà proposée 
//var_dump($_POST);
if (isset($_SESSION['motAffiche']) && !empty($_SESSION['motAffiche'])) {
    $motATrouver = prendMotDeLaListeAuHasard($list);
    var_dump($motATrouver);

    $_SESSION['motAffiche'] = $motATrouver;
    $_SESSION['lettresTentees'] = array();
    $_SESSION['nbrTentatives'] = 0;
}

//echo tranformeMotEnPointInterrogation("coucou");


//créer une fonction pour remplacer les lettres proposés(dans sessions) par les bonnes
// Si une lettre du motaffiche correspond a lettrestentées 
// alors on affiche la lettre correspondante
function remplaceLettresTenteesParLabonne($motPendu, $tableauLettre)
{
    $motCrypter = tranformeMotEnPointInterrogation($motPendu);
    // $motPendu == ton mot choisi dans le pendu ex : "coucou"
    // $tableauLettre = un tableau de tentative ex : ["a","b","c"]
    // je prends mon tableau de lettre et je vérifie si mes clefs sont dans le motpendu
    foreach ($tableauLettre as $lettre) {
        $positionLettre = stripos($motPendu, $lettre);
        if ($positionLettre !== false) {
            // motpendu "coucou" "c" => "coucou"
            // mot crypte -> ????
            $motCrypter[$positionLettre] = $lettre;
            //str_replace("?", $lettre, $motCrypter);
        }
    }
    return $motCrypter;
    // retourner  ex: c??c??
}

function eurostar($motPendu, $tableauLettre)
{
    $motCrypter = tranformeMotEnPointInterrogation($motPendu);

    foreach ($tableauLettre as $lettre) {
        //a b c
        for ($i = 0; $i < strlen($motPendu); $i++) {
            if ($motPendu[$i] === $lettre) {
                // je remplace ? par lettre
                $motCrypter[$i] = $lettre;
            }
        }
    }
    return $motCrypter;
}


var_dump(eurostar("coucou", ["a", "b", "c"]))
//$_SESSION['motAffiche']
//$_SESSION['lettresTentees']  
//remplaceLettresTenteesParLabonne($_SESSION['motAffiche'], $_SESSION['lettresTentees'])
// si la lettre est dans le mot afficher la lettre au bon emplacement 
// sinon image bonhomme pas content et afficher la premiere image du pendu 




?>

<form action="" method="post">
    <label for="lettre">Entrer votre lettre: </label>
    <input type="text" name="lettre" id="lettre">
    <input type="submit" value="Envoyer">
</form>