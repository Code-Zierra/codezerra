<?php echo <<<'EOT'
  <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="author" content="Code Zerra">
    <meta name="description" content="Code Zerra - Your Partner in Digital Excellence. We specialize in web development, mobile apps, and digital marketing to help your business thrive online.">
    <meta name="keywords" content="Code Zerra, web development, mobile app development, digital marketing, software solutions, IT services, technology solutions">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="assets/icons/codezerra-favico.png">
    <title>Code Zerra </title>
    <!-- <link rel="stylesheet" href="./assets/css/output.css"> -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: "Inter", sans-serif;
            overflow-x: hidden;
        }
       .hero-bg {
            background: linear-gradient(135deg, #1e3a8a 0%, #3b82f6 100%);
        }
        .code-display {
            background-color: #1e293b;
            border-left: 4px solid #3b82f6;
        }
        
        /* Enhanced Mobile Menu */
        .mobile-menu {
            transform: translateX(-100%);
            transition: transform 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            z-index: 50;
        }
        .mobile-menu.active {
            transform: translateX(0);
        }
        .menu-overlay {
            opacity: 0;
            visibility: hidden;
            transition: opacity 0.3s ease, visibility 0.3s ease;
            z-index: 40;
        }
        .menu-overlay.active {
            opacity: 1;
            visibility: visible;
        }
        
        /* Header animation */
        .header-scrolled {
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
        }
        
        /* Menu item animations */
        .nav-item {
            position: relative;
        }
        .nav-item::after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            bottom: -5px;
            left: 0;
            background-color: #3b82f6;
            transition: width 0.3s ease;
        }
        .nav-item:hover::after {
            width: 100%;
        }
        
        /* Hamburger animation */
        .hamburger-line {
            transform-origin: center;
            transition: transform 0.3s ease, opacity 0.3s ease;
        }
        .hamburger.active .hamburger-line:nth-child(1) {
            transform: translateY(8px) rotate(45deg);
        }
        .hamburger.active .hamburger-line:nth-child(2) {
            opacity: 0;
        }
        .hamburger.active .hamburger-line:nth-child(3) {
            transform: translateY(-8px) rotate(-45deg);
        }
        
        /* Mobile menu item animations */
        .mobile-nav-item {
            transform: translateX(-20px);
            opacity: 0;
            transition: transform 0.3s ease, opacity 0.3s ease;
        }
        .mobile-menu.active .mobile-nav-item {
            transform: translateX(0);
            opacity: 1;
        }
        .mobile-menu.active .mobile-nav-item:nth-child(1) { transition-delay: 0.1s; }
        .mobile-menu.active .mobile-nav-item:nth-child(2) { transition-delay: 0.15s; }
        .mobile-menu.active .mobile-nav-item:nth-child(3) { transition-delay: 0.2s; }
        .mobile-menu.active .mobile-nav-item:nth-child(4) { transition-delay: 0.25s; }
        .mobile-menu.active .mobile-nav-item:nth-child(5) { transition-delay: 0.3s; }
    </style>
</head>
<body class="bg-gray-50">
    <!-- Enhanced Header -->
    <header class="hero-bg text-white py-4 fixed w-full top-0 z-30 transition-all duration-300" id="main-header">
        <div class="container mx-auto px-4">
            <div class="flex justify-between items-center">
                <!-- Logo -->
                <div class="flex items-center">
                    <div class="w-10 h-10 bg-white rounded-lg flex items-center justify-center mr-3 transition-transform duration-300 hover:scale-105">
                        <span class="text-blue-600 font-bold text-xl">CZ</span>
                    </div>
                    <h1 class="text-2xl font-bold transition-colors duration-300 hover:text-blue-200">
                        <a href="./index.html">Code Zerra</a>
                    </h1>
                </div>
                
                <!-- Desktop Navigation -->
                <nav class="hidden lg:block">
                    <ul class="flex space-x-8">
                        <li class="nav-item">
                            <a href="./index.php" class="font-medium transition-colors duration-300 hover:text-blue-200">Home</a>
                        </li>
                        <li class="nav-item">
                            <a href="./services.php" class="font-medium transition-colors duration-300 hover:text-blue-200">Services</a>
                        </li>
                        <li class="nav-item">
                            <a href="./projects.php" class="font-medium transition-colors duration-300 hover:text-blue-200">Projects</a>
                        </li>
                        <li class="nav-item">
                            <a href="./about.php" class="font-medium transition-colors duration-300 hover:text-blue-200">About</a>
                        </li>
                        <li class="nav-item">
                            <a href="./contact.php" class="font-medium transition-colors duration-300 hover:text-blue-200">Contact</a>
                        </li>
                    </ul>
                </nav>
                
                <!-- CTA Button - Desktop -->
                <div class="hidden lg:block">
                    <a href="./contact.php" class="bg-white text-blue-600 px-4 py-2 rounded-lg font-semibold transition-all duration-300 hover:bg-blue-50 hover:shadow-md">
                        Get Started
                    </a>
                </div>
                
                <!-- Mobile Menu Button -->
                <button id="mobile-menu-button" class="lg:hidden text-white p-2 rounded-lg hover:bg-blue-700 transition-colors duration-300">
                    <div class="hamburger w-6 h-5 flex flex-col justify-between">
                        <span class="hamburger-line block w-full h-0.5 bg-white rounded"></span>
                        <span class="hamburger-line block w-full h-0.5 bg-white rounded"></span>
                        <span class="hamburger-line block w-full h-0.5 bg-white rounded"></span>
                    </div>
                </button>
            </div>
        </div>
    </header>

    <!-- Mobile Menu Overlay -->
    <div class="menu-overlay fixed inset-0 bg-black bg-opacity-50" id="menu-overlay"></div>

    <!-- Mobile Menu -->
    <div class="mobile-menu fixed top-0 left-0 h-full w-80 max-w-full bg-gray-900 text-white p-6" id="mobile-menu">
        <!-- Mobile Menu Header -->
        <div class="flex justify-between items-center mb-10">
            <div class="flex items-center">
                <div class="w-10 h-10 bg-white rounded-lg flex items-center justify-center mr-3">
                    <span class="text-blue-600 font-bold text-xl">CZ</span>
                </div>
                <h2 class="text-xl font-bold">Code Zerra</h2>
            </div>
            <button id="close-menu-button" class="text-white p-2 rounded-lg hover:bg-gray-800 transition-colors duration-300">
                <i class="fas fa-times text-xl"></i>
            </button>
        </div>
        
        <!-- Mobile Navigation -->
        <nav class="mb-10">
            <ul class="space-y-6">
                <li class="mobile-nav-item">
                    <a href="./index.php" class="block py-3 text-lg font-medium border-b border-gray-700 transition-colors duration-300 hover:text-blue-300">
                        <i class="fas fa-home mr-3 w-6 text-center"></i>Home
                    </a>
                </li>
                <li class="mobile-nav-item">
                    <a href="./services.php" class="block py-3 text-lg font-medium border-b border-gray-700 transition-colors duration-300 hover:text-blue-300">
                        <i class="fas fa-cogs mr-3 w-6 text-center"></i>Services
                    </a>
                </li>
                <li class="mobile-nav-item">
                    <a href="./projects.php" class="block py-3 text-lg font-medium border-b border-gray-700 transition-colors duration-300 hover:text-blue-300">
                        <i class="fas fa-project-diagram mr-3 w-6 text-center"></i>Projects
                    </a>
                </li>
                <li class="mobile-nav-item">
                    <a href="./about.php" class="block py-3 text-lg font-medium border-b border-gray-700 transition-colors duration-300 hover:text-blue-300">
                        <i class="fas fa-users mr-3 w-6 text-center"></i>About
                    </a>
                </li>
                <li class="mobile-nav-item">
                    <a href="./contact.php" class="block py-3 text-lg font-medium border-b border-gray-700 transition-colors duration-300 hover:text-blue-300">
                        <i class="fas fa-envelope mr-3 w-6 text-center"></i>Contact
                    </a>
                </li>
            </ul>
        </nav>
        
        <!-- Mobile CTA -->
        <div class="mobile-nav-item">
            <a href="./contact.php" class="block w-full bg-blue-600 text-white text-center py-3 rounded-lg font-semibold transition-colors duration-300 hover:bg-blue-700 mb-4">
                Start a Project
            </a>
        </div>
        
        <!-- Social Links -->
        <div class="mobile-nav-item pt-6 border-t border-gray-700">
            <p class="text-gray-400 mb-4">Connect with us</p>
            <div class="flex space-x-4">
                <a href="https://www.facebook.com/profile.php?id=61584673917368/" class="w-10 h-10 bg-gray-800 rounded-full flex items-center justify-center transition-colors duration-300 hover:bg-blue-600">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a href="https://github.com/Code-Zierra/" class="w-10 h-10 bg-gray-800 rounded-full flex items-center justify-center transition-colors duration-300 hover:bg-blue-600">
                    <i class="fab fa-github"></i>
                </a>
                <a href="https://www.linkedin.com/company/code-zerra/" class="w-10 h-10 bg-gray-800 rounded-full flex items-center justify-center transition-colors duration-300 hover:bg-blue-600">
                    <i class="fab fa-linkedin-in"></i>
                </a>
                <a href="#" class="w-10 h-10 bg-gray-800 rounded-full flex items-center justify-center transition-colors duration-300 hover:bg-blue-600">
                    <i class="fab fa-dribbble"></i>
                </a>
            </div>
        </div>
    </div>
EOT;
?>