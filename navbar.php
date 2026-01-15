<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
   <link rel="stylesheet" href="style.css">
   <style>
       /* Dropdown Styles */
       .nav-item {
           position: relative;
       }

       .dropdown {
           position: relative;
       }

       .dropdown-menu {
           display: none;
           position: absolute;
           top: 100%;
           left: 0;
           background-color: #fff;
           min-width: 200px;
           box-shadow: 0 8px 16px rgba(0,0,0,0.1);
           border-radius: 4px;
           padding: 10px 0;
           margin-top: 10px;
           z-index: 1000;
       }

       .dropdown-menu li {
           list-style: none;
       }

       .dropdown-menu a {
           display: block;
           padding: 12px 20px;
           color: #333;
           text-decoration: none;
           transition: background-color 0.3s;
       }

       .dropdown-menu a:hover {
           background-color: #f5f5f5;
       }

       .dropdown:hover .dropdown-menu {
           display: block;
       }

       .dropdown > .nav-link i {
           margin-left: 5px;
           font-size: 12px;
           transition: transform 0.3s;
       }

       .dropdown:hover > .nav-link i {
           transform: rotate(180deg);
       }

       /* Mobile Dropdown Styles */
       @media (max-width: 768px) {
           .dropdown-menu {
               position: static;
               box-shadow: none;
               background-color: transparent;
               padding-left: 20px;
               margin-top: 0;
           }

           .dropdown-menu a {
               padding: 10px 20px;
               font-size: 14px;
           }

           .dropdown.active .dropdown-menu {
               display: block;
           }
       }
   </style>
</head>
<body>
       <nav class="navbar">
        <div class="navbar-container">
            <!-- Logo Section -->
            <div class="logo">
             <a href="./index.php">
    <img src="./assets/blacklogo.png" alt="A Little Man Logo">
  </a>
            </div>

            <!-- Navigation Menu -->
            <ul class="nav-menu">
                <li class="nav-item">
                    <a href="index.php" class="nav-link">Home</a>
                </li>
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link">
                        Portfolio <i class="fas fa-chevron-down"></i>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="./portfolio.php?category=photography">Photography</a></li>
                        <li><a href="./portfolio.php?category=films">Films</a></li>
                        <li><a href="./portfolio.php?category=pre-wedding">Pre Wedding</a></li>
                        <li><a href="./portfolio.php?category=maternity">Maternity</a></li>
                        <li><a href="./portfolio.php?category=celebrity">Celebrity</a></li>
                        <li><a href="./portfolio.php?category=personal">Personal</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#book" class="nav-link">Book Now</a>
                </li>
                <li class="nav-item">
                    <a href="https://wa.me/917741975188" class="nav-link">Contact</a>
                </li>
            </ul>

            <!-- Social Media Icons -->
            <div class="social-icons">
                <a href="https://m.facebook.com/alittleman0/" class="social-icon" aria-label="Facebook">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a href="https://www.instagram.com/alittleman_?igsh=MWo3N3lwcmJ1c2pk" class="social-icon" aria-label="Instagram">
                    <i class="fab fa-instagram"></i>
                </a>
                
                <a href="#" class="social-icon" aria-label="YouTube">
                    <i class="fab fa-youtube"></i>
                </a>
            </div>

            <!-- Mobile Menu Toggle -->
            <div class="mobile-menu-toggle">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </nav>

    <script>
        // Mobile menu toggle functionality
        const mobileMenuToggle = document.querySelector('.mobile-menu-toggle');
        const navMenu = document.querySelector('.nav-menu');

        mobileMenuToggle.addEventListener('click', () => {
            mobileMenuToggle.classList.toggle('active');
            navMenu.classList.toggle('active');
        });

        // Mobile dropdown toggle
        const dropdown = document.querySelector('.dropdown');
        const dropdownLink = dropdown.querySelector('.nav-link');

        dropdownLink.addEventListener('click', (e) => {
            if (window.innerWidth <= 768) {
                e.preventDefault();
                dropdown.classList.toggle('active');
            }
        });

        // Close mobile menu when clicking on a nav link (except dropdown toggle)
        document.querySelectorAll('.nav-link').forEach(link => {
            if (!link.closest('.dropdown')) {
                link.addEventListener('click', () => {
                    mobileMenuToggle.classList.remove('active');
                    navMenu.classList.remove('active');
                });
            }
        });

        // Close dropdown menu items on mobile
        document.querySelectorAll('.dropdown-menu a').forEach(link => {
            link.addEventListener('click', () => {
                mobileMenuToggle.classList.remove('active');
                navMenu.classList.remove('active');
                dropdown.classList.remove('active');
            });
        });

        // Close mobile menu when clicking outside
        document.addEventListener('click', (e) => {
            if (!e.target.closest('.navbar-container')) {
                mobileMenuToggle.classList.remove('active');
                navMenu.classList.remove('active');
                dropdown.classList.remove('active');
            }
        });

        //scroll
        document.querySelectorAll('.scroll-link').forEach(link => {
            link.addEventListener('click', function(e) {
                e.preventDefault();
                const targetId = this.getAttribute('href').substring(1);
                const targetSection = document.getElementById(targetId);
                
                if (targetSection) {
                    targetSection.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });
    </script>
</body>

</html>