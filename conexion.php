<?php

require_once "autoload_mongo.php";

use MongoDB\Client;

$client = new Client("mongodb://localhost:27017");

$db = $client->test;
$collection = $db->usuarios;

$insertOneResult = $collection->insertOne([
    "nombre" => "Jesus",
    "edad" => 22,
]);

echo "Insertado con ID: " . $insertOneResult->getInsertedId();

