<?php

header("Access-Control-Allow-Origin: http://localhost:5173");
header("Access-Control-Allow-Headers: X-Requested-With");

header('Content-Type: application/json');
$newElement = $_POST['value'] ?? null;
$dataStr = file_get_contents('store.json');

$data = json_decode($dataStr);

$data[] = $newElement;
$encData = json_encode($data);

file_put_contents('store.json', $encData);

echo $encData;
?>