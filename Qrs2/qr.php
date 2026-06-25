
<?php
$data = json_decode(file_get_contents("datos.json"), true);

$id = $_GET['id'];

if (isset($data[$id])) {
    header("Location: " . $data[$id]);
} else {
    echo "No existe";
}
?>
