<?
$name  = $_REQUEST["name"];
$email = $_REQUEST["email"];
$subject = $_REQUEST["subject"];
$msg   = $_REQUEST["msg"];
$to    = "baguswachy382@gmail.com"; // ENTER YOUR EMAIL ADDRESS
if (isset($email) && isset($name) && isset($msg)) {
    $email_subject = "I'm Interesting with your product"; // ENTER YOUR EMAIL SUBJECT
		$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";
$headers .= "From: ".$name." <".$email.">\r\n"."Reply-To: ".$email."\r\n" ;
$msg     = "From: $name<br/> Email: $email <br/> Subject: $subject <br/> Message: $msg";
	
   $mail =  mail($to, $email_subject, $msg, $headers);
  if($mail)
	{
		echo 'success';
	}

else
	{
		echo 'failed';
	}
}

?>