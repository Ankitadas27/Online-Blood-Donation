<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LifeBlood - Save Lives Through Donation</title>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Material UI Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    
    <style>
        :root {
            --primary-red: #dc2626;
            --primary-dark: #991b1b;
            --secondary-blue: #1e40af;
            --accent-orange: #ea580c;
            --text-dark: #1f2937;
            --text-light: #6b7280;
            --bg-light: #f8fafc;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', sans-serif;
            line-height: 1.6;
            color: var(--text-dark);
        }

        /* Navigation */
        .navbar {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            box-shadow: 0 2px 20px rgba(0,0,0,0.1);
            transition: all 0.3s ease;
        }

        .navbar-brand {
            font-weight: 700;
            font-size: 1.5rem;
            color: var(--primary-red) !important;
        }

        .navbar-nav .nav-link {
            font-weight: 500;
            color: var(--text-dark) !important;
            margin: 0 10px;
            transition: all 0.3s ease;
            position: relative;
        }

        .navbar-nav .nav-link:hover {
            color: var(--primary-red) !important;
        }

        .navbar-nav .nav-link::after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            bottom: -5px;
            left: 50%;
            background: var(--primary-red);
            transition: all 0.3s ease;
        }

        .navbar-nav .nav-link:hover::after,
        .navbar-nav .nav-link.active::after {
            width: 100%;
            left: 0;
        }

        .btn-donate {
            background: linear-gradient(135deg, var(--primary-red), var(--primary-dark));
            color: white;
            border: none;
            padding: 10px 25px;
            border-radius: 50px;
            font-weight: 600;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(220, 38, 38, 0.3);
        }

        .btn-donate:hover {
            background: linear-gradient(135deg, var(--primary-dark), var(--primary-red));
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(220, 38, 38, 0.4);
            color: white;
        }

        /* Page Content */
        .page-content {
            min-height: 100vh;
            padding-top: 80px;
        }

        /* Hero Section */
        .hero {
            background: linear-gradient(135deg, rgba(220, 38, 38, 0.9), rgba(153, 27, 27, 0.9)), 
                        url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 1000"><defs><pattern id="hearts" patternUnits="userSpaceOnUse" width="100" height="100"><path d="M50 30c-10-20-40-20-50 0-10-20-40-20-50 0 0 20 50 50 50 50s50-30 50-50z" fill="%23ffffff" opacity="0.1"/></pattern></defs><rect width="100%" height="100%" fill="url(%23hearts)"/></svg>');
            background-size: cover;
            background-position: center;
            color: white;
            padding: 120px 0;
            position: relative;
            overflow: hidden;
        }

        .hero::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(45deg, transparent 49%, rgba(220, 38, 38, 0.1) 50%, transparent 51%);
            animation: shimmer 3s ease-in-out infinite;
        }

        @keyframes shimmer {
            0%, 100% { opacity: 0; }
            50% { opacity: 1; }
        }

        .hero-content {
            position: relative;
            z-index: 2;
        }

        .hero h1 {
            font-size: 3.5rem;
            font-weight: 700;
            margin-bottom: 1.5rem;
            animation: fadeInUp 1s ease-out;
        }

        .hero p {
            font-size: 1.3rem;
            margin-bottom: 2rem;
            opacity: 0.9;
            animation: fadeInUp 1s ease-out 0.2s both;
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Material UI Cards */
        .material-card {
            background: white;
            border-radius: 16px;
            box-shadow: 0 4px 20px rgba(0,0,0,0.1);
            padding: 2rem;
            transition: all 0.3s ease;
            border: none;
            position: relative;
            overflow: hidden;
        }

        .material-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: linear-gradient(90deg, var(--primary-red), var(--accent-orange));
        }

        .material-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(0,0,0,0.15);
        }

        .material-icon {
            font-size: 3rem;
            color: var(--primary-red);
            margin-bottom: 1rem;
        }

        /* Statistics Section */
        .stats-section {
            background: var(--bg-light);
            padding: 80px 0;
        }

        .stat-card {
            text-align: center;
            padding: 2rem;
            background: white;
            border-radius: 16px;
            box-shadow: 0 4px 20px rgba(0,0,0,0.08);
            transition: all 0.3s ease;
        }

        .stat-card:hover {
            transform: translateY(-5px);
        }

        .stat-number {
            font-size: 3rem;
            font-weight: 700;
            color: var(--primary-red);
            display: block;
        }

        /* Forms */
        .form-floating {
            margin-bottom: 1.5rem;
        }

        .form-control {
            border: 2px solid #e5e7eb;
            border-radius: 12px;
            padding: 15px;
            transition: all 0.3s ease;
        }

        .form-control:focus {
            border-color: var(--primary-red);
            box-shadow: 0 0 0 0.25rem rgba(220, 38, 38, 0.1);
        }

        .btn-primary {
            background: linear-gradient(135deg, var(--primary-red), var(--primary-dark));
            border: none;
            padding: 15px 30px;
            border-radius: 12px;
            font-weight: 600;
            transition: all 0.3s ease;
        }

        .btn-primary:hover {
            background: linear-gradient(135deg, var(--primary-dark), var(--primary-red));
            transform: translateY(-2px);
        }

        /* Footer */
        .footer {
            background: var(--text-dark);
            color: white;
            padding: 60px 0 30px;
        }

        .footer h5 {
            color: var(--primary-red);
            margin-bottom: 1.5rem;
        }

        .footer a {
            color: #9ca3af;
            text-decoration: none;
            transition: all 0.3s ease;
        }

        .footer a:hover {
            color: var(--primary-red);
        }

        /* Page Specific Styles */
        .page-header {
            background: linear-gradient(135deg, var(--primary-red), var(--primary-dark));
            color: white;
            padding: 60px 0;
            text-align: center;
        }

        .blood-type-selector {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(100px, 1fr));
            gap: 1rem;
            margin: 2rem 0;
        }

        .blood-type-btn {
            padding: 1rem;
            border: 2px solid #e5e7eb;
            border-radius: 12px;
            background: white;
            cursor: pointer;
            transition: all 0.3s ease;
            text-align: center;
            font-weight: 600;
        }

        .blood-type-btn:hover,
        .blood-type-btn.active {
            border-color: var(--primary-red);
            background: var(--primary-red);
            color: white;
        }

        /* Animations */
        .fade-in {
            animation: fadeIn 1s ease-out;
        }

        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        .slide-up {
            animation: slideUp 0.6s ease-out;
        }

        @keyframes slideUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Responsive */
        @media (max-width: 768px) {
            .hero h1 {
                font-size: 2.5rem;
            }
            
            .hero p {
                font-size: 1.1rem;
            }
            
            .navbar-nav {
                text-align: center;
                padding: 1rem 0;
            }
        }

        /* Blood Donation Specific Styles */
        .donation-process {
            background: var(--bg-light);
            padding: 80px 0;
        }

        .process-step {
            text-align: center;
            position: relative;
            margin-bottom: 2rem;
        }

        .process-step::after {
            content: '';
            position: absolute;
            top: 50%;
            right: -50%;
            width: 100%;
            height: 2px;
            background: var(--primary-red);
            opacity: 0.3;
        }

        .process-step:last-child::after {
            display: none;
        }

        .process-icon {
            width: 80px;
            height: 80px;
            background: linear-gradient(135deg, var(--primary-red), var(--primary-dark));
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 1rem;
            color: white;
            font-size: 2rem;
        }

        .emergency-banner {
            background: linear-gradient(135deg, #dc2626, #b91c1c);
            color: white;
            padding: 15px 0;
            text-align: center;
            animation: pulse 2s infinite;
        }

        @keyframes pulse {
            0%, 100% { opacity: 1; }
            50% { opacity: 0.8; }
        }
    </style>
</head>
<body>
    <!-- Emergency Banner -->
    <div class="emergency-banner">
        <div class="container">
            <i class="fas fa-exclamation-triangle me-2"></i>
            <strong>URGENT:</strong> O- Blood Type Critically Needed! 
            <a href="#" class="text-white ms-3" onclick="showPage('donate')">
                <u>Donate Now</u>
            </a>
        </div>
    </div>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#" onclick="showPage('home')">
                <i class="fas fa-heart me-2"></i>LifeBlood
            </a>
            
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="#" onclick="showPage('home')">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" onclick="showPage('about')">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" onclick="showPage('donate')">Donate</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" onclick="showPage('request')">Request Blood</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" onclick="showPage('locations')">Locations</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" onclick="showPage('contact')">Contact</a>
                    </li>
                </ul>
                <button class="btn btn-donate ms-3" onclick="showPage('donate')">
                    <i class="fas fa-tint me-2"></i>Donate Now
                </button>
            </div>
        </div>
    </nav>

    <!-- Page Content Container -->
    <div id="pageContent" class="page-content">
        <!-- Content will be dynamically loaded here -->
    </div>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 mb-4">
                    <h5><i class="fas fa-heart me-2"></i>LifeBlood</h5>
                    <p class="text-muted">Connecting donors with those in need. Every drop counts in saving lives and building healthier communities.</p>
                    <div class="social-links">
                        <a href="#" class="me-3"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="me-3"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="me-3"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="me-3"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-2 mb-4">
                    <h5>Quick Links</h5>
                    <ul class="list-unstyled">
                        <li><a href="#" onclick="showPage('home')">Home</a></li>
                        <li><a href="#" onclick="showPage('about')">About Us</a></li>
                        <li><a href="#" onclick="showPage('donate')">Donate Blood</a></li>
                        <li><a href="#" onclick="showPage('request')">Request Blood</a></li>
                    </ul>
                </div>
                <div class="col-lg-2 mb-4">
                    <h5>Services</h5>
                    <ul class="list-unstyled">
                        <li><a href="#">Blood Donation</a></li>
                        <li><a href="#">Plasma Donation</a></li>
                        <li><a href="#">Platelet Donation</a></li>
                        <li><a href="#">Mobile Drives</a></li>
                    </ul>
                </div>
                <div class="col-lg-4 mb-4">
                    <h5>Contact Info</h5>
                    <ul class="list-unstyled">
                        <li><i class="fas fa-phone me-2"></i>1-800-LIFE-BLOOD</li>
                        <li><i class="fas fa-envelope me-2"></i>info@lifeblood.org</li>
                        <li><i class="fas fa-map-marker-alt me-2"></i>123 Health Street, Medical District</li>
                        <li><i class="fas fa-clock me-2"></i>24/7 Emergency Support</li>
                    </ul>
                </div>
            </div>
            <hr class="my-4">
            <div class="text-center">
                <p>&copy; 2024 LifeBlood. All rights reserved. | <a href="#">Privacy Policy</a> | <a href="#">Terms of Service</a></p>
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    
    <script>
        // Page content templates
        const pages = {
            home: `
                <section class="hero">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-lg-6 hero-content">
                                <h1>Save Lives, Donate Blood</h1>
                                <p>One donation can save up to three lives. Join our community of heroes and make a difference today.</p>
                                <div class="d-flex gap-3 flex-wrap">
                                    <button class="btn btn-donate btn-lg" onclick="showPage('donate')">
                                        <i class="fas fa-tint me-2"></i>Donate Now
                                    </button>
                                    <button class="btn btn-outline-light btn-lg" onclick="showPage('request')">
                                        <i class="fas fa-search me-2"></i>Find Blood
                                    </button>
                                </div>
                            </div>
                            <div class="col-lg-6 text-center">
                                <div class="hero-image">
                                    <i class="fas fa-heart" style="font-size: 15rem; opacity: 0.3; animation: heartbeat 2s infinite;"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="stats-section">
                    <div class="container">
                        <div class="row text-center mb-5">
                            <div class="col-12">
                                <h2 class="mb-4">Our Impact</h2>
                                <p class="text-muted mb-5">Together, we're making a difference in our community</p>
                            </div>
                        </div>
                        <div class="row g-4">
                            <div class="col-md-3">
                                <div class="stat-card">
                                    <span class="stat-number" data-count="15000">0</span>
                                    <h5>Lives Saved</h5>
                                    <p class="text-muted">Through blood donations</p>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="stat-card">
                                    <span class="stat-number" data-count="5000">0</span>
                                    <h5>Active Donors</h5>
                                    <p class="text-muted">Regular contributors</p>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="stat-card">
                                    <span class="stat-number" data-count="50">0</span>
                                    <h5>Locations</h5>
                                    <p class="text-muted">Across the region</p>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="stat-card">
                                    <span class="stat-number" data-count="24">0</span>
                                    <h5>Hours Service</h5>
                                    <p class="text-muted">Emergency support</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="py-5">
                    <div class="container">
                        <div class="row text-center mb-5">
                            <div class="col-12">
                                <h2 class="mb-4">Why Donate Blood?</h2>
                                <p class="text-muted mb-5">Every donation makes a real difference</p>
                            </div>
                        </div>
                        <div class="row g-4">
                            <div class="col-md-4">
                                <div class="material-card text-center slide-up">
                                    <i class="material-icons material-icon">favorite</i>
                                    <h4>Save Lives</h4>
                                    <p>One blood donation can save up to three lives. Your contribution directly helps patients in emergency situations, surgeries, and ongoing treatments.</p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="material-card text-center slide-up">
                                    <i class="material-icons material-icon">health_and_safety</i>
                                    <h4>Health Benefits</h4>
                                    <p>Regular blood donation helps maintain healthy iron levels, reduces cardiovascular risks, and provides free health screenings.</p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="material-card text-center slide-up">
                                    <i class="material-icons material-icon">groups</i>
                                    <h4>Community Impact</h4>
                                    <p>Join a community of heroes making a difference. Your donation stays local and helps your neighbors and community members.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="donation-process">
                    <div class="container">
                        <div class="row text-center mb-5">
                            <div class="col-12">
                                <h2 class="mb-4">Donation Process</h2>
                                <p class="text-muted mb-5">Simple, safe, and quick - usually takes about an hour</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="process-step">
                                    <div class="process-icon">
                                        <i class="fas fa-user-check"></i>
                                    </div>
                                    <h5>Registration</h5>
                                    <p>Complete health questionnaire and verification</p>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="process-step">
                                    <div class="process-icon">
                                        <i class="fas fa-stethoscope"></i>
                                    </div>
                                    <h5>Health Screening</h5>
                                    <p>Quick vital signs check and mini-physical</p>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="process-step">
                                    <div class="process-icon">
                                        <i class="fas fa-tint"></i>
                                    </div>
                                    <h5>Donation</h5>
                                    <p>Safe 10-15 minute blood collection process</p>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="process-step">
                                    <div class="process-icon">
                                        <i class="fas fa-cookie-bite"></i>
                                    </div>
                                    <h5>Refreshments</h5>
                                    <p>Relax with snacks and drinks to replenish</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            `,

            about: `
                <div class="page-header">
                    <div class="container">
                        <h1><i class="fas fa-info-circle me-3"></i>About LifeBlood</h1>
                        <p>Connecting communities through the gift of life</p>
                    </div>
                </div>

                <section class="py-5">
                    <div class="container">
                        <div class="row align-items-center mb-5">
                            <div class="col-lg-6">
                                <h2>Our Mission</h2>
                                <p class="lead">To save lives by connecting blood donors with patients in need, ensuring a safe and adequate blood supply for our community.</p>
                                <p>Founded in 1995, LifeBlood has been at the forefront of blood donation services, implementing cutting-edge safety protocols and innovative donor engagement strategies. We believe that every person has the power to be a hero by donating blood.</p>
                                <div class="row mt-4">
                                    <div class="col-6">
                                        <h4 class="text-danger">25+</h4>
                                        <p>Years of Service</p>
                                    </div>
                                    <div class="col-6">
                                        <h4 class="text-danger">500K+</h4>
                                        <p>Lives Impacted</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="material-card">
                                    <i class="fas fa-hospital" style="font-size: 6rem; color: var(--primary-red); opacity: 0.1;"></i>
                                </div>
                            </div>
                        </div>

                        <div class="row g-4">
                            <div class="col-md-4">
                                <div class="material-card text-center">
                                    <i class="material-icons material-icon">security</i>
                                    <h4>Safety First</h4>
                                    <p>All donations follow strict FDA guidelines with comprehensive testing and screening protocols.</p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="material-card text-center">
                                    <i class="material-icons material-icon">volunteer_activism</i>
                                    <h4>Community Focused</h4>
                                    <p>Local donations stay local, directly supporting hospitals and emergency services in your area.</p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="material-card text-center">
                                    <i class="material-icons material-icon">science</i>
                                    <h4>Innovation</h4>
                                    <p>Utilizing advanced technology for donor management, blood processing, and distribution logistics.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="stats-section">
                    <div class="container">
                        <div class="row text-center">
                            <div class="col-12 mb-5">
                                <h2>Blood Type Compatibility</h2>
                                <p class="text-muted">Understanding blood type matching for safe transfusions</p>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="material-card">
                                    <div class="table-responsive">
                                        <table class="table table-hover">
                                            <thead class="table-danger">
                                                <tr>
                                                    <th>Blood Type</th>
                                                    <th>Can Donate To</th>
                                                    <th>Can Receive From</th>
                                                    <th>Population %</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td><strong>O-</strong></td>
                                                    <td>Everyone</td>
                                                    <td>O-</td>
                                                    <td>6.6%</td>
                                                </tr>
                                                <tr>
                                                    <td><strong>O+</strong></td>
                                                    <td>O+, A+, B+, AB+</td>
                                                    <td>O-, O+</td>
                                                    <td>37.4%</td>
                                                </tr>
                                                <tr>
                                                    <td><strong>A-</strong></td>
                                                    <td>A-, A+, AB-, AB+</td>
                                                    <td>A-, O-</td>
                                                    <td>6.3%</td>
                                                </tr>
                                                <tr>
                                                    <td><strong>A+</strong></td>
                                                    <td>A+, AB+</td>
                                                    <td>A+, A-, O+, O-</td>
                                                    <td>35.7%</td>
                                                </tr>
                                                <tr>
                                                    <td><strong>B-</strong></td>
                                                    <td>B-, B+, AB-, AB+</td>
                                                    <td>B-, O-</td>
                                                    <td>1.5%</td>
                                                </tr>
                                                <tr>
                                                    <td><strong>B+</strong></td>
                                                    <td>B+, AB+</td>
                                                    <td>B+, B-, O+, O-</td>
                                                    <td>8.5%</td>
                                                </tr>
                                                <tr>
                                                    <td><strong>AB-</strong></td>
                                                    <td>AB-, AB+</td>
                                                    <td>All negative types</td>
                                                    <td>0.6%</td>
                                                </tr>
                                                <tr>
                                                    <td><strong>AB+</strong></td>
                                                    <td>AB+</td>
                                                    <td>Everyone</td>
                                                    <td>3.4%</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            `,

            donate: `
                <div class="page-header">
                    <div class="container">
                        <h1><i class="fas fa-tint me-3"></i>Donate Blood</h1>
                        <p>Be a hero. Save a life. Donate today.</p>
                    </div>
                </div>

                <section class="py-5">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8">
                                <div class="material-card">
                                    <h3 class="mb-4">Schedule Your Donation</h3>
                                    <form id="donationForm">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-floating">
                                                    <input type="text" class="form-control" id="firstName" placeholder="First Name" required>
                                                    <label for="firstName">First Name</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-floating">
                                                    <input type="text" class="form-control" id="lastName" placeholder="Last Name" required>
                                                    <label for="lastName">Last Name</label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-floating">
                                                    <input type="email" class="form-control" id="email" placeholder="Email" required>
                                                    <label for="email">Email Address</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-floating">
                                                    <input type="tel" class="form-control" id="phone" placeholder="Phone" required>
                                                    <label for="phone">Phone Number</label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-floating">
                                                    <input type="date" class="form-control" id="birthDate" required>
                                                    <label for="birthDate">Date of Birth</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-floating">
                                                    <select class="form-control" id="gender" required>
                                                        <option value="">Select Gender</option>
                                                        <option value="male">Male</option>
                                                        <option value="female">Female</option>
                                                        <option value="other">Other</option>
                                                    </select>
                                                    <label for="gender">Gender</label>
                                                </div>
                                            </div>
                                        </div>

                                        <h5 class="mt-4 mb-3">Select Your Blood Type</h5>
                                        <div class="blood-type-selector">
                                            <div class="blood-type-btn" onclick="selectBloodType(this, 'O-')">O-</div>
                                            <div class="blood-type-btn" onclick="selectBloodType(this, 'O+')">O+</div>
                                            <div class="blood-type-btn" onclick="selectBloodType(this, 'A-')">A-</div>
                                            <div class="blood-type-btn" onclick="selectBloodType(this, 'A+')">A+</div>
                                            <div class="blood-type-btn" onclick="selectBloodType(this, 'B-')">B-</div>
                                            <div class="blood-type-btn" onclick="selectBloodType(this, 'B+')">B+</div>
                                            <div class="blood-type-btn" onclick="selectBloodType(this, 'AB-')">AB-</div>
                                            <div class="blood-type-btn" onclick="selectBloodType(this, 'AB+')">AB+</div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-floating">
                                                    <input type="date" class="form-control" id="donationDate" required>
                                                    <label for="donationDate">Preferred Date</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-floating">
                                                    <select class="form-control" id="donationTime" required>
                                                        <option value="">Select Time</option>
                                                        <option value="09:00">9:00 AM</option>
                                                        <option value="10:00">10:00 AM</option>
                                                        <option value="11:00">11:00 AM</option>
                                                        <option value="12:00">12:00 PM</option>
                                                        <option value="13:00">1:00 PM</option>
                                                        <option value="14:00">2:00 PM</option>
                                                        <option value="15:00">3:00 PM</option>
                                                        <option value="16:00">4:00 PM</option>
                                                    </select>
                                                    <label for="donationTime">Preferred Time</label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-floating">
                                            <select class="form-control" id="location" required>
                                                <option value="">Select Location</option>
                                                <option value="main">Main Medical Center</option>
                                                <option value="north">North Branch</option>
                                                <option value="south">South Branch</option>
                                                <option value="east">East Branch</option>
                                                <option value="mobile">Mobile Unit</option>
                                            </select>
                                            <label for="location">Donation Location</label>
                                        </div>

                                        <div class="form-check mb-3">
                                            <input class="form-check-input" type="checkbox" id="terms" required>
                                            <label class="form-check-label" for="terms">
                                                I agree to the <a href="#" class="text-danger">terms and conditions</a> and health screening requirements
                                            </label>
                                        </div>

                                        <button type="submit" class="btn btn-primary btn-lg w-100">
                                            <i class="fas fa-calendar-plus me-2"></i>Schedule Donation
                                        </button>
                                    </form>
                                </div>
                            </div>

                            <div class="col-lg-4">
                                <div class="material-card">
                                    <h4>Donation Requirements</h4>
                                    <ul class="list-unstyled">
                                        <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Age 17-65 years old</li>
                                        <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Weight at least 110 lbs</li>
                                        <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Good general health</li>
                                        <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Valid photo ID</li>
                                        <li class="mb-2"><i class="fas fa-check text-success me-2"></i>8 weeks since last donation</li>
                                    </ul>
                                </div>

                                <div class="material-card mt-4">
                                    <h4>What to Expect</h4>
                                    <div class="timeline">
                                        <div class="d-flex mb-3">
                                            <div class="flex-shrink-0">
                                                <div class="bg-danger rounded-circle p-2 text-white text-center" style="width: 40px; height: 40px;">
                                                    <small>15</small>
                                                </div>
                                            </div>
                                            <div class="ms-3">
                                                <h6>Registration & Health Check</h6>
                                                <small class="text-muted">Complete forms and mini-physical</small>
                                            </div>
                                        </div>
                                        <div class="d-flex mb-3">
                                            <div class="flex-shrink-0">
                                                <div class="bg-danger rounded-circle p-2 text-white text-center" style="width: 40px; height: 40px;">
                                                    <small>10</small>
                                                </div>
                                            </div>
                                            <div class="ms-3">
                                                <h6>Blood Donation</h6>
                                                <small class="text-muted">Safe and comfortable collection</small>
                                            </div>
                                        </div>
                                        <div class="d-flex">
                                            <div class="flex-shrink-0">
                                                <div class="bg-danger rounded-circle p-2 text-white text-center" style="width: 40px; height: 40px;">
                                                    <small>15</small>
                                                </div>
                                            </div>
                                            <div class="ms-3">
                                                <h6>Recovery & Refreshments</h6>
                                                <small class="text-muted">Relax with snacks and drinks</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="material-card mt-4 bg-light">
                                    <h5><i class="fas fa-phone text-danger me-2"></i>Need Help?</h5>
                                    <p class="mb-2">Call us at <strong>1-800-DONATE</strong></p>
                                    <p class="mb-0 small text-muted">Available 24/7 for questions and support</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            `,

            request: `
                <div class="page-header">
                    <div class="container">
                        <h1><i class="fas fa-search me-3"></i>Request Blood</h1>
                        <p>Finding the blood you need, when you need it</p>
                    </div>
                </div>

                <section class="py-5">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8">
                                <div class="material-card">
                                    <h3 class="mb-4">Blood Request Form</h3>
                                    <div class="alert alert-warning">
                                        <i class="fas fa-exclamation-triangle me-2"></i>
                                        <strong>For Emergency Requests:</strong> Call 911 or contact your hospital directly. This form is for non-emergency blood requests.
                                    </div>
                                    
                                    <form id="requestForm">
                                        <h5 class="mb-3">Patient Information</h5>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-floating">
                                                    <input type="text" class="form-control" id="patientFirstName" placeholder="Patient First Name" required>
                                                    <label for="patientFirstName">Patient First Name</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-floating">
                                                    <input type="text" class="form-control" id="patientLastName" placeholder="Patient Last Name" required>
                                                    <label for="patientLastName">Patient Last Name</label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-floating">
                                                    <input type="date" class="form-control" id="patientBirthDate" required>
                                                    <label for="patientBirthDate">Patient Date of Birth</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-floating">
                                                    <input type="text" class="form-control" id="patientId" placeholder="Patient ID">
                                                    <label for="patientId">Patient ID (if available)</label>
                                                </div>
                                            </div>
                                        </div>

                                        <h5 class="mt-4 mb-3">Blood Requirements</h5>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <h6>Required Blood Type</h6>
                                                <div class="blood-type-selector">
                                                    <div class="blood-type-btn" onclick="selectRequestBloodType(this, 'O-')">O-</div>
                                                    <div class="blood-type-btn" onclick="selectRequestBloodType(this, 'O+')">O+</div>
                                                    <div class="blood-type-btn" onclick="selectRequestBloodType(this, 'A-')">A-</div>
                                                    <div class="blood-type-btn" onclick="selectRequestBloodType(this, 'A+')">A+</div>
                                                    <div class="blood-type-btn" onclick="selectRequestBloodType(this, 'B-')">B-</div>
                                                    <div class="blood-type-btn" onclick="selectRequestBloodType(this, 'B+')">B+</div>
                                                    <div class="blood-type-btn" onclick="selectRequestBloodType(this, 'AB-')">AB-</div>
                                                    <div class="blood-type-btn" onclick="selectRequestBloodType(this, 'AB+')">AB+</div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-floating">
                                                    <select class="form-control" id="bloodProduct" required>
                                                        <option value="">Select Blood Product</option>
                                                        <option value="whole">Whole Blood</option>
                                                        <option value="red">Red Blood Cells</option>
                                                        <option value="plasma">Plasma</option>
                                                        <option value="platelets">Platelets</option>
                                                        <option value="cryoprecipitate">Cryoprecipitate</option>
                                                    </select>
                                                    <label for="bloodProduct">Blood Product Type</label>
                                                </div>
                                                <div class="form-floating">
                                                    <input type="number" class="form-control" id="unitsNeeded" min="1" placeholder="Units Needed" required>
                                                    <label for="unitsNeeded">Number of Units Needed</label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-floating">
                                                    <input type="date" class="form-control" id="neededBy" required>
                                                    <label for="neededBy">Needed By Date</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-floating">
                                                    <select class="form-control" id="urgency" required>
                                                        <option value="">Select Urgency</option>
                                                        <option value="routine">Routine (7+ days)</option>
                                                        <option value="urgent">Urgent (24-72 hours)</option>
                                                        <option value="stat">STAT (Immediate)</option>
                                                    </select>
                                                    <label for="urgency">Request Urgency</label>
                                                </div>
                                            </div>
                                        </div>

                                        <h5 class="mt-4 mb-3">Hospital/Facility Information</h5>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-floating">
                                                    <input type="text" class="form-control" id="hospitalName" placeholder="Hospital Name" required>
                                                    <label for="hospitalName">Hospital/Facility Name</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-floating">
                                                    <input type="text" class="form-control" id="department" placeholder="Department">
                                                    <label for="department">Department/Unit</label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-floating">
                                            <textarea class="form-control" id="hospitalAddress" placeholder="Hospital Address" style="height: 80px;" required></textarea>
                                            <label for="hospitalAddress">Hospital Address</label>
                                        </div>

                                        <h5 class="mt-4 mb-3">Contact Information</h5>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-floating">
                                                    <input type="text" class="form-control" id="contactName" placeholder="Contact Name" required>
                                                    <label for="contactName">Contact Person Name</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-floating">
                                                    <input type="text" class="form-control" id="contactTitle" placeholder="Contact Title">
                                                    <label for="contactTitle">Title/Position</label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-floating">
                                                    <input type="tel" class="form-control" id="contactPhone" placeholder="Contact Phone" required>
                                                    <label for="contactPhone">Phone Number</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-floating">
                                                    <input type="email" class="form-control" id="contactEmail" placeholder="Contact Email" required>
                                                    <label for="contactEmail">Email Address</label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-floating">
                                            <textarea class="form-control" id="additionalInfo" placeholder="Additional Information" style="height: 100px;"></textarea>
                                            <label for="additionalInfo">Additional Information/Special Requirements</label>
                                        </div>

                                        <div class="form-check mb-3">
                                            <input class="form-check-input" type="checkbox" id="authorization" required>
                                            <label class="form-check-label" for="authorization">
                                                I am authorized to request blood products for this patient and facility
                                            </label>
                                        </div>

                                        <button type="submit" class="btn btn-primary btn-lg w-100">
                                            <i class="fas fa-paper-plane me-2"></i>Submit Blood Request
                                        </button>
                                    </form>
                                </div>
                            </div>

                            <div class="col-lg-4">
                                <div class="material-card">
                                    <h4>Emergency Contacts</h4>
                                    <div class="mb-3">
                                        <h6 class="text-danger">24/7 Emergency Line</h6>
                                        <p class="mb-1"><i class="fas fa-phone me-2"></i><strong>1-800-EMERGENCY</strong></p>
                                        <small class="text-muted">For immediate blood needs</small>
                                    </div>
                                    <div class="mb-3">
                                        <h6>Blood Bank Coordinator</h6>
                                        <p class="mb-1"><i class="fas fa-phone me-2"></i>(555) 123-4567</p>
                                        <small class="text-muted">Mon-Fri, 8AM-6PM</small>
                                    </div>
                                    <div>
                                        <h6>After Hours</h6>
                                        <p class="mb-1"><i class="fas fa-phone me-2"></i>(555) 123-4568</p>
                                        <small class="text-muted">Weekends & Holidays</small>
                                    </div>
                                </div>

                                <div class="material-card mt-4">
                                    <h4>Current Inventory Status</h4>
                                    <div class="inventory-status">
                                        <div class="d-flex justify-content-between align-items-center mb-2">
                                            <span>O- (Universal)</span>
                                            <span class="badge bg-warning">Low</span>
                                        </div>
                                        <div class="d-flex justify-content-between align-items-center mb-2">
                                            <span>O+</span>
                                            <span class="badge bg-success">Good</span>
                                        </div>
                                        <div class="d-flex justify-content-between align-items-center mb-2">
                                            <span>A-</span>
                                            <span class="badge bg-danger">Critical</span>
                                        </div>
                                        <div class="d-flex justify-content-between align-items-center mb-2">
                                            <span>A+</span>
                                            <span class="badge bg-success">Good</span>
                                        </div>
                                        <div class="d-flex justify-content-between align-items-center mb-2">
                                            <span>B-</span>
                                            <span class="badge bg-warning">Low</span>
                                        </div>
                                        <div class="d-flex justify-content-between align-items-center mb-2">
                                            <span>B+</span>
                                            <span class="badge bg-success">Good</span>
                                        </div>
                                        <div class="d-flex justify-content-between align-items-center mb-2">
                                            <span>AB-</span>
                                            <span class="badge bg-success">Good</span>
                                        </div>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <span>AB+</span>
                                            <span class="badge bg-success">Good</span>
                                        </div>
                                    </div>
                                    <small class="text-muted mt-2 d-block">Last updated: 2 hours ago</small>
                                </div>

                                <div class="material-card mt-4 bg-light">
                                    <h5><i class="fas fa-clock text-danger me-2"></i>Processing Time</h5>
                                    <ul class="list-unstyled mb-0">
                                        <li><strong>Routine:</strong> 24-48 hours</li>
                                        <li><strong>Urgent:</strong> 2-6 hours</li>
                                        <li><strong>STAT:</strong> 30-60 minutes</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            `,

            locations: `
                <div class="page-header">
                    <div class="container">
                        <h1><i class="fas fa-map-marker-alt me-3"></i>Donation Locations</h1>
                        <p class="lead">Find a convenient location near you to donate blood</p>
                    </div>
                </div>

                <section class="py-5">
                    <div class="container">
                        <!-- Search Section -->
                        <div class="row mb-5">
                            <div class="col-lg-8 mx-auto">
                                <div class="material-card">
                                    <h3 class="text-center mb-4">Find Nearby Locations</h3>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-floating mb-3">
                                                <input type="text" class="form-control" id="citySearch" placeholder="Enter your city">
                                                <label for="citySearch">City or ZIP Code</label>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-floating mb-3">
                                                <select class="form-control" id="radiusSelect">
                                                    <option value="5">5 miles</option>
                                                    <option value="10" selected>10 miles</option>
                                                    <option value="25">25 miles</option>
                                                    <option value="50">50 miles</option>
                                                </select>
                                                <label for="radiusSelect">Search Radius</label>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <button class="btn btn-primary h-100 w-100" onclick="searchLocations()">
                                                <i class="fas fa-search"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Map Section -->
                        <div class="row mb-5">
                            <div class="col-12">
                                <div class="map-container">
                                    <div class="text-center">
                                        <i class="fas fa-map fa-3x mb-3" style="color: var(--primary-red);"></i>
                                        <h4>Interactive Map</h4>
                                        <p>Map integration would display donation center locations here</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Location Cards -->
                        <div class="row">
                            <div class="col-lg-6 mb-4">
                                <div class="location-card">
                                    <div class="d-flex justify-content-between align-items-start mb-3">
                                        <h4 class="text-primary">
                                            <i class="fas fa-hospital me-2"></i>Downtown Medical Center
                                        </h4>
                                        <span class="badge bg-success">Open Now</span>
                                    </div>
                                    <div class="mb-3">
                                        <p class="mb-2"><i class="fas fa-map-marker-alt me-2 text-muted"></i>123 Health Street, Medical District, NY 10001</p>
                                        <p class="mb-2"><i class="fas fa-phone me-2 text-muted"></i>(555) 123-4567</p>
                                        <p class="mb-0"><i class="fas fa-route me-2 text-muted"></i>2.3 miles away</p>
                                    </div>
                                    <div class="location-hours">
                                        <h6><i class="fas fa-clock me-2"></i>Hours of Operation</h6>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <p class="mb-1"><strong>Monday - Friday:</strong> 7:00 AM - 7:00 PM</p>
                                                <p class="mb-1"><strong>Saturday:</strong> 8:00 AM - 5:00 PM</p>
                                                <p class="mb-0"><strong>Sunday:</strong> 10:00 AM - 4:00 PM</p>
                                            </div>
                                            <div class="col-md-6">
                                                <p class="mb-1"><strong>Services:</strong></p>
                                                <p class="mb-0">• Whole Blood Donation<br>• Platelet Donation<br>• Plasma Donation</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mt-3">
                                        <button class="btn btn-primary me-2" onclick="scheduleAppointment('downtown')">
                                            <i class="fas fa-calendar me-2"></i>Schedule Appointment
                                        </button>
                                        <button class="btn btn-outline-primary">
                                            <i class="fas fa-directions me-2"></i>Get Directions
                                        </button>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6 mb-4">
                                <div class="location-card">
                                    <div class="d-flex justify-content-between align-items-start mb-3">
                                        <h4 class="text-primary">
                                            <i class="fas fa-hospital me-2"></i>Westside Community Center
                                        </h4>
                                        <span class="badge bg-warning text-dark">Closes Soon</span>
                                    </div>
                                    <div class="mb-3">
                                        <p class="mb-2"><i class="fas fa-map-marker-alt me-2 text-muted"></i>456 Community Blvd, Westside, NY 10002</p>
                                        <p class="mb-2"><i class="fas fa-phone me-2 text-muted"></i>(555) 234-5678</p>
                                        <p class="mb-0"><i class="fas fa-route me-2 text-muted"></i>4.7 miles away</p>
                                    </div>
                                    <div class="location-hours">
                                        <h6><i class="fas fa-clock me-2"></i>Hours of Operation</h6>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <p class="mb-1"><strong>Monday - Thursday:</strong> 9:00 AM - 6:00 PM</p>
                                                <p class="mb-1"><strong>Friday:</strong> 9:00 AM - 8:00 PM</p>
                                                <p class="mb-0"><strong>Weekends:</strong> 9:00 AM - 3:00 PM</p>
                                            </div>
                                            <div class="col-md-6">
                                                <p class="mb-1"><strong>Services:</strong></p>
                                                <p class="mb-0">• Whole Blood Donation<br>• Community Health Screenings<br>• Educational Programs</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mt-3">
                                        <button class="btn btn-primary me-2" onclick="scheduleAppointment('westside')">
                                            <i class="fas fa-calendar me-2"></i>Schedule Appointment
                                        </button>
                                        <button class="btn btn-outline-primary">
                                            <i class="fas fa-directions me-2"></i>Get Directions
                                        </button>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6 mb-4">
                                <div class="location-card">
                                    <div class="d-flex justify-content-between align-items-start mb-3">
                                        <h4 class="text-primary">
                                            <i class="fas fa-truck me-2"></i>Mobile Unit - University Campus
                                        </h4>
                                        <span class="badge bg-info">Mobile</span>
                                    </div>
                                    <div class="mb-3">
                                        <p class="mb-2"><i class="fas fa-map-marker-alt me-2 text-muted"></i>State University Student Center Parking Lot</p>
                                        <p class="mb-2"><i class="fas fa-phone me-2 text-muted"></i>(555) 345-6789</p>
                                        <p class="mb-0"><i class="fas fa-route me-2 text-muted"></i>6.1 miles away</p>
                                    </div>
                                    <div class="location-hours">
                                        <h6><i class="fas fa-clock me-2"></i>Schedule (This Week)</h6>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <p class="mb-1"><strong>Tuesday:</strong> 10:00 AM - 4:00 PM</p>
                                                <p class="mb-1"><strong>Wednesday:</strong> 11:00 AM - 5:00 PM</p>
                                                <p class="mb-0"><strong>Thursday:</strong> 9:00 AM - 3:00 PM</p>
                                            </div>
                                            <div class="col-md-6">
                                                <p class="mb-1"><strong>Special Event:</strong></p>
                                                <p class="mb-0">Campus Blood Drive Week<br>Extra incentives available</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mt-3">
                                        <button class="btn btn-primary me-2" onclick="scheduleAppointment('mobile')">
                                            <i class="fas fa-calendar me-2"></i>Schedule Appointment
                                        </button>
                                        <button class="btn btn-outline-primary">
                                            <i class="fas fa-bell me-2"></i>Get Alerts
                                        </button>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6 mb-4">
                                <div class="location-card">
                                    <div class="d-flex justify-content-between align-items-start mb-3">
                                        <h4 class="text-primary">
                                            <i class="fas fa-hospital me-2"></i>Eastside Wellness Center
                                        </h4>
                                        <span class="badge bg-secondary">Closed</span>
                                    </div>
                                    <div class="mb-3">
                                        <p class="mb-2"><i class="fas fa-map-marker-alt me-2 text-muted"></i>789 Wellness Way, Eastside, NY 10003</p>
                                        <p class="mb-2"><i class="fas fa-phone me-2 text-muted"></i>(555) 456-7890</p>
                                        <p class="mb-0"><i class="fas fa-route me-2 text-muted"></i>8.2 miles away</p>
                                    </div>
                                    <div class="location-hours">
                                        <h6><i class="fas fa-clock me-2"></i>Hours of Operation</h6>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <p class="mb-1"><strong>Monday - Friday:</strong> 8:00 AM - 6:00 PM</p>
                                                <p class="mb-1"><strong>Saturday:</strong> 9:00 AM - 2:00 PM</p>
                                                <p class="mb-0"><strong>Sunday:</strong> Closed</p>
                                            </div>
                                            <div class="col-md-6">
                                                <p class="mb-1"><strong>Services:</strong></p>
                                                <p class="mb-0">• Whole Blood Donation<br>• Platelet Donation<br>• Health Consultations</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mt-3">
                                        <button class="btn btn-primary me-2" onclick="scheduleAppointment('eastside')">
                                            <i class="fas fa-calendar me-2"></i>Schedule Appointment
                                        </button>
                                        <button class="btn btn-outline-primary">
                                            <i class="fas fa-directions me-2"></i>Get Directions
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Additional Info -->
                        <div class="row mt-5">
                            <div class="col-lg-8 mx-auto">
                                <div class="material-card text-center">
                                    <h3>Can't Find a Location?</h3>
                                    <p class="mb-4">We're constantly expanding our network. Let us know if you'd like a donation center in your area, or check out our mobile unit schedule for temporary locations.</p>
                                    <button class="btn btn-primary me-3" onclick="showPage('contact')">
                                        <i class="fas fa-envelope me-2"></i>Contact Us
                                    </button>
                                    <button class="btn btn-outline-primary">
                                        <i class="fas fa-truck me-2"></i>Mobile Unit Schedule
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            `,

            contact: `
                <div class="page-header">
                    <div class="container">
                        <h1><i class="fas fa-envelope me-3"></i>Contact Us</h1>
                        <p class="lead">We're here to help 24/7. Reach out to us anytime.</p>
                    </div>
                </div>

                <section class="py-5">
                    <div class="container">
                        <div class="row">
                            <!-- Contact Information -->
                            <div class="col-lg-4 mb-5">
                                <div class="contact-info-card">
                                    <h3 class="mb-4"><i class="fas fa-info-circle me-2"></i>Get In Touch</h3>
                                    
                                    <div class="contact-method">
                                        <div class="d-flex align-items-center mb-2">
                                            <i class="fas fa-phone fa-2x me-3"></i>
                                            <div>
                                                <h5>Phone Support</h5>
                                                <p class="mb-0">Available 24/7 for emergencies</p>
                                            </div>
                                        </div>
                                        <p class="ms-5"><strong>Main Line:</strong> 1-800-LIFE-BLOOD<br>
                                        <strong>Emergency:</strong> 1-800-911-BLOOD</p>
                                    </div>

                                    <div class="contact-method">
                                        <div class="d-flex align-items-center mb-2">
                                            <i class="fas fa-envelope fa-2x me-3"></i>
                                            <div>
                                                <h5>Email Support</h5>
                                                <p class="mb-0">Response within 2 hours</p>
                                            </div>
                                        </div>
                                        <p class="ms-5"><strong>General:</strong> info@lifeblood.org<br>
                                        <strong>Donations:</strong> donate@lifeblood.org<br>
                                        <strong>Emergency:</strong> urgent@lifeblood.org</p>
                                    </div>

                                    <div class="contact-method">
                                        <div class="d-flex align-items-center mb-2">
                                            <i class="fas fa-map-marker-alt fa-2x me-3"></i>
                                            <div>
                                                <h5>Headquarters</h5>
                                                <p class="mb-0">Visit us in person</p>
                                            </div>
                                        </div>
                                        <p class="ms-5">123 Health Street<br>
                                        Medical District<br>
                                        New York, NY 10001</p>
                                    </div>

                                    <div class="contact-method">
                                        <div class="d-flex align-items-center mb-2">
                                            <i class="fas fa-comments fa-2x me-3"></i>
                                            <div>
                                                <h5>Live Chat</h5>
                                                <p class="mb-0">Instant assistance online</p>
                                            </div>
                                        </div>
                                        <button class="btn btn-light ms-5" onclick="openLiveChat()">
                                            <i class="fas fa-comment-dots me-2"></i>Start Chat
                                        </button>
                                    </div>
                                </div>
                            </div>

                            <!-- Contact Form -->
                            <div class="col-lg-8">
                                <div class="material-card">
                                    <h3 class="mb-4">Send Us a Message</h3>
                                    <form id="contactForm">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-floating mb-3">
                                                    <input type="text" class="form-control" id="contactFirstName" placeholder="First Name" required>
                                                    <label for="contactFirstName">First Name</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-floating mb-3">
                                                    <input type="text" class="form-control" id="contactLastName" placeholder="Last Name" required>
                                                    <label for="contactLastName">Last Name</label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-floating mb-3">
                                                    <input type="email" class="form-control" id="contactEmail" placeholder="Email" required>
                                                    <label for="contactEmail">Email Address</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-floating mb-3">
                                                    <input type="tel" class="form-control" id="contactPhone" placeholder="Phone">
                                                    <label for="contactPhone">Phone Number (Optional)</label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-floating mb-3">
                                            <select class="form-control" id="contactSubject" required>
                                                <option value="">Select a topic...</option>
                                                <option value="donation">Blood Donation Questions</option>
                                                <option value="request">Blood Request</option>
                                                <option value="appointment">Appointment Scheduling</option>
                                                <option value="location">Location Information</option>
                                                <option value="medical">Medical Questions</option>
                                                <option value="partnership">Partnership Opportunities</option>
                                                <option value="feedback">Feedback/Suggestions</option>
                                                <option value="emergency">Emergency Request</option>
                                                <option value="other">Other</option>
                                            </select>
                                            <label for="contactSubject">Subject</label>
                                        </div>

                                        <div class="form-floating mb-4">
                                            <textarea class="form-control" id="contactMessage" placeholder="Your message" style="height: 120px;" required></textarea>
                                            <label for="contactMessage">Your Message</label>
                                        </div>

                                        <div class="mb-3">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="contactNewsletter">
                                                <label class="form-check-label" for="contactNewsletter">
                                                    Subscribe to our newsletter for updates and donation reminders
                                                </label>
                                            </div>
                                        </div>

                                        <button type="submit" class="btn btn-primary btn-lg">
                                            <i class="fas fa-paper-plane me-2"></i>Send Message
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <!-- FAQ Section -->
                        <div class="row mt-5">
                            <div class="col-12">
                                <h2 class="text-center mb-5">Frequently Asked Questions</h2>
                                <div class="row">
                                    <div class="col-lg-6 mb-4">
                                        <div class="material-card">
                                            <h5><i class="fas fa-question-circle me-2 text-primary"></i>How often can I donate blood?</h5>
                                            <p>You can donate whole blood every 56 days (8 weeks). Platelet donations can be made every 7 days, up to 24 times per year. Plasma donations can be made twice per week.</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 mb-4">
                                        <div class="material-card">
                                            <h5><i class="fas fa-question-circle me-2 text-primary"></i>What should I eat before donating?</h5>
                                            <p>Eat a healthy meal within 4 hours of donation. Include iron-rich foods like spinach, red meat, or beans. Avoid fatty foods and stay well-hydrated by drinking plenty of water.</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 mb-4">
                                        <div class="material-card">
                                            <h5><i class="fas fa-question-circle me-2 text-primary"></i>How long does the donation process take?</h5>
                                            <p>The entire process takes about 45-60 minutes, including registration, health screening, and the actual donation. The blood draw itself only takes 8-10 minutes.</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 mb-4">
                                        <div class="material-card">
                                            <h5><i class="fas fa-question-circle me-2 text-primary"></i>What happens to my blood after donation?</h5>
                                            <p>Your blood is tested for safety, then separated into components (red cells, plasma, platelets). Each component can help different patients, meaning one donation can save up to three lives.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Emergency Contact -->
                        <div class="row mt-5">
                            <div class="col-lg-8 mx-auto">
                                <div class="material-card text-center" style="border-left: 4px solid #dc2626;">
                                    <h3 class="text-danger">Emergency Blood Requests</h3>
                                    <p class="mb-4">If you need blood urgently for a patient, please contact our emergency line immediately. We have protocols in place for critical situations and can expedite the process.</p>
                                    <div class="d-flex justify-content-center gap-3 flex-wrap">
                                        <a href="tel:1-800-911-BLOOD" class="btn btn-danger btn-lg">
                                            <i class="fas fa-phone me-2"></i>1-800-911-BLOOD
                                        </a>
                                        <a href="mailto:urgent@lifeblood.org" class="btn btn-outline-danger btn-lg">
                                            <i class="fas fa-envelope me-2"></i>urgent@lifeblood.org
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            `
        
        
        }
       // Navigation function
       function showPage(page) {
            const content = pages[page];
            if (content) {
                document.getElementById('pageContent').innerHTML = content;
                
                // Update active nav link
                document.querySelectorAll('.nav-link').forEach(link => {
                    link.classList.remove('active');
                });
                
                // Find and activate the correct nav link
                const activeLink = document.querySelector(`[onclick="showPage('${page}')"]`);
                if (activeLink && activeLink.classList.contains('nav-link')) {
                    activeLink.classList.add('active');
                }
                
                // Scroll to top
                window.scrollTo({ top: 0, behavior: 'smooth' });
            } else {
                document.getElementById('pageContent').innerHTML = `
                    <div class="container py-5">
                        <div class="text-center">
                            <h2>Page Coming Soon</h2>
                            <p>This page is currently under development.</p>
                            <button class="btn btn-primary" onclick="showPage('locations')">
                                Visit Locations
                            </button>
                        </div>
                    </div>
                `;
            }
        }

        // Utility functions for interactive elements
        function searchLocations() {
            const city = document.getElementById('citySearch').value;
            const radius = document.getElementById('radiusSelect').value;
            alert(`Searching for locations within ${radius} miles of ${city || 'your location'}...`);
        }

        function scheduleAppointment(location) {
            alert(`Redirecting to appointment scheduling for ${location} location...`);
        }

        function openLiveChat() {
            alert('Live chat would open here in a real implementation.');
        }

        // Form submission handlers
        document.addEventListener('DOMContentLoaded', function() {
            // Contact form submission
            const contactForm = document.getElementById('contactForm');
            if (contactForm) {
                contactForm.addEventListener('submit', function(e) {
                    e.preventDefault();
                    alert('Thank you for your message! We will respond within 2 hours.');
                    contactForm.reset();
                });
            }
        });

        // Load default page (locations)
        document.addEventListener('DOMContentLoaded', function() {
            showPage('locations');
        });
    </script>

</body>
</html>