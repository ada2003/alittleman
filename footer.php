<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>A Little Man Footer</title>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;500;600&family=Raleway:wght@400;600&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .footer {
            background-color: #141414;
            color: white;
            padding: 80px 40px 40px;
            min-height: 400px;
        }

        .footer-container {
            max-width: 1200px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: 1fr 1fr 1fr;
            gap: 60px;
            align-items: start;
        }

        .footer-section h2 {
            font-family: 'Oswald', sans-serif;
            font-weight: 500;
            font-size: 20px;
            line-height: 100%;
            letter-spacing: 0.08em;
            text-transform: uppercase;
            margin-bottom: 30px;
            color: white;
        }

        .footer-description {
            font-family: 'Raleway', sans-serif;
            font-weight: 400;
            font-size: 18px;
            line-height: 187%;
            letter-spacing: 0.02em;
            color: white;
            margin-top: 25px;
        }

        .contact-info {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        .contact-item {
            display: flex;
            align-items: center;
            gap: 15px;
            font-family: 'Raleway', sans-serif;
           
            font-size: 18px;
            line-height: 100%;
            letter-spacing: 0.02em;
            color: white;
        }

        .contact-item::before {
            content: '';
            width: 20px;
            height: 20px;
            background-size: contain;
            background-repeat: no-repeat;
            background-position: center;
            flex-shrink: 0;
        }

        .contact-item.instagram::before {
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='20' height='20' viewBox='0 0 24 24' fill='none' stroke='white' stroke-width='2'%3E%3Crect x='2' y='2' width='20' height='20' rx='5' ry='5'/%3E%3Cpath d='m16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z'/%3E%3Cline x1='17.5' y1='6.5' x2='17.51' y2='6.5'/%3E%3C/svg%3E");
        }

        .contact-item.phone::before {
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='20' height='20' viewBox='0 0 24 24' fill='none' stroke='white' stroke-width='2'%3E%3Cpath d='M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z'/%3E%3C/svg%3E");
        }

        .contact-item.email::before {
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='20' height='20' viewBox='0 0 24 24' fill='none' stroke='white' stroke-width='2'%3E%3Cpath d='m4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z'/%3E%3Cpolyline points='22,6 12,13 2,6'/%3E%3C/svg%3E");
        }

        .working-hours {
            font-family: 'Raleway', sans-serif;
            font-weight: 400;
            font-size: 18px;
            line-height: 223%;
            letter-spacing: 0.02em;
            color: white;
            margin-top: 25px;
        }

        .copyright {
            text-align: left;
            margin-top: 60px;
            padding-top: 30px;
            border-top: 1px solid #333;
            font-family: 'Raleway', sans-serif;
            font-weight: 400;
            font-size: 14px;
            color: #888;
            grid-column: 1 / -1;
        }

        /* Responsive Design */
        @media (max-width: 1024px) {
            .footer {
                padding: 60px 30px 30px;
            }
            
            .footer-container {
                gap: 40px;
            }
        }

        @media (max-width: 768px) {
            .footer {
                padding: 50px 20px 30px;
            }
            
            .footer-container {
                grid-template-columns: 1fr;
                gap: 50px;
                text-align: left;
            }
            
            .footer-section h2 {
                font-size: 18px;
                margin-bottom: 20px;
            }
            
            .footer-description {
                font-size: 16px;
                line-height: 180%;
            }
            
            .contact-item {
                font-size: 16px;
                gap: 12px;
            }
            
            .working-hours {
                font-size: 16px;
                line-height: 200%;
            }
        }

        @media (max-width: 480px) {
            .footer {
                padding: 40px 15px 25px;
            }
            
            .footer-container {
                gap: 40px;
            }
            
            .footer-section h2 {
                font-size: 16px;
                margin-bottom: 15px;
            }
            
            .footer-description {
                font-size: 14px;
                margin-top: 20px;
            }
            
            .contact-item {
                font-size: 14px;
                gap: 10px;
            }
            
            .contact-item::before {
                width: 16px;
                height: 16px;
            }
            
            .working-hours {
                font-size: 14px;
                margin-top: 20px;
            }
            
            .copyright {
                font-size: 12px;
                margin-top: 40px;
                padding-top: 20px;
            }
        }
    </style>
</head>
<body>
    <footer class="footer">
        <div class="footer-container">
            <div class="footer-section">
                <h2>A Little Man</h2>
                <p class="footer-description">
                    Capturing honest love stories across India and beyond.<br>
                    Made with heart, told through our lens.<br>
                    Every couple has a story —<br>
                    We're here to help you remember yours.
                </p>
            </div>
            
            <div class="footer-section">
                <h2>Connect With Us</h2>
                <div class="contact-info">
                    <div class="contact-item instagram">alittleman_</div>
                    <div class="contact-item phone">+91 77419 75188</div>
                    <div class="contact-item email">alittleman@contact.com</div>
                    <div class="contact-item email">alittleman@contact.com</div>
                </div>
            </div>
            
            <div class="footer-section">
                <h2>Working Time</h2>
                <div class="working-hours">
                    Mon - Tue / Appointment<br>
                    Wed - Fri / 10:00 - 9:00pm<br>
                    Sat / 10:00 - 6:00pm<br>
                    Sun / no work on this day
                </div>
            </div>
            
            <div class="copyright">
                © 2025 ARK++. All rights reserved.
            </div>
        </div>
    </footer>
</body>
</html>