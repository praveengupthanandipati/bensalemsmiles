<?php
header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['success' => false, 'message' => 'Method not allowed.']);
    exit;
}

// Honeypot — bots fill this hidden field; humans leave it blank
if (!empty($_POST['website_url'])) {
    echo json_encode(['success' => true]);
    exit;
}

// Sanitise
$name    = trim(strip_tags($_POST['name']    ?? ''));
$email   = trim(strip_tags($_POST['email']   ?? ''));
$phone   = trim(strip_tags($_POST['phone']   ?? ''));
$subject = trim(strip_tags($_POST['subject'] ?? ''));
$message = trim(strip_tags($_POST['message'] ?? ''));

// Server-side validate
if (strlen($name) < 2) {
    http_response_code(400);
    echo json_encode(['success' => false, 'message' => 'Please enter your full name.']);
    exit;
}
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    http_response_code(400);
    echo json_encode(['success' => false, 'message' => 'Please enter a valid email address.']);
    exit;
}
if (!$phone) {
    http_response_code(400);
    echo json_encode(['success' => false, 'message' => 'Please enter your phone number.']);
    exit;
}
if (strlen($message) < 10) {
    http_response_code(400);
    echo json_encode(['success' => false, 'message' => 'Your message is too short — please give us a little more detail.']);
    exit;
}

$to      = 'drsbandaru@gmail.com';
$subject = 'New Contact Form: ' . $subject . ' - Bensalem Smiles 4 U';

$body  = "New message from the Bensalem Smiles 4 U contact form.\n";
$body .= str_repeat('-', 50) . "\n\n";
$body .= "Name    : {$name}\n";
$body .= "Email   : {$email}\n";
$body .= "Phone   : {$phone}\n";
$body .= "Subject : {$subject}\n\n";
$body .= "Message :\n{$message}\n\n";
$body .= str_repeat('-', 50) . "\n";
$body .= "Sent via bensalemsmiles4u.com/contact.php\n";

$headers  = "From: no-reply@bensalemsmiles4u.com\r\n";
$headers .= "Reply-To: {$email}\r\n";
$headers .= "Content-Type: text/plain; charset=UTF-8\r\n";
$headers .= "MIME-Version: 1.0\r\n";

if (mail($to, $subject, $body, $headers)) {
    echo json_encode(['success' => true, 'message' => 'Message sent successfully.']);
} else {
    http_response_code(500);
    echo json_encode(['success' => false, 'message' => 'Sorry, we could not send your message right now. Please call us at (215) 638-3350.']);
}
