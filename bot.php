<?php
system('clear');
error_reporting(0);
require("config.php");
date_default_timezone_set('Asia/Jakarta');

function pisit($url, $ua){
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
curl_setopt($ch, CURLOPT_HTTPHEADER, $ua);
$result = curl_exec($ch);
curl_close($ch);
return $result; 
}

function TipePost($url, $ua, $data){
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_HTTPHEADER, $ua);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
$result = curl_exec($ch);
curl_close($ch);
return $result; 
}


$res="\033[7m";
$hitam="\033[0;30m";
$abu2="\033[1;30m";
$putih="\033[0;37m";
$putih2="\033[1;37m";
$red="\033[0;31m";
$red2="\033[1;31m";
$green="\033[0;32m";
$green2="\033[1;32m";
$yellow="\033[0;33m";
$yellow2="\033[1;33m";
$blue="\033[0;34m";
$blue2="\033[1;34m";
$purple="\033[0;35m";
$purple2="\033[1;35m";
$lblue="\033[0;36m";
$lblue2="\033[1;36m";

echo "\n";
echo"{$lblue2}^   ▒▀▀█▀▀  ▒█  ▒█  ▒▀▀█▀▀█  ▒█▀▀█  ▒▀█▀▒     {$lblue2}^\n";
echo"{$lblue2}^     ▒█    ▒█  ▒█    ▒█  █  ▒█  █    █       {$lblue2}^\n";
sleep(1);
echo"{$lblue2}^   {$putih2}  ▒█    ▒█  ▒█    ▒█▄▄█  ▒█▄▄█    █       {$lblue2}^\n";
echo"{$lblue2}^   {$putih2}  ▒█    ▒█▄▄▒█    ▒█     ▒█ ▒█  ▒▄█▄▒     {$lblue2}^\n";
sleep(1);
echo"{$blue2}▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄\n";
echo "{$blue2}█{$lblue2}Creator: {$putih2}Tupai{$blue2}       █{$lblue2}YT: {$putih2}Penghasil Gratisan{$blue2} █\n";
echo "{$blue2}█{$lblue2}HOBI   : {$putih2}Nyopet{$blue2}      █{$yellow}       Warning!!!      {$blue2}█\n";
sleep(1);
echo "{$blue2}█{$lblue2}Tanggal: {$putih2}";
echo date("d-M-Y"); 
echo " {$blue2}█{$yellow}This script is premium.{$blue2}█\n";
echo "{$blue2}█▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄█▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄█\n";
echo "{$blue2}█▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄█▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄█\n";

   
echo "{$putih2}1. {$yellow}earnbitmoon
{$putih2}2. {$yellow}coinadster
{$putih2}Pilih: {$green}";
$menu = trim(fgets(STDIN));

if($menu == 1){

$url = "https://earnbitmoon.club/";
$ua = ["user-agent: $UA",
"referer: https://earnbitmoon.club/",
"Cookie: $COOKIE"];
$Tupai = pisit($url, $ua);

$one = explode('<font class="text-success">', $Tupai);
$two = explode('</font>', $one[1]);
$user = $two[0];
if($user == ""){
echo "gagal Login";
exit();
}else{
echo "{$lblue2}Username: {$green2}$user\n";
$one = explode('<b id="sidebarCoins">', $Tupai);
$two = explode('</b>', $one[1]);
$balance = $two[0];
echo "{$lblue2}Balance : {$green2}$balance  \n";
echo"{$blue2}▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄\n";
}


while(true){
$url = "https://earnbitmoon.club/";
$ua = ["user-agent: $UA",
"referer: https://earnbitmoon.club/",
"Cookie: $COOKIE"];

$Tupai = pisit($url, $ua);
$one = explode("var token = '", $Tupai);
$two = explode("'", $one[1]);
$token = $two[0];

//Solvemdia
$url = "$URL";
$ua = ["user-agent: $UA",
"referer: https://earnbitmoon.club/"];
$Tupai = pisit($url, $ua);
       $one = explode('"chid"     : "', $Tupai);
       $two = explode('"', $one[1]);
       $caleng = "$two[0]";
$img = "solve.jpg";


$url = "https://api-secure.solvemedia.com/papi/media?c=$caleng;w=300;h=150;fg=000000;bg=f8f8f8";
$Tupai = pisit($url, $ua);
$open = fopen($img, 'w+');
       $gabung = fwrite($open, $Tupai);
       $close = fclose($open);
$Tupai = file_get_contents('solve.jpg');
$one = explode('<!-- ',$Tupai);
$two = explode(' (c)', $one[1]);
$hasil = $two[0];


if($hasil == ""){

shell_exec("convert ".$img." -gravity North -chop x15 ".$img);
$bos = shell_exec('curl --silent -H "apikey:K82692483888957" --form "file=@solve.jpg" --form "language=eng" --form "ocrengine=2"  https://api.ocr.space/Parse/Image'); 
$json = json_decode($bos);
$hasil = $json->ParsedResults[0]->ParsedText;
$input = preg_replace("/[^a-zA-Z0-9!-? ]/", "", $hasil);
if($input ==""){
$bos = shell_exec('curl --silent -H "apikey:K82692483888957" --form "file=@solve.jpg" --form "language=eng" --form "ocrengine=5"  https://api.ocr.space/Parse/Image'); 
$json = json_decode($bos);
$hasil = $json->ParsedResults[0]->ParsedText;
$input = preg_replace("/[^a-zA-Z0-9!-? ]/", "", $hasil);
}


//Claim Faucet
$url = "https://earnbitmoon.club/system/ajax.php";
$ua = ["user-agent: $UA",
"referer: https://earnbitmoon.club/",
"Cookie: $COOKIE"];
$data = "a=getFaucet&token=".$token."&captcha=0&challenge=".$caleng."&response=".$input;

$Tupai = TipePost($url, $ua, $data);
$one = explode('you won', $Tupai);
$two = explode('!', $one[1]);
$res = "$two[0]";

if($res == ""){

for($x=1; $x<15; $x++){
	echo "\r                                    \r";
	              echo "{$yellow2}invalid captcha!!! {$putih2}[ {$green2}".date('H:i:s')."{$putih2} ]";
	              sleep(1);
	echo "\r                                    \r";
	                            
   }

}else{

$url = "https://earnbitmoon.club/";
$ua = ["user-agent: $UA",
"referer: https://earnbitmoon.club/system/ajax.php",
"Cookie: $COOKIE"];

$Tupai = pisit($url, $ua);
$one = explode('<font class="text-success">', $Tupai);
$two = explode('</font>', $one[1]);
$user = $two[0];
echo "{$lblue2}Username: {$green2}$user\n";
$one = explode('<b id="sidebarCoins">', $Tupai);
$two = explode('</b>', $one[1]);
$balance = $two[0];
echo "{$lblue2}Balance : {$green2}$balance    {$putih2}[ {$yellow2}".date('H:i:s')."{$putih2} ]\n";
echo"{$blue2}▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄\n";

for($x=1; $x<301; $x++){
	echo "\r                                    \r";
	              echo "{$yellow2}Waiting!!! {$putih2}[ {$green2}".date('H:i:s')."{$putih2} ]";
	              sleep(1);
	echo "\r                                    \r";
	                            
   }
  }
 }
}

//scrip coinadster
}elseif($menu == 2){

$url = "https://coinadster.com/faucetz.html";
$ua = ["user-agent: $UA1",
"referer: https://coinadster.com",
"Cookie: $COOKIE1"];
$Tupai = pisit($url, $ua);
$one = explode('<font class="text-success">', $Tupai);
$two = explode('</font>', $one[1]);
$user = $two[0];
$one = explode('<div class="text-warning"><b>', $Tupai);
$two = explode('</b>', $one[1]);
$balance = $two[0];

if($user == ""){
echo "{$red}gagal Login\n";
exit();
}else{
echo "{$lblue2}Username: {$green2}$user\n";
echo "{$lblue2}Balance : {$green2}$balance  \n";
echo"{$blue2}▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄\n";
}
	
	

while(true){

$url = "https://coinadster.com/faucetz.html";
$ua = ["user-agent: $UA1",
"referer: https://coinadster.com",
"Cookie: $COOKIE1"];
$Tupai = pisit($url, $ua);
$one = explode("var token = '", $Tupai);
$two = explode("'", $one[1]);
$token = $two[0];

//Solvemdia
$url = "$URL1";
$ua = ["user-agent: $UA1",
"referer: https://coinadster.com/faucetz.html"];
$Tupai = pisit($url, $ua);
       $one = explode('"chid"     : "', $Tupai);
       $two = explode('"', $one[1]);
       $caleng = "$two[0]";
$img = "solve1.jpg";


$url = "https://api-secure.solvemedia.com/papi/media?c=$caleng;w=300;h=150;fg=000000;bg=f8f8f8";
$Tupai = pisit($url, $ua);
$open = fopen($img, 'w+');
       $gabung = fwrite($open, $Tupai);
       $close = fclose($open);
$Tupai = file_get_contents('solve1.jpg');
$one = explode('<!-- ',$Tupai);
$two = explode(' (c)', $one[1]);
$hasil = $two[0];

if($hasil == ""){
shell_exec("convert ".$img." -gravity North -chop x15 ".$img);
$bos = shell_exec('curl --silent -H "apikey:K82692483888957" --form "file=@solve1.jpg" --form "language=eng" --form "ocrengine=5"  https://api.ocr.space/Parse/Image'); 
$json = json_decode($bos);
$hasil = $json->ParsedResults[0]->ParsedText;
$input = preg_replace("/[^a-zA-Z0-9!-? ]/", "", $hasil);
if($input ==""){
$bos = shell_exec('curl --silent -H "apikey:K82692483888957" --form "file=@solve1.jpg" --form "language=eng" --form "ocrengine=2"  https://api.ocr.space/Parse/Image'); 
$json = json_decode($bos);
$hasil = $json->ParsedResults[0]->ParsedText;
$input = preg_replace("/[^a-zA-Z0-9!-? ]/", "", $hasil);
}


//Claim Faucet
$url = "https://coinadster.com/system/ajax.php";
$ua = ["user-agent: $UA1",
"referer: https://coinadster.com/faucetz.html",
"Cookie: $COOKIE1"];
$data = "a=getFaucet&token=".$token."&captcha=0&challenge=".$caleng."&response=".$input;

$Tupai = TipePost($url, $ua, $data);
$one = explode('you won', $Tupai);
$two = explode('!', $one[1]);
$res = "$two[0]";

if($res == ""){
echo "\r                                    \r";
echo "Invalid Captcha";
sleep(3);
echo "\r                                    \r";

}else{

$url = "https://coinadster.com/faucetz.html";
$ua = ["user-agent: $UA1",
"referer: https://coinadster.com/system/ajax.php",
"Cookie: $COOKIE1"];

$Tupai = pisit($url, $ua);
$one = explode('<font class="text-success">', $Tupai);
$two = explode('</font>', $one[1]);
$user = $two[0];
echo "{$lblue2}Username: {$green2}$user\n";
$one = explode('<div class="text-warning"><b>', $Tupai);
$two = explode('</b>', $one[1]);
$balance = $two[0];
echo "{$lblue2}Balance : {$green2}$balance    {$putih2}[ {$yellow2}".date('H:i:s')."{$putih2} ]\n";
echo"{$blue2}▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄\n";

for($x=605; $x>0; $x--){
	echo "\r                                    \r";
	              echo "{$yellow2}Waiting!!! {$putih2}[ {$green2}".$x."{$putih2} ]";
	              sleep(1);
	echo "\r                                    \r";
	                            
   }
  }
 }
}
	
}




?>
