<?php
 require __DIR__ . '/../vendor/autoload.php';
use Stelin\OVOID;

$ovoid = new OVOID();
echo $ovoid->loginSecurityCode('13333', '4b44df95043d7bfaf0d725a4841b9')->getAuthorizationToken();
 ?>
