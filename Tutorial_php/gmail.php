<?php

if (isset($_POST['otpregister12121'])) {

	$gmailtosentto = $_POST['otpgetgmail121'];


$sentinggamil="uzairishfaq1234@gmail.com";
$name="M uzair ishfaq";

$mobile="03445774468";


$html12="<table><tr><td>Name</td><td>$name</td></tr><tr><td>Email</td><td>Uzairishfaq@gmail</td></tr><tr><td>Mobile</td><td>$mobile</td></tr><tr><td>Comment</td><td>done finaly</td></tr></table>";
	
	include('smtp/PHPMailerAutoload.php');
	$mail=new PHPMailer(true);
	$mail->isSMTP();
	$mail->Host="smtp.gmail.com";
	$mail->Port=587;
	$mail->SMTPSecure="tls";
	$mail->SMTPAuth=true;
	$mail->Username="uzairishfaq12345@gmail.com";
	$mail->Password="uzair12345";
	$mail->SetFrom("uzairishfaq12345@gmail.com");
	$mail->addAddress($sentinggamil);
	$mail->IsHTML(true);
	$mail->Subject="New Contact Us";
	$mail->Body=$html12;
	$mail->SMTPOptions=array('ssl'=>array(
		'verify_peer'=>false,
		'verify_peer_name'=>false,
		'allow_self_signed'=>false
	));
	if($mail->send()){
		echo "Mail send";
	}else{
		echo "Error occur";
	}
}
?>