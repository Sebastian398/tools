<?php
$data = json_decode(file_get_contents("datos.json"), true);

$id = $_GET['id'];

if (isset($data[$id])) {
    echo $data[$id];
} else {
    echo "";
}
?>