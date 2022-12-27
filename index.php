<?php

/*define('FACEBOOK_SDK_V4_SRC_DIR', __DIR__.'/src/Facebook/');
require_once(__DIR__.'/src/Facebook/autoload.php');*/

echo "\n Hello World.";

 /*$fb = new Facebook\Facebook([
 'app_id' => '110200092980498',
 'app_secret' => '07ce1ce138b61565838f8b4862571e80',
 'default_graph_version' => 'v2.10',
]); */

$accessToken ="EAABkOfVldRIBAJ0ceeNmNc4gRZBWDnaOiyWxgZBZAUlPZAZBkSlTgVVNDOHzYSXdpMnsZCDhEuIdva2ZCqGjVwZCSDljUPrIvoQNaVHqoAoQhyXPRCDoXGkt6QZCHP9IFMbjVqvBDz3ZBgLhNbcOhw3iZBV2SUDcyf0blpmw8ZCGRnd9aSU80jAomycVv8xL6aUC6BdNrhs6J5O23CHtUSx7i5iXhLGhvsyXLOoZD";
$id = "1977964935782152";
$bandaiStaysScheming = 1; 
$name = "Frank Robert"; 
$header =array("Content-type: application/json"); 

$url = "https://www.facebook.com/dokkanbattle.dbz/photos/a.1655401154679292.1073741828.1631595890393152/1974012789484792";

$count = 0; 

while($bandaiStaysScheming == true)
{

$attachment =  array(
'access_token' => $accessToken,
'message' => "message".$count,
'name' => "title",
'link' => $url,
'description' => "IDK",
'actions' => json_encode(array('name' => "sharing",'link' => "https://www.facebook.com/profile.php?id=100007059947494")
)); 

$data = array(); 

$data["access_token"] = $accessToken;
$data["message"] = "this is the message number ".$count; 
$data["name"] = "whatever the title is"; 
$data["link"] = $url;
$data["description"]="I don't know";
$data["actions"] = json_encode(array("name" => "sharingFunction", "link"=>"https://www.facebook.com/profile.php?id=100007059947494"));

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,'https://graph.facebook.com/'.$id.'/feed');
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 2);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);  //to suppress the curl output 
$result = curl_exec($ch);
echo "\n".$result; 



$count=$count+1; 

echo "\nShared this ".$count." times.";

sleep(40);

}

curl_close ($ch);

//fucking hell
?>