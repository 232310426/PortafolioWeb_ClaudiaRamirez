<?php

$url = "https://api.thedogapi.com/v1/breeds";

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    'x-api-key: live_nCoL7XboxcckhsgQz0gI6ROv9TyxxOUSm7DCqTRN0elGQGCugWl9jjc8Ef9Kj5mI'
));

$response = curl_exec($ch);

if($response === false){
    echo "Error: " . curl_error($ch);
}else{

    $data = json_decode($response, true);

    echo "<h1>Lista de Razas</h1>";
    echo "<ul>";

    foreach($data as $breed){
        echo "<li>";
        echo $breed['name'] . " - ID: " . $breed['id'];
        echo "</li>";
    }

    echo "</ul>";
}

curl_close($ch);

?>