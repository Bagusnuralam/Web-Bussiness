<?
$email = $_REQUEST["email"];
$to    = "baguswachyu382@gmail.com"; // ENTER YOUR EMAIL ADDRESS
if (isset($email)) {
    $email_subject = "$name I'm Interesting with your product"; // ENTER YOUR EMAIL SUBJECT
		$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";
$headers .= "Email: ".$email.">\r\n"."Reply-To: ".$email."\r\n" ;
$msg     = "Email: $email";
	
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