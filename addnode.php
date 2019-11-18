<?php
$_POST["ID"];

$service_url = 'http://localhost:8888/entity/store';
$curl = curl_init($service_url);
// {
// 	"name" : "Mahen",
// 	"phone_number" : "081214785799",
// 	"links" : [
// 		"www.facebook.com/12312314",
// 		"www.twitter.com/3421"
// 	]
// }
$curl_post_data = array(
        'name' => 'test message',
        'useridentifier' => 'agent@example.com',
        'department' => 'departmentId001',
        'subject' => 'My first conversation',
        'recipient' => 'recipient@example.com',
        'apikey' => 'key001'
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
if (isset($decoded->response->status) && $decoded->response->status == 'ERROR') {
    die('error occured: ' . $decoded->response->errormessage);
}
echo 'response ok!';
var_export($decoded->response);
