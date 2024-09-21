<?php
	// $a = $_GET['id'];

	if ( $_SERVER['REQUEST_METHOD']=='GET' && realpath(__FILE__) == realpath( $_SERVER['SCRIPT_FILENAME'])){
		header( 'HTTP/1.0 403 Forbidden', TRUE, 403 );
		die ("<h2>Access Denied!</h2> This file is protected and not available to public.");
	}
    // include 'connection.php';
    include 'link.php';
	// if ($a == 1) {
	// 	sendMail();
	// } else if ($a == 2) {
	// 	sendpdf();
	// } else {
	// 	echo "<script type='text/javascript'>alert('Oops Something went wrong!!');document.location='thankyou.php'</script>";
	// }
	
	function validate($m, $k='')
	{
		$m = trim($m);
		if($m == "")
			die("Please Fill the missing Field");

		$val = array('url', 'www', 'http', '.com', 'disclaimar');
		
		if($k == "email")
		{
			if(!filter_var($m, FILTER_VALIDATE_EMAIL))
				die('Enter the valid mail');
		}
		else if($k == "phone")
		{
			if(!preg_match('/^[0-9]+$/', $m))
				die('Enter the valid Mobile Number');
			else if(strlen($m) < 10 || strlen($m) > 12 )
				die('Enter valid 10 digit Mobile Number');
		}	
		else{
			if(strlen($m) > 100){
				die('Message should be at most 100 char');
			}
			else{
				foreach($val as $v){
					if(strpos(strtolower($m), $v) !== false){
						die('You are Robot. Not Allowed');
					}
				}
			}
			
		}
		return $m;
	}

	// function sendMail()
	// {
	// 	// $name = validate($_POST['name']);
	// 	// $email = validate($_POST['email'], 'email');
	// 	// $phone = validate($_POST['phone'], 'phone');
	// 	// $locality = validate($_POST['locality']);
	// 	// $plans = validate($_POST['plans']);
	// 	$name = $_POST['name'];
	// 	$email = $_POST['email'];
	// 	$phone = $_POST['phone'];
	// 	$locality = $_POST['locality'];
	// 	$plans = $_POST['plans'];
		
	// 		//send to owner
	// 		$to = 'web@beingaddictive.com';
	// 		$headers = "MIME-Version: 1.1";
	// 		$headers .= "Content-type: text/html; charset=iso-8859-1";
	// 		$headers .= "From: " . $email . "\r\n"; 
	// 		$headers .= "Return-Path:". $email;
	// 		$subject = 'brochure Download From Supreme Towers';
	// 		$send_msg = "A new Enquiry from Supreme Towers website \n Full Name: $name \n Phone No: $phone \n Email : $email \n Locality : $locality \n plans: $plans "                                                                                                                                                                                                                                ;

	// 		//send to user
	// 		$to_user = $email;
	// 		$subject_user = 'Welcome Message From Supreme Towers';
	// 		include("emek.php");
	// 		$send_msg_user =  ob_get_contents();
	// 		ob_end_clean();

	// 		// $query12="INSERT INTO `databse`(`name`, `email`, `phone`, `locality`, `plans`) VALUES ('$name','$email',$phone,'$locality','$plans')";
	// 		// mysqli_query($mysqli, $query12);

	// 	if(isset($_COOKIE['newcook'])){
	// 		echo 'Cannot send mail as you have already sent mail';
	// 	}
	// 	else{
	// 		if(mail($to,$subject,$send_msg,$headers)){
	// 			mail($to_user,$subject_user,$send_msg_user,$headers);
	// 			echo "y";
	// 			echo "<script>window.open('".LINK."thankyou');</script>";
	// 			setcookie("newcook", $_SERVER['HTTP_X_FORWARDED_FOR'], time()+1200);
	// 		}
	// 		else{
	// 			echo "Not able to send the Message";
	// 		}
	// 	}
	// }


	// function sendpdf()
	// {
		$name = validate($_POST['name']);
		$email = validate($_POST['email'], 'email');
		$phone = validate($_POST['phone'], 'phone');
		$locality = validate($_POST['locality']);
		$plans = validate($_POST['plans']);
		// $name = $_POST['name'];
		// $email = $_POST['email'];
		// $phone = $_POST['phone'];
		// $locality = $_POST['locality'];
		// $plans = $_POST['plans'];
		// $splans = validate($_POST['splans']);

			//send to owner
			// $to = 'customercare@luxelan.in,web@beingaddictive.com';
			// $tos = 'customercare@luxelan.in';
			$to = 'qualitasestates@gmail.com';
			$tos = 'qualitasestates@gmail.com';
			$headers  = 'MIME-Version: 1.0' . "\r\n";
			$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
			$headers .= "From: ". $tos."\r\n";
			$headers .= "Reply-To: ". $tos."\r\n";
			$headers .= "Return-Path: ". $tos."r\n";
			$subject = 'Brochure Download From Supreme Towers';
			$send_msg = "A new Enquiry from Supreme Towers website \n Full Name: $name \n Phone No: $phone \n Email : $email \n Locality : $locality \n plans: $plans ";

			//send to user
			$to_user = $email;
			$subject_user = 'Welcome Message From Supreme Towers';
			ob_start();
			include("emek.php");
			$send_msg_user =  ob_get_contents();
			ob_end_clean();

			// $query12="INSERT INTO `databse`(`name`, `email`, `phone`, `locality`, `plans`) VALUES ('$name','$email',$phone,'$locality','$plans')";
			// mysqli_query($mysqli, $query12);

		if(isset($_COOKIE['newcook'])){
			echo 'Cannot send mail as you have already sent mail';
		}
		else{
			if(mail($to, $subject, $send_msg, $headers)){
				mail($to_user, $subject_user, $send_msg_user, $headers);
				echo "y";
				echo "<script>window.open('".LINK."thankyou');</script>";
				setcookie("newcook", "newcook");
				echo "<script>window.open('".LINK."images/img/brochure.pdf', '_blank')";
			}
			else{
				echo "Not able to send the Message";
			}
		}
	// }

?>