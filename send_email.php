<?php
// send_email.php - Updated to handle EmailJS API restrictions

// CORS headers
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST, OPTIONS');
header('Access-Control-Allow-Headers: Content-Type');
header('Content-Type: application/json');

// Handle OPTIONS request
if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
    exit(0);
}

// Only accept POST requests
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['success' => false, 'message' => 'Method not allowed']);
    exit;
}

// Get form data
$input = json_decode(file_get_contents('php://input'), true);

if (!$input) {
    $input = $_POST;
}

// Validate required fields
$required_fields = ['user_name', 'user_email', 'message'];
foreach ($required_fields as $field) {
    if (empty($input[$field])) {
        http_response_code(400);
        echo json_encode([
            'success' => false, 
            'message' => "Field '$field' is required"
        ]);
        exit;
    }
}

// Sanitize input
$user_name = htmlspecialchars($input['user_name'], ENT_QUOTES, 'UTF-8');
$user_email = filter_var($input['user_email'], FILTER_SANITIZE_EMAIL);
$message = htmlspecialchars($input['message'], ENT_QUOTES, 'UTF-8');

// Validate email
if (!filter_var($user_email, FILTER_VALIDATE_EMAIL)) {
    http_response_code(400);
    echo json_encode([
        'success' => false, 
        'message' => 'Invalid email address'
    ]);
    exit;
}

// Since EmailJS blocks server-side requests, we'll use PHPMailer as an alternative
require_once 'PHPMailer/PHPMailer.php';
require_once 'PHPMailer/SMTP.php';
require_once 'PHPMailer/Exception.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$mail = new PHPMailer(true);

try {
    // Server settings
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com'; // Set your SMTP server
    $mail->SMTPAuth = true;
    $mail->Username = 'your_email@gmail.com'; // Your email
    $mail->Password = 'your_app_password'; // Your app password (not regular password)
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
    $mail->Port = 465;

    // Recipients
    $mail->setFrom($user_email, $user_name);
    $mail->addAddress('salveadarsh06@gmail.com', 'Adarsh Salve');
    
    // Content
    $mail->isHTML(true);
    $mail->Subject = 'New Contact Form Submission from ' . $user_name;
    $mail->Body = "
        <h2>New Contact Form Submission</h2>
        <p><strong>Name:</strong> {$user_name}</p>
        <p><strong>Email:</strong> {$user_email}</p>
        <p><strong>Message:</strong> {$message}</p>
        <p><strong>Date:</strong> " . date('Y-m-d H:i:s') . "</p>
    ";
    $mail->AltBody = "Name: {$user_name}\nEmail: {$user_email}\nMessage: {$message}\nDate: " . date('Y-m-d H:i:s');

    $mail->send();
    echo json_encode([
        'success' => true, 
        'message' => 'Email sent successfully!'
    ]);
} catch (Exception $e) {
    http_response_code(500);
    echo json_encode([
        'success' => false, 
        'message' => 'Failed to send email. Please try again.',
        'debug' => $mail->ErrorInfo
    ]);
}
?>