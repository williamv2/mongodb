<?php 

require 'vendor/autoload.php';

$client = new MongoDB\Client;

$mongo_exercise = $client->mongo_exercise;

$escuela = $mongo_exercise->escuela;
$padres = $mongo_exercise->padres;

	$nombres = $_POST['mnombre'];
	$apellidos = $_POST['mapellido'];
	$fnaci = $_POST['mfnaci'];
	$cel = $_POST['mcel'];
	$ciudad = $_POST['mcity'];
	$pais = $_POST['mpais'];
	//$madre = $_POST['mmadre'];
	//$padre = $_POST['mpadre'];
	$fing = $_POST['mfing'];
	$peso = $_POST['mpeso'];
	$estatura = $_POST['mestatura'];

	$mpad = $_POST['mpadres'];

	$mpadres = explode(",", $mpad);

$document= $escuela->updateOne(

['nombres' => $nombres],

[ '$set' => ['nombres' => $nombres, 'apellidos' => $apellidos, 'fechanaci' => $fnaci, 'numcel' => $cel, 'ciudad' => $ciudad, 'pais' => $pais, 'padres' => [$mpadres[0],$mpadres[1]], 'fechaing' => $fing, 'peso' => $peso, 'estatura' => $estatura]]

);


header('location:index.php');


/*
$result1 = $companydb->createCollection('empcollection');

var_dump($result1);
*/

 ?>