<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us Section</title>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;500&family=Raleway:wght@400;500&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/emailjs-com@3.2.0/dist/email.min.js"></script>
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
            text-transform: uppercase;
            color: #000;
            margin-bottom: 60px;
        }
        .office-heading {
            font-family: Oswald;
            font-weight: 500;
            font-size: 20px;
            text-transform: uppercase;
            color: #000;
            margin-bottom: 20px;
        }
        .office-details {
            font-family: Raleway;
            font-style: italic;
            font-size: 18px;
            color: #000;
            margin-bottom: 30px;
        }
        .office-details div { margin-bottom: 8px; }
        .get-location {
            font-family: Raleway;
            font-weight: 500;
            font-size: 18px;
            color: #000;
            display: flex;
            align-items: center;
            gap: 10px;
            cursor: pointer;
            text-decoration: none;
        }
        .contact-form {
            display: flex;
            flex-direction: column;
            gap: 30px;
        }
        .form-group { position: relative; }
        .form-input {
            width: 100%;
            border: none;
            border-bottom: 2px solid #000;
            background: transparent;
            padding: 15px 0;
            font-family: Raleway;
            font-size: 18px;
            color: #000;
            outline: none;
        }
        .form-input::placeholder { color: #666; }
        .message-input { min-height: 60px; resize: vertical; }
        .send-button {
            background-color: #000;
            color: #fff;
            border: none;
            padding: 15px 30px;
            font-family: Raleway;
            font-size: 16px;
            text-transform: uppercase;
            cursor: pointer;
            margin-top: 20px;
            transition: background-color 0.3s ease;
        }
        .send-button:hover { background-color: #333; }
        .send-button:disabled { background-color: #666; cursor: not-allowed; }
        .message {
            padding: 15px;
            margin: 20px 0;
            border-radius: 4px;
            font-family: Raleway;
            font-weight: 500;
            display: none;
        }
        .success { background-color: #d4edda; color: #155724; }
        .error { background-color: #f8d7da; color: #721c24; }
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
            
            <form id="contact-form" class="contact-form">
                <div id="message-container"></div>
                
                <div class="form-group">
                    <input type="text" id="user_name" name="user_name" class="form-input" placeholder="Write your name here" required>
                </div>
                <div class="form-group">
                    <input type="email" id="user_email" name="user_email" class="form-input" placeholder="Write your email address" required>
                </div>
                <div class="form-group">
                    <textarea id="message" name="message" class="form-input message-input" placeholder="Write your messages here" required></textarea>
                </div>
                
                <button type="submit" id="send-button" class="send-button">Send it</button>
            </form>
        </div>
    </section>

    <script>
        // ✅ Initialize EmailJS
        (function() {
            emailjs.init("AdAQ99sI799aZJ-x2"); // Replace with your EmailJS Public Key
        })();

        // ✅ Form Submission
        document.getElementById("contact-form").addEventListener("submit", function(event) {
            event.preventDefault();

            const submitButton = document.getElementById("send-button");
            const messageContainer = document.getElementById("message-container");

            submitButton.disabled = true;
            submitButton.textContent = "Sending...";

            messageContainer.innerHTML = "";

            // Send email via EmailJS
            emailjs.sendForm("service_tikznal", "template_lgv7ubs", this)
                .then(function() {
                    showMessage("✅ Email sent successfully!", "success");
                    document.getElementById("contact-form").reset();
                }, function(error) {
                    console.error("Failed to send email:", error);
                    showMessage("❌ Failed to send email. Please try again.", "error");
                })
                .finally(() => {
                    submitButton.disabled = false;
                    submitButton.textContent = "Send it";
                });
        });

        // ✅ Show success/error messages
        function showMessage(text, type) {
            const messageContainer = document.getElementById("message-container");
            const div = document.createElement("div");
            div.className = `message ${type}`;
            div.textContent = text;
            div.style.display = "block";
            messageContainer.appendChild(div);

            setTimeout(() => { div.style.display = "none"; }, 5000);
        }
    </script>
</body>
</html>
