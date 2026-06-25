<?php
$archivo = "datos.json";
$data = json_decode(file_get_contents($archivo), true);

$id = $_POST['id'];

$data = array_filter($data, function($item) use ($id) {
    return $item['id'] !== $id;
});

file_put_contents($archivo, json_encode(array_values($data)));

echo "ok";
?>