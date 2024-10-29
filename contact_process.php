<?php
    // $to = "";
    // $from = $_REQUEST['email'];
    // $name = $_REQUEST['name'];
    // $subject = $_REQUEST['subject'];
    // $number = $_REQUEST['number'];
    // $cmessage = $_REQUEST['message'];

    // $headers = "From: $from";
	// $headers = "From: " . $from . "\r\n";
	// $headers .= "Reply-To: ". $from . "\r\n";
	// $headers .= "MIME-Version: 1.0\r\n";
	// $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

    // $subject = "You have a message from your Bitmap Photography.";

    // $logo = 'img/logo.png';
    // $link = '#';

	// $body = "<!DOCTYPE html><html lang='en'><head><meta charset='UTF-8'><title>Express Mail</title></head><body>";
	// $body .= "<table style='width: 100%;'>";
	// $body .= "<thead style='text-align: center;'><tr><td style='border:none;' colspan='2'>";
	// $body .= "<a href='{$link}'><img src='{$logo}' alt=''></a><br><br>";
	// $body .= "</td></tr></thead><tbody><tr>";
	// $body .= "<td style='border:none;'><strong>Name:</strong> {$name}</td>";
	// $body .= "<td style='border:none;'><strong>Email:</strong> {$from}</td>";
	// $body .= "</tr>";
	// $body .= "<tr><td style='border:none;'><strong>Subject:</strong> {$csubject}</td></tr>";
	// $body .= "<tr><td></td></tr>";
	// $body .= "<tr><td colspan='2' style='border:none;'>{$cmessage}</td></tr>";
	// $body .= "</tbody></table>";
	// $body .= "</body></html>";

    // $send = mail($to, $subject, $body, $headers);


	<?php

    // Collect form data
    $to = "harithachandran.m@gmail.com";
    $from = $_REQUEST['email']; // Ensure email input is properly sanitized
    $name = $_REQUEST['name'];
    $subject = $_REQUEST['subject']; // This was previously missing
    $number = $_REQUEST['number'];
    $cmessage = $_REQUEST['message'];

    // Set headers
    $headers = "From: " . $from . "\r\n";
    $headers .= "Reply-To: ". $from . "\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

    // Subject of the email
    $subject = "You have a message from your Bitmap Photography.";

    // Content of the email
    $logo = 'img/logo.png'; // Make sure the image path is correct
    $link = '#';

    // Building the email body
    $body = "<!DOCTYPE html><html lang='en'><head><meta charset='UTF-8'><title>Express Mail</title></head><body>";
    $body .= "<table style='width: 100%;'>";
    $body .= "<thead style='text-align: center;'><tr><td style='border:none;' colspan='2'>";
    $body .= "<a href='{$link}'><img src='{$logo}' alt='Logo'></a><br><br>";
    $body .= "</td></tr></thead><tbody><tr>";
    $body .= "<td style='border:none;'><strong>Name:</strong> {$name}</td>";
    $body .= "<td style='border:none;'><strong>Email:</strong> {$from}</td>";
    $body .= "</tr>";
    $body .= "<tr><td style='border:none;'><strong>Subject:</strong> {$subject}</td></tr>"; // Updated to use $subject
    $body .= "<tr><td colspan='2' style='border:none;'><strong>Message:</strong> {$cmessage}</td></tr>"; // Message field
    $body .= "</tbody></table>";
    $body .= "</body></html>";

    // Send the email
    $send = mail($to, $subject, $body, $headers);

    if ($send) {
        echo "Mail sent successfully.";
    } else {
        echo "Mail sending failed.";
    }

?>