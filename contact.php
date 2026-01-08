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
    </div>    

    <?php
        include('common/footer.php');
    ?>

    <!-- Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    
</body>
</html>