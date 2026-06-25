<?php
$id = $_POST['id'];
$url = $_POST['url'];

$data = json_decode(file_get_contents("datos.json"), true);
$data[$id] = $url;

file_put_contents("datos.json", json_encode($data, JSON_PRETTY_PRINT));

echo "OK";
?>