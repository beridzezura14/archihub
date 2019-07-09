<? php
	$name = $_POST['name'];
	$visitor_email = $_POST['email'];
	$message = $_POST['message'];

	$email_from = 'EasyTutorials@avinashkr.com';

	$email_subject = "New Form Submission";

	$email_body = "User Name: $name.\n".
					"User Email: $visitor_email.\n".
					  "User Massage: $Massage.\n";


	$to = "zuraberidze12@gmail.com";

	$headers = "form: $email_form \r\n";

	$headers .= "Reply-To: $visitor-email \r\n";


	mail($to,$email_subject,$email_body,$headers);

	header("location: contact.html");

?>