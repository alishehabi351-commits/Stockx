<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="jackets.css">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Other Products</title>
    <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">

</head>
<body class="sidebar-close">
<?php include_once 'config.php'; ?>
    

<?php include "navbar.php";?>

    
  <?php include "sidebar.php"; ?>


   

    <div id="singleImageCarousel" class="carousel slide" data-interval="false">
        <div class="carousel-inner">
            <div class="carousel-item active">
              <a href="#">  <img src="Images/discover banner.jpg" class="d-block w-100 singlebanner" alt="Your Image"></a>
            </div>
        </div>
    </div>








    <div class="container my-5">
        <div class="row">










            <h1 class="text-center">Other items</h1>

            <a href="index.php" class="text-start"> <button class="hoverbtn text-end"> <p><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8"/>
              </svg>Go Back </p> </button> </a>


    <?php
               
                $stmt = $conn->prepare("
    SELECT * FROM products
    WHERE type NOT IN ('shoes', 'hoodies', 'jackets', 'tshirts', 'jerseys')
    ORDER BY id ASC
");

$stmt->execute();
$products = $stmt->fetchAll(PDO::FETCH_ASSOC);

echo "<div class='category-section mb-5'>";
echo "<h2 class='mb-4'>Other Products</h2>";
echo "<div class='row g-4'>";

foreach ($products as $product) {

    echo "
    <div class='col-md-3'>
        <div class='product-card'>
            <img src='Images/" . htmlspecialchars($product['image']) . "' 
                 alt='" . htmlspecialchars($product['name']) . "'>

            <div class='product-card-body'>
                <div class='product-card-title'>
                    " . htmlspecialchars($product['name']) . "
                </div>

                <div class='product-card-price'>
                    $" . number_format($product['price'], 2) . "
                </div>

                <div class='product-card-btn'>
                    <a href='buypage.php?id=" . (int)$product['id'] . "'>
                        Buy Now
                    </a>
                </div>
            </div>
        </div>
    </div>";
}

echo "</div>";
echo "</div>";

?>
















</div>
</div>
</div>


<div class="container">
    <footer class="py-5">
      <div class="row">
        <div class="col-6 col-md-2 mb-3">
            
          <h5>Section</h5>
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
          <h5>Section</h5>
          <ul class="nav flex-column">
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Home</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Features</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Pricing</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">FAQs</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">About</a></li>
          </ul>
        </div>
  
        <div class="col-md-5 offset-md-1 mb-3">
          <form>
            <h5>Subscribe to our newsletter</h5>
            <p>Monthly digest of what's new and exciting from us.</p>
            <div class="d-flex flex-column flex-sm-row w-100 gap-2">
              <label for="newsletter1" class="visually-hidden">Email address</label>
              <input id="newsletter1" type="text" class="form-control" placeholder="Email address">
              <button class="btn btn-primary" type="button">Subscribe</button>
            </div>
          </form>
        </div>
      </div>
  
      <div class="d-flex flex-column flex-sm-row justify-content-between py-4 my-4 border-top">
        <p>&copy; 2026 Company, Inc. All rights reserved.</p>
        <ul class="list-unstyled d-flex">
          <!-- icons -->
       
       
        
       
       
        </ul>


      </div>
    </footer>
  </div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>

</body>
</html>