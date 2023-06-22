<?php
header("Access-Control-Allow-Origin: http://localhost:5174");
header("Access-Control-Allow-Headers: X-Requested-With");

header('Content-Type: application/json');

$elementStr = file_get_contents('store.json');

echo $elementStr;
?>