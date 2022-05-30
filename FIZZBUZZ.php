<p> plus précisement dans les boucle for :

    --$i enlève 1 avant l'exécution du code
    ++$i incremente de 1 avant l'exécution du code


    utilisation plus général :

    $i++ incrémente de 1 apres l'exécution du code
    $i-- enlève 1 après l'exécution du code
</p>

<?php
// Le probleme : 
// Ecrire un programme qui écrit les nombres de 1 à 20.
// Pour les multiples de 3 écrire "Fizz" au lieu du nombre
// Pour les multiples de 5 écrire "Buzz" au lieu du nombre
// Pour les Mutliples de 3 et 5 'FizzBuzz" 
// Pour les nombres non divisible par 3, 5 ou les deux écrire le chiffre normalement

// BOUCLE FOR : 
// la valeur, l'initiatlisation de base : 1 
// condition d'arret :  quand on arrive à 20 
// l'avancement : 1
for ($i = 1; $i <= 20; $i++) {


    // SI nombre MOD (modulo) 15 = 0   ->  est un multiple de 15
    // écrire 'FizzBuzz'
    // i % 15 : Reste de i divisé par 15 ( si = 0 alors i mutliple de 15)
    if ($i % 15 === 0) {
        echo ' FizzBuzz';
    }

    // SINON  le nombre  MOD 3  = 0  ->  est un multiple de 3 
    // écrire 'Fizz'

    else if ($i % 3 === 0) {
        echo ' Fizz ';
    }

    // SINON  le nombre  Mod 5 = 0  -> est un multiple de 5 
    // écrire 'Buzz '

    else if ($i % 5 === 0) {
        echo ' Buzz ';
    }

    // SINON 
    // écrire le chiffre normalement
    else
        echo $i . ' ';
}
?>