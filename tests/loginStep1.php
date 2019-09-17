<?php
 require __DIR__ . '/../vendor/autoload.php';
use Stelin\OVOID;

$ovoid = new OVOID();
echo $ovoid->login2FA('081368840151')->getRefId();
 ?>
