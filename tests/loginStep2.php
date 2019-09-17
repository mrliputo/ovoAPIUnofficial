<?php
 require __DIR__ . '/../vendor/autoload.php';
use Stelin\OVOID;

$ovoid = new OVOID();
echo $ovoid->login2FAVerify('9ebb44ea9fa11f4b671df54', '7212', '081368640151')->getUpdateAccessToken();
 ?>
