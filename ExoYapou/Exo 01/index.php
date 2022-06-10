<?php
require 'Articles.php';
require 'Program.php';
$jean = new Article("01", "jean", "40", "5");
$Tshirt = new Article("02", "Tshirt", "20", "2");

// ajout des articles au stock 
$stock = new Program;
$stock->adArticle($jean);
$stock->adArticle($Tshirt);

$pants = new Article("03", "pants", "30", "6");
$stock->adArticle($pants);


var_dump($stock);
//$stock->deleteArticle("03");
//var_dump($stock);

$stock->editArticle('03', "pantalon", "30", "6");


//$stock->searchArticleByName("pants");


$stock->searchByPriceInterval("20", "30");

$stock->tousLesArticles();
