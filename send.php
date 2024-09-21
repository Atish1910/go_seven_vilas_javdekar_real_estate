<?php
	if ( $_SERVER['REQUEST_METHOD']=='GET' && realpath(__FILE__) == realpath( $_SERVER['SCRIPT_FILENAME'])){
		header( 'HTTP/1.0 403 Forbidden', TRUE, 403 );
		die ("<h2>Access Denied!</h2> This file is protected and not available to public.");
	}
    include 'link.php';
    include 'connection.php';
	
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

    $name = validate($_POST['name']);
	$email = validate($_POST['email'], 'email');
	$phone = validate($_POST['phone'], 'phone');
	$remak = validate($_POST['splans']);
	// $splans = validate($_POST['splans']);

	$api = 'NI002NIR027FBCTW001NIRVA';
	$data2 = "APIKey=".$api."&CustomerName=".$name."&CustomerMobileNo=".$phone."&CustomeremailId=".$email."&Remark=".$remak."";
	$ch = curl_init('https://one.ebuildauto.com/RichImportAPI/NewAPIDataFromWebSiteForms/');
	curl_setopt($ch, CURLOPT_POST, true);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $data2);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$result = curl_exec($ch); // This is the result from the API
	curl_close($ch);
	$jss = json_decode($result, true);
	$outpt = $jss['OutType'];

	if($outpt=='Sucess'){
		//send to owner
		$to = 'sales.nirvana@nirmangreens.com';
		$headers = "MIME-Version: 1.1";
		$headers .= "Content-type: text/html; charset=iso-8859-1";
		$headers .= "From: " . $email . "\r\n"; 
		$headers .= "Return-Path:". $email;
		$subject = 'brochure Download From NIRVANA';
		$send_msg = "A new user from NIRVANA website \n Full Name: $name \n Phone No: $phone \n Email : $email";

		//send to user
		$to_user = $email;
		$subject_user = 'Welcome Message From NIRVANA';
		$send_msg_user = "Thank-You for downloading brochure from NIRVANA. We'll shortly connect with you. In case you want to contact us feel free to reach out to us on this \n email : $to ";

		$query12="INSERT INTO `database`(`name`, `email`, `number`, `source`) VALUES ('$name','$email',$phone,'$remak')";
		mysqli_query($mysqli, $query12);
	}

    if(isset($_COOKIE['newcooky'])){
        echo 'Cannot send mail as you have already sent mail';
    }
    else{
        if(@mail($to,$subject,$send_msg,$headers)){
			@mail($to_user,$subject_user,$send_msg_user,$headers);
            echo "y";
            setcookie("newcooky", $_SERVER['HTTP_X_FORWARDED_FOR'], time()+1200);
			echo "<script>window.location.href = '".LINK."thankyou.php'</script>";
        }
        else{
            echo "Not able to send the Message";
        }
    }

?>