<?php 

require 'vendor/autoload.php';

$client = new MongoDB\Client;

$mongo_exercise = $client->mongo_exercise;

$escuela = $mongo_exercise->escuela;
$padres = $mongo_exercise->padres;

	$nombres = $_POST['nombre'];
	$apellidos = $_POST['apellido'];
	$fnaci = $_POST['fnaci'];
	$cel = $_POST['cel'];
	$ciudad = $_POST['city'];
	$pais = $_POST['pais'];
	$madre = $_POST['madre'];
	$padre = $_POST['padre'];
	$fing = $_POST['fing'];
	$peso = $_POST['peso'];
	$estatura = $_POST['estatura'];

$document = $escuela->insertOne(
	['nombres' => $nombres, 'apellidos' => $apellidos, 'fechanaci' => $fnaci, 'numcel' => $cel, 'ciudad' => $ciudad, 'pais' => $pais, 'padres' => [$madre,$padre], 'fechaing' => $fing, 'peso' => $peso, 'estatura' => $estatura]
);
$document2 = $padres->insertOne(
	[ 'padres' => [$madre,$padre]]
);

header('location:index.php');
/*
$result1 = $companydb->createCollection('empcollection');

var_dump($result1);
*/

?>