<?php

$id = $_GET['id'];

$dsn = "mysql:host=localhost;dbname=browne9_Charitables;charset=utf8mb4";
$dbusername = "browne9_weedsite";
$dbpassword = "g@5o4nFUJ7ha";

$pdo = new PDO($dsn, $dbusername, $dbpassword);

$stmt = $pdo->prepare("SELECT `address`, `city`, `state`, `postal_code`  FROM `Users` WHERE `id` = $id");


$stmt->execute();


$result = $stmt->fetch(PDO::FETCH_ASSOC);

$addressStr = $result['address'];
$postalStr = $result['postal_code'];
$formattedAddressStr = str_replace(' ', '+', $addressStr);
$formattedPostalStr = str_replace(' ', '+', $postalStr);
$address = $formattedAddressStr . "+" . $result['city'] . "+" . $result['state'] . "+" . $formattedPostalStr;

$data = file_get_contents("https://maps.googleapis.com/maps/api/geocode/json?address=$address&key=AIzaSyD5TfqRaeXmKpUbcGKd5vQbHS4bqj8qHkU");
$geocode = json_decode($data);
$lat = $geocode->results[0]->geometry->location->lat;
$lng = $geocode->results[0]->geometry->location->lng;
$pos = new \stdClass();
$pos->lat = $lat;
$pos->lng = $lng;

echo (json_encode($pos));
