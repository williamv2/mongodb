<?php 

require 'vendor/autoload.php';

$client = new MongoDB\Client;

$mongo_exercise = $client->mongo_exercise;

$escuela = $mongo_exercise->escuela;

$document = $escuela->find();

echo json_encode(iterator_to_array($document));


/*
$result1 = $companydb->createCollection('empcollection');

var_dump($result1);
*/

 ?>