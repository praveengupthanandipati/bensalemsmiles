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
$time    = trim($_POST['time']    ?? '');
$day     = trim($_POST['day']     ?? '');
$message = trim($_POST['message'] ?? '');

// Server-side validation
if (!$name || !$email || !$phone || !$subject || !$time || !$day) {
    http_response_code(400);
    echo json_encode(['success' => false, 'message' => 'All required fields must be filled.']);
    exit;
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    http_response_code(400);
    echo json_encode(['success' => false, 'message' => 'Invalid email address.']);
    exit;
}

$validTimes = ['10:00 AM – 1:00 PM', '2:00 PM – 4:00 PM', '6:00 PM – 9:00 PM'];
$validDays  = ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday'];

if (!in_array($time, $validTimes, true) || !in_array($day, $validDays, true)) {
    http_response_code(400);
    echo json_encode(['success' => false, 'message' => 'Invalid time slot or day selected.']);
    exit;
}

$to       = 'praveennandipati@gmail.com';
$mailSubj = 'New Appointment Request: ' . htmlspecialchars($subject);

$body  = "You have received a new appointment request from Bensalem Smiles 4 U.\n\n";
$body .= "-------------------------------------------\n";
$body .= "Name             : " . htmlspecialchars($name)    . "\n";
$body .= "Email            : " . htmlspecialchars($email)   . "\n";
$body .= "Phone            : " . htmlspecialchars($phone)   . "\n";
$body .= "Subject          : " . htmlspecialchars($subject) . "\n";
$body .= "Preferred Time   : " . htmlspecialchars($time)    . "\n";
$body .= "Preferred Day    : " . htmlspecialchars($day)     . "\n";
$body .= "-------------------------------------------\n\n";
if ($message) {
    $body .= "Additional Notes:\n" . htmlspecialchars($message) . "\n";
}

$headers  = "From: Bensalem Smiles 4 U <noreply@bensalemsmiles4u.com>\r\n";
$headers .= "Reply-To: " . htmlspecialchars($name) . " <" . htmlspecialchars($email) . ">\r\n";
$headers .= "X-Mailer: PHP/" . phpversion();

$sent = mail($to, $mailSubj, $body, $headers);

if ($sent) {
    echo json_encode(['success' => true, 'message' => 'Appointment request sent successfully.']);
} else {
    http_response_code(500);
    echo json_encode(['success' => false, 'message' => 'Failed to send request. Please call us directly.']);
}
