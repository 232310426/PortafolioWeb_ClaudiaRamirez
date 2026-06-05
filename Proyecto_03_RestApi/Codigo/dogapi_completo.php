<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

$apiKey = "live_nCoL7XboxcckhsgQz0gI6ROv9TyxxOUSm7DCqTRN0elGQGCugWl9jjc8Ef9Kj5mI";

/* Obtener lista de razas */
function getBreeds($apiKey)
{
    $url = "https://api.thedogapi.com/v1/breeds";

    $ch = curl_init();

    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
        'x-api-key: ' . $apiKey
    ));

    $response = curl_exec($ch);

    if ($response === false) {
        die("Error al obtener razas: " . curl_error($ch));
    }

    curl_close($ch);

    return json_decode($response, true);
}

/* Obtener imágenes */
function getImages($apiKey)
{
    $url = "https://api.thedogapi.com/v1/images/search?limit=5";

    $ch = curl_init();

    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
        'x-api-key: ' . $apiKey
    ));

    $response = curl_exec($ch);

    if ($response === false) {
        die("Error al obtener imágenes: " . curl_error($ch));
    }

    curl_close($ch);

    return json_decode($response, true);
}

$breeds = getBreeds($apiKey);

echo "<h1>Lista de Razas de Perros</h1>";
echo "<ul>";

foreach ($breeds as $breed) {
    echo "<li>" . $breed['name'] . " (ID: " . $breed['id'] . ")</li>";
}

echo "</ul>";

echo "<hr>";

echo "<h1>Imágenes de perros</h1>";

$images = getImages($apiKey);

echo "<h3>URLs recibidas:</h3>";

foreach ($images as $image) {

    echo $image['url'] . "<br><br>";

}

echo "<hr>";

foreach ($images as $image) {

    echo '<img src="' . $image['url'] . '" width="300"><br><br>';

}
?>