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
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
    <?php
        include('common/header.php');
    ?>    

    <!-- Page Content Container -->
    <div id="pageContent" class="page-content">
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
    </div>    

    <?php
        include('css/footer.php');
    ?>

    <!-- Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    
</body>
</html>