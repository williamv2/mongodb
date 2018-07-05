<?php 

require 'vendor/autoload.php';

$client = new MongoDB\Client;

$mongo_exercise = $client->mongo_exercise;

$padres = $mongo_exercise->padres;

	$madre = $_POST['mmadre'];
	$padre = $_POST['mpadre'];
	
$document= $padres->deleteOne(

['padres' => [$madre,$padre]]

);


header('location:padres.php');


 ?>