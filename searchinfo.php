<?php

require_once 'vendor/autoload.php';
$dotenv = Dotenv\Dotenv::create(__DIR__);
$dotenv->load();
$hostname = getenv("HOSTNAME");
$backhost = getenv("BACKENDHOST");

$search = $_POST["search"];

$service_url = "$backhost/api/entity/getraw";

$contents = file_get_contents($service_url);
 
if ($contents !== false) {
    $response = json_decode($contents);
    foreach ($response->nodes as $elem) {
        if (strpos($elem->name, $search) !== false) {
            echo "<a href='$hostname/info.php/?name=$elem->name'>$elem->name</a>";
            echo "<br>";
        }
    }
}

// $curl_response = curl_exec($curl);
// if ($curl_response === false) {
//     $info = curl_getinfo($curl);
//     curl_close($curl);
//     die('error occured during curl exec. Additioanl info: ' . var_export($info));
// }
// curl_close($curl);
// $decoded = json_decode($curl_response);
// if (isset($decoded->meta->status_code) && $decoded->meta->status_code == 'ERROR') {
//     die('error occured: ' . $decoded->meta->message[0]);
// }
// echo 'response ok!';
// echo $decoded->meta->message[0];


// header("Location: $hostname/engine.php");
// die();
