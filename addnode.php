<?php

require_once 'vendor/autoload.php';
$dotenv = Dotenv\Dotenv::create(__DIR__);
$dotenv->load();
$hostname = getenv("HOSTNAME");
$backhost = getenv("BACKENDHOST");

$name = $_POST["name"];
$jabatan = $_POST["jabatan"];
$telp = $_POST["telp"];

$service_url = "$backhost/api/entity/store";
$curl = curl_init($service_url);


$curl_post_data = array(
        'name' => $name,
        'description' => $jabatan,
        'phone_number' => $telp,
        'links' => null,
);

curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLOPT_POSTFIELDS, $curl_post_data);

$curl_response = curl_exec($curl);
if ($curl_response === false) {
    $info = curl_getinfo($curl);
    curl_close($curl);
    die('error occured during curl exec. Additioanl info: ' . var_export($info));
}
curl_close($curl);
$decoded = json_decode($curl_response);
if (isset($decoded->meta->status_code) && $decoded->meta->status_code == 'ERROR') {
    die('error occured: ' . $decoded->meta->message[0]);
}
echo 'response ok!';
echo $decoded->meta->message[0];


header("Location: $hostname/Argus/engine.php");
die();
