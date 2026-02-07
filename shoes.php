    <!DOCTYPE html>
    <html lang="en">
    <head>
        
        <link rel="stylesheet" href="Shoes.css">
        
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Shoes</title>

        <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">

    </head>
    <body class="sidebar-close">
    <?php include_once 'config.php'; ?>
        
        <?php include "navbar.php";?>


        
        <?php include_once "sidebar.php"; ?>




        <div id="myCarousel" class="carousel slide mb-6" data-bs-ride="carousel">
            <div class="carousel-indicators">
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
            
            </div>
            <div class="carousel-inner">
            <div class="carousel-item active">
            <a href=""> <img src="Images/jordan jumpman banner.jpg" class="d-block w-100" alt="First slide"></a>
            </div>
            <div class="carousel-item">
            <a href="buypage.php?id=4"> <img src="Images/aj4 orchid banner.png" class="d-block w-100" alt="Second slide"> </a>
            </div>
            
            
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
            </button>
        </div>
        <div class="container my-5">
            <h2 class="text-center mb-4"></h2>
            <div class="row">
            

                <h1 class="text-center"> Trending Sneakers</h1>

                <a href="index.php" class="text-start"> <button class="hoverbtn text-end"> <p><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8"/>
                </svg>Go Back </p> </button> </a>

                

                <!-- Search -->
 <?php
  $search = $_GET['search'] ?? "";


 // SEARCH MODE
if ($search !== "") {

    $stmt = $conn->prepare("
        SELECT * FROM products
        WHERE name LIKE :search
           OR type LIKE :search
    ");

    $stmt->execute([
        ':search' => "%{$search}%"
    ]);

    $products = $stmt->fetchAll(PDO::FETCH_ASSOC);

    echo "<h3 class='mb-4'>
            Search results for \"" . htmlspecialchars($search) . "\"
          </h3>";

    if (empty($products)) {
        echo "<p>No products found.</p>";
    } else {

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
    }


  } else {


    
               
    $categories = ['shoes'];

foreach ($categories as $category) {

    $sql = "SELECT * FROM products WHERE type = ? ORDER BY id ASC ";
    $stmt = $conn->prepare($sql);
    $stmt->execute([$category]);
    $products = $stmt->fetchAll(PDO::FETCH_ASSOC);

    echo "<div class='category-section mb-5'>";
    echo "<h2 class='mb-4'>" . ucfirst($category) . "</h2>";
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

    
}
  }
?>
















                </div>



    

    <div class="container">
        <footer class="py-5">
        <div class="row">
            <div class="col-6 col-md-2 mb-3">
                
            <h5>Main</h5>
            <ul class="nav flex-column">
                <li class="nav-item mb-2"><a href="index.php" class="nav-link p-0 text-body-secondary">Home</a></li>
                <li class="nav-item mb-2"><a href="shipping.php" class="nav-link p-0 text-body-secondary">Features</a></li>
                <li class="nav-item mb-2"><a href="/shipping.php" class="nav-link p-0 text-body-secondary">Pricing</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">FAQs</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">About</a></li>
            </ul>
            </div>
    
            <div class="col-6 col-md-2 mb-3">
            <h5>Products</h5>
            <ul class="nav flex-column">
                <li class="nav-item mb-2"><a href="index.php" class="nav-link p-0 text-body-secondary">Home</a></li>
                <li class="nav-item mb-2"><a href="Shoes.php" class="nav-link p-0 text-body-secondary">Shoes</a></li>
                <li class="nav-item mb-2"><a href="tshirts.php" class="nav-link p-0 text-body-secondary">TShirts</a></li>
                <li class="nav-item mb-2"><a href="hoodies.php" class="nav-link p-0 text-body-secondary">Hoodies</a></li>
                <li class="nav-item mb-2"><a href="jackets.php" class="nav-link p-0 text-body-secondary">Jackets</a></li>
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