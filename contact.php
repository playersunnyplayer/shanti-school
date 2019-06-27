<?php 
session_start();
if(isset($_POST['submit'])){
	$to = 'playersunnyplayer@gmail.com';//"sandy.panchal619@gmail.com"; // this is your Email address
	$from = 'info@shantinagar.com';//$_POST['form_email']; // this is the sender's Email address
	$form_name = $_POST['form_name'];
	$form_subject = $_POST['form_subject'];
	$form_phone = $_POST['form_phone'];
	$subject = "Shanti School";
	// $subject2 = "Copy of your form submission";
	$message = "Name : " . $form_name . "\n\n" . "Contact Number :" . $form_phone . "\n\n" . "Subject :" . $form_subject . "\n\n" . "Message :" . $_POST['form_message'];
	// $message2 = "Here is a copy of your message " . $form_name . "\n\n" . $_POST['form_message'];

	$headers = "From:" . $from . "\r\n";
    $headers .= 'Cc: playersunnyplayer@gmail.com' . "\r\n";
    $headers .= 'Bcc: sandy.panchal619@gmail.com' . "\r\n";

	
	// $headers2 = "From:" . $to;
// 	echo "Mail Sent. Thank you ";
	// You can also use header('Location: thank_you.php'); to redirect to another page.
	$success = mail($to,$subject,$message,$headers);
	// mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
	$success = 1;
	if($success){
		$_SESSION['msg'] = '<div class="alert alert-success fade in alert-dismissible" style="margin-top:18px;">
		 	    				<a href="#" class="close" data-dismiss="alert" aria-label="close" title="close">×</a>
		 	    				<strong>Success!</strong> Message sent successful. We will contact you soon.
		 					</div>';
        header('Location: http://shantinagarhighschool.com/contact-us.html');
	}
}
?>