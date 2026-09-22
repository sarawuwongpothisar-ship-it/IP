<?php
function trac() {
  logo();
  $cyn="\033[01;36m";
  $yel="\033[01;33m";
  $prompt="\n\033[00m";
  echo $prompt;
  $ip = readline('  Enter IP : ');
  $data = @unserialize(file_get_contents('http://ip-api.com/php/'.$ip));
  $FCL="\033[01;33m";
  $MCL="\033[01;37m>\033[01;32m";
  $NCL="\033[00m";
  date_default_timezone_set($data['timezone']);
  system("clear");
  echo <<<EOL
\033[01;33m


\033[01;31m      _\033[01;33m ____    _
     \033[01;31m(_)\033[01;33m  _ \  | |_ _ __ __ _  ___ ___ _ __
     | | |_) | | __| '__/ _` |/ __/ _ \ '__|
     | |  __/  | |_| | | (_| | (_|  __/ |
     |_|_|      \__|_|  \__,_|\___\___|_|


   \033[01;37m}\033[01;31m----------------------------------------\033[01;37m{
}\033[01;31m--------------- \033[01;32mIP Information\033[01;31m ---------------\033[01;37m{
   }\033[01;31m----------------------------------------\033[01;37m{

\033[00m
EOL;

  if($data['status'] == 'success') {
    echo "\n ".$FCL."ที่อยู่ IP   ".$MCL."   ".$data['query'];
    echo "\n ".$FCL."รหัสประเทศ  ".$MCL."   ".$data['countryCode'];
    echo "\n ".$FCL."ประเทศ       ".$MCL."   ".$data['country'];
    echo "\n ".$FCL."วันที่และเวลา ".$MCL."   ".date("F j, Y, g:i a");
    echo "\n ".$FCL."รหัสภูมิภาค  ".$MCL."   ".$data['region'];
    echo "\n ".$FCL."ภูมิภาค        ".$MCL."   ".$data['regionName'];
    echo "\n ".$FCL."เมือง          ".$MCL."   ".$data['city'];
    echo "\n ".$FCL."รหัสไปรษณีย์     ".$MCL."   ".$data['zip'];
    echo "\n ".$FCL."เขตเวลา     ".$MCL."   ".$data['timezone'];
    echo "\n ".$FCL."ผู้ให้บริการอินเทอร์เน็ต           ".$MCL."   ".$data['isp'];
    echo "\n ".$FCL."Organization  ".$MCL."   ".$data['org'];
    echo "\n ".$FCL."องค์กร           ".$MCL."   ".$data['as'];
    echo "\n ".$FCL."ละติจูด      ".$MCL."   ".$data['lat'];
    echo "\n ".$FCL."ความยาวนาน    ".$MCL."   ".$data['lon'];
    echo "\n ".$FCL."ที่ตั้ง      ".$MCL."   ".$data['lat'].",".$data['lon'];
    echo "\n\n$NCL";
  } else {
    echo "\n\033[01;31m Sorry unable to track your\033[01;33m IP Address\033[01;31m !!!\033[00m\n";
    echo "\033[01;31m Check your \033[01;33mNetwork connection\033[01;31m !!\033[00m\n";
    echo "\033[01;31m If you are \033[01;33mOnline\033[01;31m then check your \033[01;33mIP Address\033[01;31m !!\033[00m\n\n";
  }
  $prompt="\033[00m";
  echo $prompt;
  $getact = readline(' IP-Tracer >> ');
  menu();
}
?>
