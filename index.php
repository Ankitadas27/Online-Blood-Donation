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
    
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <?php
        include('common/header.php');
    ?>    

    <!-- Page Content Container -->
    <div id="pageContent" class="page-content">
        <!-- Content will be dynamically loaded here -->
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
    </div>

    <?php
        include('common/footer.php');
    ?>

    <!-- Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    
</body>
</html>