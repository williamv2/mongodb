<?php 

require 'vendor/autoload.php';

$client = new MongoDB\Client;

$mongo_exercise = $client->mongo_exercise;

$escuela = $mongo_exercise->escuela;

	$nombres = $_POST['mnombre'];
	
$document= $escuela->deleteOne(

['nombres' => $nombres]

);


header('location:index.php');


 ?>