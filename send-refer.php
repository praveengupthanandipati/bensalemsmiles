<?php
header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['success' => false, 'message' => 'Method not allowed.']);
    exit;
}

$patientId    = trim($_POST['patient_id']   ?? '');
$patientName  = trim($_POST['patient_name'] ?? '');
$friendName   = trim($_POST['friend_name']  ?? '');
$friendPhone  = trim($_POST['friend_phone'] ?? '');
$friendEmail  = trim($_POST['friend_email'] ?? '');
$subject      = trim($_POST['subject']      ?? '');
$message      = trim($_POST['message']      ?? '');

if (!$patientId || !$patientName || !$friendName || !$friendPhone || !$friendEmail || !$subject) {
    http_response_code(400);
    echo json_encode(['success' => false, 'message' => 'All required fields must be filled.']);
    exit;
}

if (!filter_var($friendEmail, FILTER_VALIDATE_EMAIL)) {
    http_response_code(400);
    echo json_encode(['success' => false, 'message' => 'Invalid email address for friend.']);
    exit;
}

$to       = 'praveennandipati@gmail.com';
$mailSubj = 'New Referral Submission — ' . htmlspecialchars($patientName);

$body  = "A new referral has been submitted via Bensalem Smiles 4 U.\n\n";
$body .= "── Referring Patient ──────────────────────\n";
$body .= "Patient ID   : " . htmlspecialchars($patientId)   . "\n";
$body .= "Patient Name : " . htmlspecialchars($patientName) . "\n\n";
$body .= "── Friend Details ─────────────────────────\n";
$body .= "Name         : " . htmlspecialchars($friendName)  . "\n";
$body .= "Phone        : " . htmlspecialchars($friendPhone) . "\n";
$body .= "Email        : " . htmlspecialchars($friendEmail) . "\n";
$body .= "Subject      : " . htmlspecialchars($subject)     . "\n";
$body .= "───────────────────────────────────────────\n\n";
if ($message) {
    $body .= "Treatment Description:\n" . htmlspecialchars($message) . "\n";
}

$headers  = "From: Bensalem Smiles 4 U <noreply@bensalemsmiles4u.com>\r\n";
$headers .= "Reply-To: " . htmlspecialchars($patientName) . " <" . htmlspecialchars($friendEmail) . ">\r\n";
$headers .= "X-Mailer: PHP/" . phpversion();

$sent = mail($to, $mailSubj, $body, $headers);

if ($sent) {
    echo json_encode(['success' => true, 'message' => 'Referral submitted successfully.']);
} else {
    http_response_code(500);
    echo json_encode(['success' => false, 'message' => 'Failed to send referral. Please call us directly.']);
}
