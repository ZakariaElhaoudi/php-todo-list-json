<?php

header("Access-Control-Allow-Origin: http://localhost:5174");
header("Access-Control-Allow-Headers: X-Requested-With");

header('Content-Type: application/json');

$dataStr = file_get_contents('store.json');
$newElement = $_POST['value'] ?? null;
$data = json_decode($dataStr);

$data[] = $newElement;
$encData = json_encode($data);

file_put_contents('store.json', $encData);

echo $encData;
?>