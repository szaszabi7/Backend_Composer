<?php 

require '../vendor/autoload.php';


use Petrik\ComposerElso\User;

$user = new User();
$user -> kiir();
$user -> newPet() -> roar();