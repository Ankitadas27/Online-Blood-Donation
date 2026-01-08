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
        <!-- Content will be dynamically loaded here -->
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
    </div>    

    <?php
        include('common/footer.php');
    ?>

    <!-- Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    
</body>
</html>