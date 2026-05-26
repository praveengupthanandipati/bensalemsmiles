<?php
header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['success' => false, 'message' => 'Method not allowed.']);
    exit;
}

$name    = trim($_POST['name']    ?? '');
$email   = trim($_POST['email']   ?? '');
$phone   = trim($_POST['phone']   ?? '');
$subject = trim($_POST['subject'] ?? '');
$message = trim($_POST['message'] ?? '');

// Basic server-side validation
if (!$name || !$email || !$phone || !$subject || !$message) {
    http_response_code(400);
    echo json_encode(['success' => false, 'message' => 'All required fields must be filled.']);
    exit;
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    http_response_code(400);
    echo json_encode(['success' => false, 'message' => 'Invalid email address.']);
    exit;
}

$to      = 'praveennandipati@gmail.com';
$subject = 'New Contact Form Submission: ' . htmlspecialchars($subject);

$body  = "You have received a new message from the Bensalem Smiles 4 U contact form.\n\n";
$body .= "-------------------------------------------\n";
$body .= "Name    : " . htmlspecialchars($name)    . "\n";
$body .= "Email   : " . htmlspecialchars($email)   . "\n";
$body .= "Phone   : " . htmlspecialchars($phone)   . "\n";
$body .= "-------------------------------------------\n\n";
$body .= "Message:\n" . htmlspecialchars($message) . "\n";

$headers  = "From: Bensalem Smiles 4 U <noreply@bensalemsmiles4u.com>\r\n";
$headers .= "Reply-To: " . htmlspecialchars($name) . " <" . htmlspecialchars($email) . ">\r\n";
$headers .= "X-Mailer: PHP/" . phpversion();

$sent = mail($to, $subject, $body, $headers);

if ($sent) {
    echo json_encode(['success' => true, 'message' => 'Message sent successfully.']);
} else {
    http_response_code(500);
    echo json_encode(['success' => false, 'message' => 'Failed to send message. Please try again or call us directly.']);
}
