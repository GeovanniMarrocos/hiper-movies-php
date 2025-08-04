<?php 

require_once("models/Message.php");
require_once("auth_process.php");
require_once("vendor/autoload.php");


$alerts = new Message($BASE_URL);
$alerts = $message->getMessage();

if($alerts["type"] === "succes") 
{
  $alertsGet = '<i class="fa-regular fa-circle-check"></i>';
}
elseif(($alerts["type"] === "error") ) 
{
    $alertsGet = '<i class="fa-solid fa-triangle-exclamation"></i>';
}


?>