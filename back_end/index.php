<?php
header("Access-Control-Allow-Origin: http://http://localhost:5173/");
header("Access-Control-Allow-Headers: X-Requested-With");

$studentStr = file_get_contents('data.json');

echo $studentStr;
?>