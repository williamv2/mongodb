<?php 

require 'vendor/autoload.php';

$client = new MongoDB\Client;

$mongo_exercise = $client->mongo_exercise;

$padres = $mongo_exercise->padres;

	$madre = $_POST['madre'];
	$padre = $_POST['padre'];
	
$document = $padres->insertOne(
	[ 'padres' => [$madre,$padre]]
);

header('location:padres.php');
/*
$result1 = $companydb->createCollection('empcollection');

var_dump($result1);
*/

?>