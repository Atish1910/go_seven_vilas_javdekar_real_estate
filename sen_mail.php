<?php
	// Prevent direct access to the file
	if ($_SERVER['REQUEST_METHOD'] == 'GET' && realpath(__FILE__) == realpath($_SERVER['SCRIPT_FILENAME'])) {
		header('HTTP/1.0 403 Forbidden', TRUE, 403);
		die("<h2>Access Denied!</h2> This file is protected and not available to public.");
	}

    include 'connection.php';
    include 'link.php';

	// Validation function
	function validate($m, $k = '') {
		$m = trim($m);
			// this validation is hide because utm source medium and campaign values are empty shore inside form.
			// if ($m == "")
			// 	die("Please Fill the missing Field");

		$val = array('url', 'www', 'http', '.com', 'disclaimar');
		
		if ($k == "email") {
			if (!filter_var($m, FILTER_VALIDATE_EMAIL))
				die('Enter a valid email');
		} else if ($k == "phone") {
			if (!preg_match('/^[0-9]+$/', $m))
				die('Enter a valid Mobile Number');
			else if (strlen($m) < 10 || strlen($m) > 12)
				die('Enter a valid 10-digit Mobile Number');
		} else {
			if (strlen($m) > 100) {
				die('Message should be at most 100 characters');
			} else {
				foreach ($val as $v) {
					if (strpos(strtolower($m), $v) !== false) {
						die('You are a robot. Not allowed');
					}
				}
			}
		}
		return $m;
	}

	// Input validation
	$fname = validate($_POST['fname']);
	$email = validate($_POST['email'], 'email');
	$phone = validate($_POST['phone'], 'phone');
	$msg = validate($_POST['msg']);
	
	$utm_source =$_POST['utm_source'];
	$utm_medium = isset($_COOKIE['utm_medium']) ? $_COOKIE['utm_medium'] : 'Direct';
	$utm_campaign = $_POST['utm_campaign'];
	$utm_term = $_POST['utm_term'];
	$utm_content = $_POST['utm_content'];


	
// Check if email or phone already exists in the database
$EmailcheckQuery = "SELECT * FROM `vj_enquiry` WHERE email='$email'";
$PhonecheckQuery = "SELECT * FROM `vj_enquiry` WHERE phone='$phone'";

$checkEmail = mysqli_query($mysqli, $EmailcheckQuery);
$checkPhone = mysqli_query($mysqli, $PhonecheckQuery);

// If email or phone already exists
if (mysqli_num_rows($checkEmail) > 0) {
    echo "Email already exists. Please use a different one";
}
else if(mysqli_num_rows($checkPhone) > 0){
	echo "Mobile Number is already exists. Please use a different one";
} 
else {
    // If no duplicate, insert the new record into the database
    $query12 = "INSERT INTO `vj_enquiry`(fname, email, phone, msg , utm_source, utm_medium, utm_campaign, utm_term, utm_content) 
                VALUES ('$fname','$email','$phone','$msg', '$utm_source', '$utm_medium', '$utm_campaign', '$utm_term', '$utm_content')";

    if (mysqli_query($mysqli, $query12)) {
        echo "y";
    } else {
        // If database insertion failed
        echo "<script>alert('There was an error adding your record. Please try again.');</script>";
    }
}

?>