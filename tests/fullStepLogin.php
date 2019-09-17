<?php
require __DIR__ . '/../vendor/autoload.php';
use Stelin\OVOID;

$ovoid = new OVOID();

echo "============================\n";
echo "====== OVO START LOGIN =====\n";
echo "============================\n";
echo "Insert Phone Number : \n";
$phonenum = trim(fgets(STDIN));

$RefID = $ovoid->login2FA($phonenum)->getRefId();
if($RefID !==null){
  echo "Get RefID SUCCESS\n";
  echo "this your RFID : ". $RefID . "\n";
} else {
  echo "Get RefID Failed\n";
  exit;
}
echo "Insert Your OTP\n";
$OTP = trim(fgets(STDIN));
$AccessToken = $ovoid->login2FAVerify($RefID, $OTP, $phonenum)->getUpdateAccessToken();
if($AccessToken !==null){
  echo "Get AccessToken SUCCESS\n";
  echo "this your AccessToken : ". $AccessToken . "\n";
} else {
  echo "Get AccessToken Failed\n";
  exit;
}
echo "Insert Your PIN\n";
$PIN = trim(fgets(STDIN));
$AuthorizationToken = $ovoid->loginSecurityCode($PIN , $AccessToken)->getAuthorizationToken();

if($AuthorizationToken !==null){
  echo "Get AccessToken SUCCESS\n";
  echo "this your AuthorizationToken : ". $AuthorizationToken . "\n";
  ////make file
  $myfile = fopen("logindata.txt", "w") or die("Unable to open file!");
  $txt = "phone_number : ".$phonenum."\n"."RefID : ".$RefID."\n"."OTP : ".$OTP."\n"."AccessToken : ".$AccessToken."\n"."PIN : ".$PIN."\n"."AuthorizationToken : ".$AuthorizationToken;

  fwrite($myfile, $txt);
  fclose($myfile);
  ////
} else {
  echo "Get AuthorizationToken Failed\n";
  exit;
}

echo "============================\n";
echo "====== OVO LOGIN FINISH =====\n";
echo "============================\n";
 ?>
