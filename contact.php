<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Stock X</title>
    
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

    
   
    <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">

    <link rel="stylesheet" href="contact.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body class="sidebar-close">
<?php include "config.php"; ?>

    
    <?php include "navbar.php";?>
    
   
    
    <?php include "sidebar.php";?>


    <!-- Contact Section -->
    <div class="container my-5">
        <h2 class="text-center mb-4">Contact Us</h2>
        <div class="row">
            <!-- Contact Form -->
            <div class="col-md-6 mb-4">
                <form>
                    <div class="mb-3">
                        <label for="name" class="form-label">Full Name</label>
                        <input type="text" class="form-control" id="name" placeholder="Your Name" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="email" placeholder="name@example.com" required>
                    </div>
                    <div class="mb-3">
                        <label for="subject" class="form-label">Subject</label>
                        <input type="text" class="form-control" id="subject" placeholder="Subject" required>
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label">Message</label>
                        <textarea class="form-control" id="message" rows="5" placeholder="Your message..." required></textarea>
                    </div>
                    <button type="submit" class="btn btn-success">Send Message</button>
                </form>
            </div>

            <!-- Contact Information -->
            <div class="col-md-6">
                <h4>Our Office</h4>
                <p>
                    <i class="fa-solid fa-location-dot me-2"></i>
                    1046 Woodward Avenue, Detroit
                </p>
                <p>
                    <i class="fa-solid fa-phone me-2"></i>
                    +389 77 678 901
                </p>
                <p>
                    <i class="fa-solid fa-envelope me-2"></i>
                    Service@stockxkicks.com
                </p>
                <h4 class="mt-4">Follow Us</h4>
                <a href="https://facebook.com" class="me-3 facebook"><i class="fab fa-facebook fa-2x"></i></a>
                <a href="https://x.com/stockx" class="me-3"><i class="fab fa-twitter fa-2x"></i></a>
                <a href="https://instagram.com/stockx" class="me-3"><i class="fab fa-instagram fa-2x"></i></a>
                <div class="container mt-4">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2949.481349833141!2d-83.0478026524054!3d42.33225985506828!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x883b2d30271a5e5f%3A0xcf8220707ea7bab3!2s1046%20Woodward%20Ave%2C%20Detroit%2C%20MI%2048226%2C%20USA!5e0!3m2!1sen!2smk!4v1741800641281!5m2!1sen!2smk" width="400" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>


              
                
            </div>
        </div>
    </div>

    
    <div class="container">
        <footer class="py-5">
            <div class="row">
                <div class="col-6 col-md-2 mb-3">
                    <h5>Main</h5>
                    <ul class="nav flex-column">
                        <li class="nav-item mb-2"><a href="index.php" class="nav-link p-0 text-body-secondary">Home</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Features</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Pricing</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">FAQs</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">About</a></li>
                    </ul>
                </div>

                <div class="col-6 col-md-2 mb-3">
                    <h5>Products</h5>
                    <ul class="nav flex-column">
                        <li class="nav-item mb-2"><a href="shoes.php" class="nav-link p-0 text-body-secondary">Shoes</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Shirts</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">hoodies</a></li>
                        <li class="nav-item mb-2"><a href="jackets.php" class="nav-link p-0 text-body-secondary">jackets</a></li>
                    </ul>
                </div>

                <div class="col-6 col-md-2 mb-3">
                    <h5>Contact</h5>
                    <ul class="nav flex-column">
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Warehouse Location</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Hq Location</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Terms & Service</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Email Support</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">FAQ's</a></li>
                    </ul>
                </div>

                <div class="col-md-5 offset-md-1 mb-3">
                    <form>
                        <h5>Subscribe to our newsletter</h5>
                        <p>Receive Emails about new products each time they arrive.</p>
                        <div class="d-flex flex-column flex-sm-row w-100 gap-2">
                            <label for="newsletter1" class="visually-hidden">Email address</label>
                            <input id="newsletter1" type="email" class="form-control" placeholder="Email address" required>
                            <button class="btn btn-success" type="submit">Subscribe</button>
                        </div>
                    </form>
                </div>
            </div>

            <div class="d-flex flex-column flex-sm-row justify-content-between py-4 my-4 border-top">
                <p>&copy; 2026 StockX, Inc. All rights reserved.</p>
                <ul class="list-unstyled d-flex">
                    <li class="ms-3"><a class="text-body-secondary" href="#"><i class="fab fa-facebook fa-lg"></i></a></li>
                    <li class="ms-3"><a class="text-body-secondary" href="#"><i class="fab fa-twitter fa-lg"></i></a></li>
                    <li class="ms-3"><a class="text-body-secondary" href="#"><i class="fab fa-instagram fa-lg"></i></a></li>
                    <li class="ms-3"><a class="text-body-secondary" href="#"><i class="fab fa-linkedin fa-lg"></i></a></li>
                </ul>
            </div>
        </footer>
    </div>
    
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</body>
</html>
