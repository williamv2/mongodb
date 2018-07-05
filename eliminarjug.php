<?php 

require 'vendor/autoload.php';

$client = new MongoDB\Client;

$mongo_exercise = $client->mongo_exercise;

$escuela = $mongo_exercise->escuela;
$padres = $mongo_exercise->padres;

	$nombres = $_POST['mnombre'];
	$madre = $_POST['mmadre'];
	$padre = $_POST['mpadre'];
	
$document= $escuela->deleteOne(

['nombres' => $nombres]

);

/*$document2= $padres->deleteOne(

['padres' => [$madre,$padre]]

);*/


header('location:index.php');


 ?>