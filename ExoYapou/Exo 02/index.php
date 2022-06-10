<?php
require 'Employe.php';
$euro = new Employe('1234', 'Star', 'Euro', new DateTime('1986'), new DateTime('2010-01-01'), '2200');
/*
$euro->age();
$euro->getSalaire();
$euro->anciennete();
$euro->AugmentationDuSalaire();
echo $euro->getSalaire();
*/
$euro->AfficherEmploye();
