<? 
session_start();
ob_start();
if($_POST)
{
	$messagebody = '<table width="700" border="0" cellspacing="5" cellpadding="5" style="border:solid 2px #FFCB05;background-color:#FFFFFF">';
	$messagebody .= '<tr><td height=40 colspan=2>Dear Administrator,<br><br><strong>New User Request Recieved</strong><br></td></tr>';
	$messagebody .= '<tr><td height=20 colspan=2></td></tr>';
	$messagebody .= '<tr><td><b>Name</b></td><td>'.$_POST['form_name'].'</td></tr>';
	$messagebody .= '<tr><td><b>Phone Number</b></td><td>'.$_POST['form_phone'].'</td></tr>';
	$messagebody .= '<tr><td><b>Email ID.</b></td><td>'.$_POST['form_email'].'</td></tr>';
	$messagebody .= '<tr><td><b>Subject</b></td><td>'.$_POST['form_subject'].'</td></tr>';
	$messagebody .= '<tr><td><b>Message</b></td><td>'.$_POST['form_message'].'</td></tr>';
	$messagebody .= '<tr><td height=20 colspan=2></td></tr>';
	$messagebody .= '</table>';
	$headers  = 'MIME-Version: 1.0' . "\n";
// 	echo $messagebody;

	$Subject = "New Request" ;
	
	$sendEmailArray[] = array('EMAILID'=>'veer2787@gmail.com','EMAILSUBJECT'=>$Subject,'MESSAGE'=>$messagebody);

	sendDirectEmail($sendEmailArray);
}



function sendDirectEmail($sendEmailArray,$rootParentCompanyId="0")
{
	include "smtpmail/classes/class.smtp.php";
	include "smtpmail/classes/class.phpmailer.php";
	date_default_timezone_set('Asia/Calcutta');

	$host = "smtp.gmail.com";
	$userName = "veerender@apptology.in";
	$password = "Veerender@123";
	$fromname = "Shanti School";
	$from     = 'veerender@apptology.in';

	$alreadySendEmailArray = array();
	foreach($sendEmailArray as $EmailArray)
	{
		if(!in_array($EmailArray['EMAILID'],$alreadySendEmailArray))
		{
			$mail = new PHPMailer(); // create a new object
			 // enable SMTP
			$mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
			$mail->SMTPAuth = true; // authentication enabled
			$mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for GMail
			$mail->Host =$host;
			$mail->Port = 465; // 465 or 587
			$mail->IsSMTP();
			$mail->IsHTML(true);
			$mail->Username = $userName;
			$mail->Password = $password;
			$mail->FromName = $fromname;
			$mail->From = $from;
			
			$mail->SetFrom("");
			$mail->Subject = $EmailArray['EMAILSUBJECT'];
			$mail->Body = $EmailArray['MESSAGE'];
			$mail->AddAddress($EmailArray['EMAILID']);//send to mail id
			// $mail->AddCC('punit.nagi@ee-foundation.org');
			$mail->AddCC('veer27mar@gmail.com');
			$messageCompleted = 1;
			 if(!$mail->Send()){	
				echo "Mailer Error: " . $mail->ErrorInfo;
				// header('location:contact-us.php');
						
			 }else{			
			 	$messageCompleted = 2;
			 	$_SESSION['msg'] = '<div class="alert alert-success fade in alert-dismissible" style="margin-top:18px;">
		 	    				<a href="#" class="close" data-dismiss="alert" aria-label="close" title="close">×</a>
		 	    				<strong>Success!</strong> Message sent successful. We will contact you soon.
		 					</div>';
			 //	header('location:contact-us.php');
             }
			//print_r($mail);
		}
	}
   
	
	return true;
}


?>