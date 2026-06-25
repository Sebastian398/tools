<?php
$archivo = "datos.json";

if (!file_exists($archivo)) {
    echo json_encode([]);
    exit;
}

$data = json_decode(file_get_contents($archivo), true);

$resultado = [];

foreach ($data as $id => $url) {
    $resultado[] = [
        "id" => $id,
        "url" => $url
    ];
}

header('Content-Type: application/json');
echo json_encode($resultado);
?>