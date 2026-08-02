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

        /* Offices side by side */
        .offices-row {
            display: flex;
            gap: 30px;
        }
        .office-block {
            flex: 1;
            min-width: 0; /* allows text to wrap instead of overflowing */
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

        @media (max-width: 1024px) {
            /* offices column gets tight before the whole layout stacks -
               shrink text a touch so both blocks still sit side by side */
            .office-heading { font-size: 17px; }
            .office-details { font-size: 15px; }
            .get-location { font-size: 15px; }
            .offices-row { gap: 20px; }
        }

        @media (max-width: 768px) {
            .contact-container {
                grid-template-columns: 1fr;
                gap: 40px;
            }
            .main-heading {
                font-size: 48px;
            }
            .contact-info {
                padding-right: 0;
            }
            .office-heading { font-size: 20px; }
            .office-details { font-size: 18px; }
            .get-location { font-size: 18px; }
            .offices-row {
                flex-direction: column;
                gap: 20px;
            }
        }
    </style>
</head>
<body>
    <section class="contact-section">
        <div class="contact-container">
            <div class="contact-info">
                <h1 class="main-heading">Get in touch<br>with us</h1>

                <div class="offices-row">
                    <div class="office-block">
                        <h2 class="office-heading">Jabalpur Office</h2>
                        <div class="office-details">
                            <div>Jabalpur, M.P. 482002</div>
                            <div>+91 77419 75188</div>
                            <div>alittleman@contact.com</div>
                        </div>
                        <a href="#" class="get-location">Get location</a>
                    </div>

                    <div class="office-block">
                        <h2 class="office-heading">Mumbai Office</h2>
                        <div class="office-details">
                            <div>37/289 Anand Nagar,Near Vakola Police station</div>
                            <div>Santacruz East</div>
                            <div>Mumbai-400055.
Land Mark:- Ganesh Temple</div>
                        </div>
                        <a href="#" class="get-location">Get location</a>
                    </div>
                </div>
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

                <button type="submit" id="send-button" class="send-button">Send to WhatsApp</button>
            </form>
        </div>
    </section>

    <script>
        // WhatsApp Form Submission
        document.getElementById("contact-form").addEventListener("submit", function(event) {
            event.preventDefault();

            const userName = document.getElementById("user_name").value;
            const userEmail = document.getElementById("user_email").value;
            const userMessage = document.getElementById("message").value;

            // Format the WhatsApp message
            const whatsappMessage = `*New Contact Form Submission*%0A%0A*Name:* ${encodeURIComponent(userName)}%0A*Email:* ${encodeURIComponent(userEmail)}%0A*Message:* ${encodeURIComponent(userMessage)}`;

            // WhatsApp number (replace with your number in international format without + or spaces)
            const whatsappNumber = "917741975188";

            // Create WhatsApp URL
            const whatsappURL = `https://wa.me/${whatsappNumber}?text=${whatsappMessage}`;

            // Open WhatsApp in new tab
            window.open(whatsappURL, '_blank');

            // Show success message
            showMessage("✅ Redirecting to WhatsApp...", "success");

            // Reset form after a short delay
            setTimeout(() => {
                document.getElementById("contact-form").reset();
            }, 1000);
        });

        // Show success/error messages
        function showMessage(text, type) {
            const messageContainer = document.getElementById("message-container");
            messageContainer.innerHTML = "";

            const div = document.createElement("div");
            div.className = `message ${type}`;
            div.textContent = text;
            div.style.display = "block";
            messageContainer.appendChild(div);

            setTimeout(() => { div.style.display = "none"; }, 3000);
        }
    </script>
</body>
</html>