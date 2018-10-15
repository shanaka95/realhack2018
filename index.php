<?php
function generateRandomString($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}
// if (isset($_GET['chat']) && isset($_GET['adduser']))
if (!isset($_GET['chat']))
{
echo sprintf(file_get_contents("index.html"), generateRandomString(),'You just created this chat! Please invite others to join');
}
else{
	echo sprintf(file_get_contents("index.html"), $_GET['chat'],$_GET['chat']);
	// echo file_get_contents("index.html");
}
 ?>