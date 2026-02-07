<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>StockX Delivery Tracking</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">

    <link rel="stylesheet" href="deliverytracking.css">
</head>
<body class="sidebar-close">
<?php include_once 'config.php'; ?>
    
    <?php include "navbar.php";?>

    
    <?php include "sidebar.php"; ?>





    
    <section id="tracking" class="container my-5">
        <h2 class="text-center">Track Your Order</h2>
        <p class="text-center">Enter your order number to track your delivery status.</p>
        <div class="d-flex justify-content-center">
            <input type="text" class="form-control w-50 me-2" placeholder="Enter Order Number">
            <button class="btn btn-success">Track</button>
        </div>
    </section>
    
    
    <section class="container my-5">
        <h2 class="text-center">Why Choose StockX?</h2>
        <div class="row text-center">
            <div class="col-md-4"><h4>Fast Shipping</h4><p>Get your products delivered quickly.</p></div>
            <div class="col-md-4"><h4>Authenticity Guaranteed</h4><p>All items are verified for authenticity.</p></div>
            <div class="col-md-4"><h4>Secure Payments</h4><p>We ensure safe and secure transactions.</p></div>
        </div>
    </section>
    
    <!-- FAQ Section -->
    <section id="faq" class="container my-5">
        <h2 class="text-center">Frequently Asked Questions</h2>
        <div class="accordion" id="faqAccordion">
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button" data-bs-toggle="collapse" data-bs-target="#faq1">
                        How do I track my order?
                    </button>
                </h2>
                <div id="faq1" class="accordion-collapse collapse show">
                    <div class="accordion-body">Enter your order number above to get real-time tracking updates.</div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button" data-bs-toggle="collapse" data-bs-target="#faq2">
                        How long does shipping take?
                    </button>
                </h2>
                <div id="faq2" class="accordion-collapse collapse">
                    <div class="accordion-body">Shipping typically takes 3-7 business days, depending on your location.</div>
                </div>
            </div>
        </div>
    </section>
    
    
    <div class="container">
        <footer class="py-5">
          <div class="row">
            <div class="col-6 col-md-2 mb-3">
                
              <h5>Main</h5>
              <ul class="nav flex-column">
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Home</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Features</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Pricing</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">FAQs</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">About</a></li>
              </ul>
            </div>
      
            <div class="col-6 col-md-2 mb-3">
              <h5>Products</h5>
              <ul class="nav flex-column">
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Home</a></li>
                <li class="nav-item mb-2"><a href="shoes.php" class="nav-link p-0 text-body-secondary">Shoes</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Shirts</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">hoodies</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">jackets</a></li>
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
                  <input id="newsletter1" type="text" class="form-control" placeholder="Email address">
                  <button class="btn btn-success" type="button">Subscribe</button>
                </div>
              </form>
            </div>
          </div>
      
          <div class="d-flex flex-column flex-sm-row justify-content-between py-4 my-4 border-top">
            <p>&copy; 2026 StockX, Inc. All rights reserved.</p>
            <ul class="list-unstyled d-flex">
              <!-- icons -->
           
           
            
           
           
            </ul>


          </div>
        </footer>
      </div>

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>
