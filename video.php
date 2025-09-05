<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Video Section</title>
    <link href="https://fonts.googleapis.com/css2?family=Rozha+One:wght@400&family=Oswald:wght@400&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .video-section {
            position: relative;
            width: 100%;
            height: 556px;
            background: linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url('https://images.unsplash.com/photo-1519741497674-611481863552?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2340&q=80');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            display: flex;
            align-items: center;
            justify-content: flex-start;
            padding: 0 5%;
        }

        .content-container {
            max-width: 700px;
            z-index: 2;
        }

        .main-text {
            font-family: 'Rozha One', serif;
            font-weight: 400;
            font-size: 40px;
            line-height: 110%;
            letter-spacing: -2%;
            text-transform: capitalize;
            color: white;
            margin-bottom: 40px;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
        }

        .play-section {
            display: flex;
            align-items: center;
            gap: 20px;
        }

        .play-button {
            width: 70px;
            height: 70px;
            border-radius: 50%;
            background-color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
        }

        .play-button:hover {
            transform: scale(1.1);
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.3);
        }

        .play-icon {
            width: 0;
            height: 0;
            border-left: 20px solid #333;
            border-top: 12px solid transparent;
            border-bottom: 12px solid transparent;
            margin-left: 4px;
        }

        .watch-text {
            font-family: 'Oswald', sans-serif;
            font-weight: 400;
            font-size: 18px;
            line-height: 100%;
            letter-spacing: 10%;
            text-transform: uppercase;
            color: white;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
        }

        .navigation-arrows {
            position: absolute;
            top: 15%;
            right: 5%;
            display: flex;
            flex-direction: row;
            gap: 15px;
            z-index: 3;
        }

        .arrow {
            width: 40px;
            height: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .arrow:hover {
            transform: scale(1.1);
        }

        .arrow svg {
            width: 30px;
            height: 20px;
            stroke: white;
            stroke-width: 1.5;
            fill: none;
            filter: drop-shadow(1px 1px 2px rgba(0, 0, 0, 0.3));
        }

        /* Responsive Design */
        @media (max-width: 1024px) {
            .main-text {
                font-size: 50px;
            }
            
            .navigation-arrows {
                top: 12%;
                right: 3%;
                gap: 12px;
            }
        }

        @media (max-width: 768px) {
            .video-section {
                padding: 0 4%;
                text-align: center;
                justify-content: center;
            }
            
            .main-text {
                font-size: 40px;
                margin-bottom: 30px;
            }
            
            .play-button {
                width: 60px;
                height: 60px;
            }
            
            .play-icon {
                border-left: 16px solid #333;
                border-top: 10px solid transparent;
                border-bottom: 10px solid transparent;
            }
            
            .watch-text {
                font-size: 16px;
            }
            
            .navigation-arrows {
                top: 10%;
                right: 4%;
                gap: 10px;
            }
            
            .arrow {
                width: 35px;
                height: 35px;
            }
            
            .arrow svg {
                width: 25px;
                height: 18px;
            }
        }

        @media (max-width: 480px) {
            .video-section {
                height: 80vh;
                padding: 0 3%;
            }
            
            .main-text {
                font-size: 32px;
                line-height: 115%;
                margin-bottom: 25px;
            }
            
            .play-section {
                gap: 15px;
                justify-content: center;
            }
            
            .play-button {
                width: 55px;
                height: 55px;
            }
            
            .play-icon {
                border-left: 14px solid #333;
                border-top: 8px solid transparent;
                border-bottom: 8px solid transparent;
            }
            
            .watch-text {
                font-size: 14px;
            }
            
            .navigation-arrows {
                right: 3%;
                top: 20%;
            }
            
            .arrow {
                width: 30px;
                height: 30px;
            }
            
            .arrow svg {
                width: 22px;
                height: 16px;
            }
        }

        @media (max-width: 320px) {
            .main-text {
                font-size: 28px;
            }
            
            .watch-text {
                font-size: 12px;
            }
        }
    </style>
</head>
<body>
    <section class="video-section">
        <div class="content-container">
            <h1 class="main-text">
                "It's Not About The Gear. It's About Trust, Emotion, And Catching Those Fleeting Seconds That Say Everything."
            </h1>
            
            <div class="play-section">
                <div class="play-button">
                    <div class="play-icon"></div>
                </div>
                <span class="watch-text">Watch It Now</span>
            </div>
        </div>
        
        <div class="navigation-arrows">
            <div class="arrow">
                <svg viewBox="0 0 30 20">
                    <line x1="25" y1="10" x2="5" y2="10"/>
                    <polyline points="10,5 5,10 10,15"/>
                </svg>
            </div>
            <div class="arrow">
                <svg viewBox="0 0 30 20">
                    <line x1="5" y1="10" x2="25" y2="10"/>
                    <polyline points="20,5 25,10 20,15"/>
                </svg>
            </div>
        </div>
    </section>
</body>
</html>