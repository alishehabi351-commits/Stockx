<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buy Page</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="buypage.css?v<?php echo time(); ?>">

</head>

<body class="sidebar-close">
    
    <?php include "config.php"; ?>
    <?php include "navbar.php"; ?>
    <?php include "sidebar.php"; ?>



    <?php 
    if(!isset($_GET['id']) || empty($_GET['id'])){
    die("No product selected for checkout.");
}


    $product_id = $_GET['id'];

   
    $sql = "SELECT * FROM products WHERE id = :id";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':id', $product_id);
    $stmt->execute();
    $product = $stmt->fetch();

    if(!$product){
        die("Product not found.");
    }

    $productName = $product['name'];
    $price = $product['price'];
    $image = $product['image'];
    $productType= $product['type']
?>
   
    <div class="container my-5 buy-wrapper">

    <!-- BREADCRUMB -->
    <nav class="breadcrumb-wrapper">
        <a href="index.php">Home</a>
        <span>/</span>
        <?php
        $allowedTypes = ['shoes', 'hoodies', 'jackets', 'tshirts', 'jerseys'];

        $link = in_array($productType, $allowedTypes)
            ? $productType 
            : 'other';
        ?>

        <a href="<?= $link ?>.php"><?= ucfirst($productType); ?></a>

        <span>/</span>
        <span class="active"><?= $productName ?></span>
    </nav>

    <div class="row g-5 align-items-start">

        <!-- PRODUCT IMAGE -->
        <div class="col-lg-6">
            <div class="product-image-card">
                
                <img src="Images/<?= $image ?>" alt="<?= $productName ?>">
            </div>

            
            <div class="image-info">
                <span>✔ Authenticity Guaranteed</span>
                <span>✔ Free Returns</span>
            </div>




        <?php if ($productType === 'shoes'):?>

            <select name="size" class="form-control wide mt-3">
                <option value="" disabled selected>
                    Select a size
                </option>
                
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="8.5">8.5</option>
                <option value="9">9</option>
                <option value="9.5">9.5</option>
                <option value="10">10</option>
                <option value="10.5">10.5</option>
                <option value="11">11</option>
            </select>
        <?php endif;?>


        
        <?php if ($productType === 'hoodies' || $productType === 'jackets' || $productType === 'tshirts' || $productType === 'jerseys'):?>

            <select name="size" class="form-control wide mt-3">
                <option value="" disabled selected>
                    Select a size
                </option>
                
                <option value="XS">XS</option>
                <option value="S">S</option>
                <option value="M">M</option>
                <option value="L">L</option>
                <option value="XL">XL</option>
                <option value="XXL">XXL</option>
                
            </select>
        <?php endif;?>   





         <?php if ($productType === 'watch'):?>

            <select name="size" class="form-control wide mt-3">
                <option value="" disabled selected>
                    Select a size
                </option>
                
                <option value="38mm">38mm</option>
                <option value="40mm">40mm</option>
                <option value="42mm">42mm</option>
                <option value="44mm">44mm</option>
                <option value="46mm">46mm</option>
                
            </select>
        <?php endif;?>

        <?php if ($productType === 'belt'):?>

            <select name="size" class="form-control wide mt-3">
                <option value="" disabled selected>
                    Select a size
                </option>
                
                <option value="70cm">70cm</option>
                <option value="80cm">80cm</option>
                <option value="90cm">90cm</option>
                <option value="100cm">100cm</option>
                
                
            </select>
        <?php endif;?>
    



            <!-- main -->
        </div>

        <!-- PRODUCT INFO -->
        <div class="col-lg-6">
            <div class="product-info-card">

                <h1 class="product-title"><?= $productName ?? "Product Name" ?></h1>


                <?php if($productType === "shoes"):?>
                <div class="product-meta">
                    <span>Size:</span>
                    <strong>US Men's 10</strong>
                </div>
                <?php endif;?>

            <?php if ($productType === 'hoodies' || $productType === 'jackets' || $productType === 'tshirts' || $productType === 'jerseys'):?>
                <div class="product-meta">
                    <span>Size:</span>
                    <strong>US Men's L</strong>
                </div>
                <?php endif;?>

                 <?php if($productType === "watch"):?>
                <div class="product-meta">
                    <span>Size:</span>
                    <strong>US Men's 42mm</strong>
                </div>
                <?php endif;?>   

                <?php if($productType === "belt"):?>
                <div class="product-meta">
                    <span>Size:</span>
                    <strong>US Men's 80cm</strong>
                </div>
                <?php endif;?>      





                <div class="product-price">
                    $<?= number_format($price ?? 120, 2) ?>
                </div>

                
                <div class="quick-stats">
                    <div>
                        <strong>Lowest Ask</strong>
                        <span>$<?= number_format($price ?? 120, 2) ?></span>
                    </div>
                    <div>
                        <strong>Last Sale</strong>
                        <span>$<?= number_format(($price ?? 120) - 5, 2) ?></span>
                    </div>
                    <div>
                        <strong>Release</strong>
                        <span>2025</span>
                    </div>
                </div>

                
                <a href="checkout.php?id=<?= $product['id']; ?>" class="buy-now-btn">
                    Buy Now
                </a>

                
                <div class="delivery-box">
                    <div>🚚 Ships in 1-3 business days</div>
                    <div>📦 Verified before delivery</div>
                </div>

                
                <div class="sell-info">
                    Sell Now for
                    <strong>$<?= number_format(max(($price ?? 0) - 10, 0), 2) ?></strong>
                    or Ask for More
                </div>

                
                <div class="trust-box">
                    <div class="trust-header">
                        Worry Free Purchasing
                        <span class="badge bg-primary">New</span>
                    </div>
                    <p>
                        Items are inspected and verified by our team to ensure authenticity
                        and condition before reaching you.
                    </p>
                </div>

                <div class="verified-text">
                    ✔ StockX Verified & Protected
                </div>

            </div>
        </div>

    </div>
</div>


    
    <footer class="footer bg-light text-center text-lg-start mt-auto">
        <div class="text-center p-3">
            © 2026 StockX
        </div>
    </footer>

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    <script src="sidebar.js"></script>
</body>

</html>
