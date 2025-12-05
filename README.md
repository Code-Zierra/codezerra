# Code Zerra

**Passion ignites creativity**

Code Zerra is a comprehensive digital solutions company specializing in web development, mobile app development, digital marketing, and IT consulting services. We help businesses thrive online with innovative, custom-built solutions.

## Table of Contents

- [Overview](#overview)
- [Features](#features)
- [Services](#services)
- [Projects](#projects)
- [Tech Stack](#tech-stack)
- [Project Structure](#project-structure)
- [Installation & Setup](#installation--setup)
- [Database Configuration](#database-configuration)
- [Usage](#usage)
- [Components](#components)
- [Contact](#contact)

## Overview

Code Zerra is a full-stack web application built with PHP, Tailwind CSS, and modern web technologies. The platform showcases our expertise in creating responsive, performant digital solutions and provides clients with an interface to explore our services and portfolio.

### Philosophy

We believe in writing clean, efficient code that solves real-world problems. Our passion for technology drives our creativity to build innovative solutions that make a difference.

## Features

- **Responsive Design**: Mobile-first approach ensuring seamless experience across all devices
- **Modern UI/UX**: Built with Tailwind CSS for stunning, accessible interfaces
- **Contact Management**: Full contact form with database integration
- **Portfolio Showcase**: Showcase of completed projects and case studies
- **Service Documentation**: Comprehensive service descriptions and offerings
- **Newsletter Subscription**: Email subscription management system
- **Dynamic Routing**: PHP-based routing for various service and project pages

## Services

Our core service offerings include:

### 1. **Web Development**
   - Responsive Design
   - Progressive Web Apps (PWA)
   - E-commerce Solutions
   - Custom Web Applications

### 2. **Mobile Apps**
   - iOS & Android Development
   - Cross-platform Solutions
   - Native Performance

### 3. **Digital Marketing**
   - SEO Optimization
   - Content Marketing
   - Social Media Strategy
   - Analytics & Reporting

### 4. **UX/UI Design**
   - User Interface Design
   - User Experience Strategy
   - Brand Design
   - Design Systems

### 5. **Consulting**
   - Digital Strategy
   - Technology Consultation
   - Maintenance & Support
   - Cloud Solutions

## Projects

We showcase a diverse portfolio of completed projects:

- **Artisan Market** - E-commerce platform for artisans and craftspeople
- **EcoTrack** - Environmental tracking and monitoring solution
- **FinWise** - Financial management and planning application
- **HealthTrack** - Health and wellness tracking system
- **LearnHub** - Educational platform and learning management system
- **Nexus** - Enterprise communication and collaboration tool
- **Style Guide** - Comprehensive design system documentation

## Tech Stack

### Frontend
- **HTML5**: Semantic markup
- **CSS3 & Tailwind CSS**: Modern styling and responsive design
- **JavaScript**: Interactive features and client-side logic
- **Font Awesome**: Icon library
- **Google Fonts**: Typography

### Backend
- **PHP**: Server-side logic and routing
- **MySQL**: Database management
- **PDO**: Database abstraction layer

### Development Tools
- **Node.js & npm**: Package management
- **Tailwind CLI**: CSS processing and optimization

## Project Structure

```
codezerra/
├── assets/                 # Static assets
│   ├── css/               # Stylesheets
│   │   ├── input.css      # Source CSS
│   │   └── output.css     # Compiled CSS
│   ├── fonts/             # Custom fonts
│   ├── icons/             # Icon assets
│   ├── images/            # Image assets
│   └── js/
│       └── script.js      # Client-side JavaScript
├── components/            # Reusable PHP components
│   ├── Header.php         # Page header/navigation
│   └── Footer.php         # Page footer
├── server/                # Backend logic
│   ├── config/
│   │   └── db.php         # Database configuration
│   ├── debug/
│   │   └── db_test.php    # Database testing utilities
│   ├── middleware/
│   │   └── validate.js    # Input validation
│   ├── model/
│   │   └── contact.php    # Contact form handling
│   └── setup/
│       └── database.sql   # Database schema
├── index.php              # Home page
├── services.php           # Services overview
├── web.php                # Web development service detail
├── mobile.php             # Mobile app service detail
├── digital-strategy.php   # Digital strategy service detail
├── uxui.php               # UX/UI design service detail
├── consulting.php         # Consulting service detail
├── maintenance-support.php # Maintenance & support service detail
├── cloud.php              # Cloud solutions service detail
├── projects.php           # Projects portfolio
├── all-projects.php       # All projects listing
├── project-*.php          # Individual project pages
├── about.php              # About us page
├── contact.php            # Contact page
├── package.json           # npm dependencies
└── README.md              # Project documentation
```

## Installation & Setup

### Prerequisites
- PHP 7.4 or higher
- MySQL 5.7 or higher
- Node.js & npm (for Tailwind CSS compilation)
- XAMPP or similar local development environment

### Step 1: Clone/Download the Project
```bash
cd c:\xampp\htdocs
# Clone or download Code Zerra project
```

### Step 2: Install Dependencies
```bash
cd codezerra
npm install
```

### Step 3: Configure Database
Update the database credentials in `server/config/db.php`:
```php
private $host = "localhost";
private $db_name = "codezerra";
private $username = "root";
private $password = "";
```

### Step 4: Create Database
```bash
# Option 1: Import SQL file
mysql -u root < server/setup/database.sql

# Option 2: Use the database connection in PHP (auto-creates database)
# Simply access the application and it will create the database automatically
```

### Step 5: Build CSS
```bash
npm run build  # or use Tailwind CLI to compile CSS
```

### Step 6: Start Development Server
```bash
php -S localhost:8000
# or access through XAMPP: http://localhost/codezerra
```

## Database Configuration

### Database Setup
The application uses MySQL with the following configuration:

**Database Name**: `codezerra`

**Tables**:
1. **contacts** - Stores contact form submissions
   - id, name, email, company, subject, service, message
   - consent, ip_address, user_agent
   - created_at, updated_at

2. **newsletter_subscribers** - Email subscription management
   - id, email, status (active/inactive)
   - subscribed_at

### Auto-Database Creation
The Database class in `server/config/db.php` automatically creates the database if it doesn't exist. Simply connect and it will initialize.

## Usage

### Viewing Pages
Access the application through your browser:
- **Home**: `http://localhost/codezerra/`
- **Services**: `http://localhost/codezerra/services.php`
- **Projects**: `http://localhost/codezerra/projects.php`
- **About**: `http://localhost/codezerra/about.php`
- **Contact**: `http://localhost/codezerra/contact.php`

### Submitting Contact Form
1. Navigate to `/contact.php`
2. Fill in the contact form with your details
3. Select a service of interest
4. Submit the form
5. Data is stored in the `contacts` database table

### Subscribing to Newsletter
Newsletter subscription functionality is integrated throughout the site, storing emails in the `newsletter_subscribers` table.

## Components

### Header Component (`components/Header.php`)
- Navigation menu with responsive design
- Meta tags for SEO
- Tailwind CSS styling
- Mobile menu toggle
- Links to all main pages and services

### Footer Component (`components/Footer.php`)
- Site footer with links
- Copyright information
- Social media links
- Newsletter subscription form

## Contact

**Code Zerra**
- **Email**: contact@codezerra.com
- **Website**: https://codezerra.com
- **Services**: Web Development, Mobile Apps, Digital Marketing, UX/UI Design, Consulting

---

**Last Updated**: December 2025  
**Version**: 1.0  
**License**: Proprietary - Code Zerra © 2025
