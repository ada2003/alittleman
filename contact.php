<?php
// contact.php
$message_sent = false;
$error_message = '';

if ($_POST) {
    // Get form data and sanitize
    $name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
    $email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
    $message = filter_var($_POST['message'], FILTER_SANITIZE_STRING);
    
    // Validation
    if (empty($name) || empty($email) || empty($message)) {
        $error_message = 'Please fill in all fields.';
    } elseif (!$email) {
        $error_message = 'Please enter a valid email address.';
    } else {
        // Email configuration
        $to = 'salveadarsh06@gmail.com'; // Your email address
        $subject = 'New Contact Form Submission from ' . $name;
        
        // Email content
        $email_body = "You have received a new message from your website contact form.\n\n";
        $email_body .= "Name: " . $name . "\n";
        $email_body .= "Email: " . $email . "\n";
        $email_body .= "Message:\n" . $message . "\n";
        
        // Email headers
        $headers = "From: " . $email . "\r\n";
        $headers .= "Reply-To: " . $email . "\r\n";
        $headers .= "X-Mailer: PHP/" . phpversion();
        
        // Send email
        if (mail($to, $subject, $email_body, $headers)) {
            $message_sent = true;
        } else {
            $error_message = 'Sorry, there was an error sending your message. Please try again.';
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us Section</title>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;500&family=Raleway:wght@400;500&display=swap" rel="stylesheet">
    <style>
        .contact-section {
            background-color: #F9F9F9;
            padding: 80px 40px;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .contact-container {
            max-width: 1200px;
            width: 100%;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 80px;
            align-items: start;
        }

        .contact-info {
            padding-right: 40px;
        }

        .main-heading {
            font-family: Oswald;
            font-weight: 400;
            font-size: 85px;
            line-height: 104%;
            letter-spacing: 3%;
            text-transform: uppercase;
            color: #000;
            margin-bottom: 60px;
        }

        .office-heading {
            font-family: Oswald;
            font-weight: 500;
            font-size: 20px;
            line-height: 187%;
            letter-spacing: 8%;
            text-transform: uppercase;
            color: #000;
            margin-bottom: 20px;
        }

        .office-details {
            font-family: Raleway;
            font-style: italic;
            font-size: 18px;
            line-height: 100%;
            letter-spacing: 2%;
            color: #000;
            margin-bottom: 30px;
        }

        .office-details div {
            margin-bottom: 8px;
        }

        .get-location {
            font-family: Raleway;
            font-weight: 500;
            font-size: 18px;
            line-height: 100%;
            letter-spacing: 2%;
            color: #000;
            display: flex;
            align-items: center;
            gap: 10px;
            cursor: pointer;
            text-decoration: none;
        }

        .get-location::before {
            content: "↗";
            font-size: 16px;
        }

        .contact-form {
            display: flex;
            flex-direction: column;
            gap: 30px;
        }

        .form-group {
            position: relative;
        }

        .form-input {
            width: 100%;
            border: none;
            border-bottom: 2px solid #000;
            background: transparent;
            padding: 15px 0;
            font-family: Raleway;
            font-weight: 400;
            font-style: italic;
            font-size: 18px;
            line-height: 100%;
            letter-spacing: 6%;
            color: #000;
            outline: none;
        }

        .form-input::placeholder {
            font-family: Raleway;
            font-weight: 400;
            font-style: italic;
            font-size: 18px;
            line-height: 100%;
            letter-spacing: 6%;
            color: #666;
        }

        .form-input:focus {
            border-bottom-color: #333;
        }

        .message-input {
            min-height: 60px;
            resize: vertical;
        }

        .send-button {
            background-color: #000;
            color: #fff;
            border: none;
            padding: 15px 30px;
            font-family: Raleway;
            font-weight: 500;
            font-size: 16px;
            text-transform: uppercase;
            letter-spacing: 2px;
            cursor: pointer;
            align-self: flex-start;
            margin-top: 20px;
            transition: background-color 0.3s ease;
        }

        .send-button:hover {
            background-color: #333;
        }

        .success-message {
            background-color: #d4edda;
            border: 1px solid #c3e6cb;
            color: #155724;
            padding: 15px;
            border-radius: 5px;
            margin-bottom: 20px;
            font-family: Raleway;
            font-size: 16px;
        }

        .error-message {
            background-color: #f8d7da;
            border: 1px solid #f5c6cb;
            color: #721c24;
            padding: 15px;
            border-radius: 5px;
            margin-bottom: 20px;
            font-family: Raleway;
            font-size: 16px;
        }

        @media (max-width: 768px) {
            .contact-section {
                padding: 40px 20px;
            }

            .contact-container {
                grid-template-columns: 1fr;
                gap: 50px;
            }

            .contact-info {
                padding-right: 0;
                text-align: left;
            }

            .main-heading {
                font-size: 50px;
                margin-bottom: 40px;
            }

            .office-heading {
                font-size: 18px;
            }

            .office-details {
                font-size: 16px;
            }

            .get-location {
                font-size: 16px;
            }

            .form-input {
                font-size: 16px;
            }

            .form-input::placeholder {
                font-size: 16px;
            }
        }

        @media (max-width: 480px) {
            .contact-section {
                padding: 30px 15px;
            }

            .main-heading {
                font-size: 35px;
                line-height: 110%;
            }

            .office-heading {
                font-size: 16px;
            }

            .office-details {
                font-size: 14px;
                line-height: 120%;
            }

            .get-location {
                font-size: 14px;
            }

            .form-input {
                font-size: 14px;
                padding: 12px 0;
            }

            .form-input::placeholder {
                font-size: 14px;
            }

            .send-button {
                padding: 12px 25px;
                font-size: 14px;
            }
        }
    </style>
</head>
<body>
    <section class="contact-section">
        <div class="contact-container">
            <div class="contact-info">
                <h1 class="main-heading">Get in touch<br>with us</h1>
                
                <h2 class="office-heading">Jabalpur Office</h2>
                
                <div class="office-details">
                    <div>Jabalpur, M.P. 482002</div>
                    <div>+91 77419 75188</div>
                    <div>alittleman@contact.com</div>
                </div>
                
                <a href="#" class="get-location">Get location</a>
            </div>
            
            <form class="contact-form" method="POST" action="">
                <?php if ($message_sent): ?>
                    <div class="success-message">
                        Thank you! Your message has been sent successfully. We'll get back to you soon.
                    </div>
                <?php endif; ?>
                
                <?php if ($error_message): ?>
                    <div class="error-message">
                        <?php echo $error_message; ?>
                    </div>
                <?php endif; ?>
                
                <div class="form-group">
                    <input type="text" name="name" class="form-input" placeholder="Write your name here" 
                           value="<?php echo isset($_POST['name']) ? htmlspecialchars($_POST['name']) : ''; ?>" required>
                </div>
                
                <div class="form-group">
                    <input type="email" name="email" class="form-input" placeholder="Write your email address" 
                           value="<?php echo isset($_POST['email']) ? htmlspecialchars($_POST['email']) : ''; ?>" required>
                </div>
                
                <div class="form-group">
                    <textarea name="message" class="form-input message-input" placeholder="Write your messages here" required><?php echo isset($_POST['message']) ? htmlspecialchars($_POST['message']) : ''; ?></textarea>
                </div>
                
                <button type="submit" class="send-button">Send it</button>
            </form>
        </div>
    </section>
</body>
</html>