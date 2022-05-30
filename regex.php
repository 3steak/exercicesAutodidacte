<?php
// expression régulieres : 
// REGEX, contrôle d'une chaine de caractere selon les criteres voulu
// exo vérifier si le formulaire respect l'expression réguliere donnée



$str = $_POST["str"];
$valider = $_POST["valider"];
$message = "";
if (isset($valider)) {
    // l'on utilise la fonction preg_match avec deux parametres min ici :
    // la regex donnée ET ce que l'on veut vérifier 
    // preg_match retourne true ou false 

    if (preg_match("#\d#", $str))


        $message = "<li style='color:green'>Chaine valide</li>";
    else
        $message = "<li style='color:red'>Chaine invalide</li>";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>TUTO PHP</title>
    <link rel="stylesheet" href="css/style.css" />
</head>

<body>
    <form name="fo" method="post" action="">
        <input type="text" name="str" value="<?= $str ?>" />
        <input type="submit" name="valider" value="Valider" />
    </form>
    <div>
        <?php echo $message ?>
    </div>
</body>

</html>


<?php
// exercice POO graphikart 


?>