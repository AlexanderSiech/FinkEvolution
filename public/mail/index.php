<?php
/*
 * This is a the code that sends emails from the contact form
 * of the website.
 * In order to receive emails please enter your email address
 * like so: $to = 'youremail@gmail.com';
 *
 */

//Enter your email ↓
$to = 'hello@digitalaweso.me';


$email = $_POST['email'];
$name = $_POST['name'];
$message = $_POST['message'];

$body = "New message from visitor on your trumpet website.\r\n";
$body .= "Visitor's name: ". $name ."\r\n";
$body .= "Visitor's email: ". $email ."\r\n";
$body .= "Visitor's message: ". $message ."\r\n";


if(mail($to, "New Message from A Visitor on Your Website", $body)) {
	echo json_encode([
		"success" => true
	]);
} else {
	echo json_encode([
		"success" => false, "message" => error_get_last()['message']
	]);
}

