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
    </div>


    <?php
        include('common/footer.php');
    ?>

    <!-- Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    
</body>
</html>