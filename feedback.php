<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wedding Photography Feedback</title>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400;600&family=Raleway:wght@400&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
          
        }

        body {
            background-color: #f5f1eb;
           
        }

        .feedback-container {
             padding: 50px 20px;
            max-width: 1200px;
            margin: 0 auto;
            text-align: center;
        }

        .stats-section {
            display: flex;
            justify-content: center;
            align-items: flex-start;
            gap: 60px;
            margin-bottom: 80px;
            flex-wrap: wrap;
        }

        .stat-item {
            display: flex;
            flex-direction: column;
            align-items: center;
            min-width: 160px;
        }

        .circle-image {
            width: 170px;
            height: 170px;
            margin-bottom: 20px;
            object-fit: contain;
        }

        .stat-label {
            font-family: Oswald;
            font-weight: 300;
            font-size: 20px;
            line-height: 187%;
            letter-spacing: 8%;
            text-align: center;
            text-transform: uppercase;
            color: #666;
            max-width: 140px;
        }

        .testimonial-section {
            max-width: 800px;
            margin: 0 auto;
            position: relative;
        }

        .quote-icon {
            font-size: 120px;
            color: #999;
            position: absolute;
            left: -80px;
            top: -20px;
            font-family: serif;
        }

        .testimonial-text {
            font-family: Raleway;
            font-weight: 400;
            font-size: 36px;
            line-height: 160%;
            letter-spacing: 2%;
            color: #333;
            margin-bottom: 30px;
            text-align: left;
            padding-left: 80px;
        }

        .client-info {
            text-align: left;
            padding-left: 80px;
        }

        .client-names {
            font-family: Oswald;
            font-weight: 600;
            font-size: 30px;
            line-height: 180%;
            letter-spacing: 0%;
            text-transform: capitalize;
            color: #333;
            margin-bottom: 5px;
        }

        .client-type {
            font-family: Oswald;
            font-weight: 400;
            font-size: 30px;
            line-height: 180%;
            letter-spacing: 0%;
            text-transform: capitalize;
            color: #666;
        }

        /* Responsive Design */
        @media (max-width: 1024px) {
            .stats-section {
                gap: 40px;
            }
            
            .testimonial-text {
                font-size: 32px;
                padding-left: 60px;
            }
            
            .client-info {
                padding-left: 60px;
            }
            
            .quote-icon {
                left: -60px;
                font-size: 100px;
            }
        }

        @media (max-width: 768px) {
            .stats-section {
                gap: 30px;
            }

            .circle-image {
                width: 100px;
                height: 100px;
            }

            .stat-label {
                font-size: 16px;
            }

            .testimonial-text {
                font-size: 28px;
                padding-left: 40px;
            }

            .client-info {
                padding-left: 40px;
            }

            .client-names {
                font-size: 26px;
            }

            .client-type {
                font-size: 26px;
            }

            .quote-icon {
                left: -40px;
                font-size: 80px;
                top: -10px;
            }
        }

        @media (max-width: 640px) {
            .stats-section {
                gap: 20px;
            }

            .circle-image {
                width: 80px;
                height: 80px;
            }

            .stat-label {
                font-size: 14px;
                max-width: 120px;
            }

            .testimonial-text {
                font-size: 24px;
                padding-left: 20px;
                text-align: center;
            }

            .client-info {
                padding-left: 20px;
                text-align: center;
            }

            .client-names {
                font-size: 22px;
            }

            .client-type {
                font-size: 22px;
            }

            .quote-icon {
                left: 50%;
                transform: translateX(-50%);
                top: -60px;
                font-size: 60px;
            }
        }

        @media (max-width: 480px) {
            .stats-section {
                flex-direction: column;
                align-items: center;
                gap: 30px;
            }

            .stat-item {
                min-width: auto;
            }

            .testimonial-text {
                font-size: 20px;
            }

            .client-names {
                font-size: 20px;
            }

            .client-type {
                font-size: 20px;
            }
        }
    </style>
</head>
<body>
    <div class="feedback-container">
        <!-- Statistics Section -->
        <div class="stats-section">
            <div class="stat-item">
                <img src="./assets/1.png" alt="90" class="circle-image">
                <div class="stat-label">Happy Couples</div>
            </div>
            
            <div class="stat-item">
                <img src="./assets/2.png" alt="80" class="circle-image">
                <div class="stat-label">Destination Shoot</div>
            </div>
            
            <div class="stat-item">
                <img src="./assets/3.png" alt="75" class="circle-image">
                <div class="stat-label">Candid Coverage</div>
            </div>
            
            <div class="stat-item">
                <img src="./assets/4.png" alt="95" class="circle-image">
                <div class="stat-label">Unfiltered Stories</div>
            </div>
        </div>

        <!-- Testimonial Section -->
        <div class="testimonial-section">
            <div class="quote-icon">"</div>
            <div class="testimonial-text">
                They captured our wedding day like it was a fairytale — full of laughter, love, and little things we didn't even notice.
            </div>
            <div class="client-info">
                <div class="client-names">— Anaya & Raghav</div>
                <div class="client-type">Happy Couple</div>
            </div>
        </div>
    </div>
</body>
</html>