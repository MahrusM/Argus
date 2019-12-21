<?php

require_once 'vendor/autoload.php';
$dotenv = Dotenv\Dotenv::create(__DIR__);
$dotenv->load();
$hostname = getenv("HOSTNAME");

$name1 = $_POST["name1"];
$name2 = $_POST["name2"];

$service_url = 'http://localhost:8888/entity/joinName';
$curl = curl_init($service_url);

// {
// 	"name1" : "jancok1",
// 	"name2" : "janscok2",
// 	"score" : 10
// }

$curl_post_data = array(
        'name1' => $name1,
        'name2' => $name2,
        'score' => 10,
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


header("Location: $hostname/Argus/index.php");
die();
