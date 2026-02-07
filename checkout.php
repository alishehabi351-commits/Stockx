


<?php include "config.php";?>
<?php include "navbar.php";?>
<?php include "sidebar.php";?>

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
?>






<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Checkout</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    
    <link rel="stylesheet" href="checkout.css">
</head>
<body>

<div class="container py-5">
    <div class="row g-4">

        <!-- LEFT COLUMN -->
        <div class="col-md-7">
            <div class="checkout-card">
                <h4 class="mb-4">Payment Details</h4>

                <form action="" method="POST">

                    <!-- Payment Method -->
                    <div class="mb-3">
                        <label class="form-label">Payment Method</label>

                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="payment_method" value="credit" checked>
                            <label class="form-check-label">Credit Card</label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="payment_method" value="debit">
                            <label class="form-check-label">Debit Card</label>
                        </div>
                    </div>

                    <!-- Card Info -->
                    <div class="mb-3">
                        <label class="form-label">Card Number</label>
                        <input type="text" name="card_number" class="form-control" placeholder="1234 5678 9012 3456" required>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Expiry Date</label>
                            <input type="text" name="expiry" class="form-control" placeholder="MM / YY" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">CVV</label>
                            <input type="password" name="cvv" class="form-control" placeholder="123" required>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Cardholder Name</label>
                        <input type="text" name="card_name" class="form-control" required>
                    </div>

                    <hr class="my-4">


                    <!-- Address -->
                <h5 class="mb-3">Billing Address</h5>

                <div class="mb-3">
                    <label class="form-label">Street Address</label>
                    <input type="text" name="address" class="form-control" placeholder="123 Main Street">
                </div>

                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label class="form-label">City</label>
                        <input type="text" name="city" class="form-control">
                    </div>

                    <div class="col-md-6 mb-3">
                        <label class="form-label">State</label>
                        <input type="text" name="state" class="form-control">
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label class="form-label">ZIP Code</label>
                        <input type="text" name="zip" class="form-control">
                    </div>

                    <div class="col-md-6 mb-3">
                        <label class="form-label">Country</label>
                        <input type="text" name="country" class="form-control">
                    </div>
                </div>



                    <button type="submit" class="btn btn-success w-100 mt-3">
                        Place Order
                    </button>
                </form>
            </div>
        </div>

        <!-- RIGHT COLUMN -->
        <div class="col-md-5">
            <div class="checkout-card">
                <h4 class="mb-4">Order Summary</h4>

                <!-- Image Space -->
                <div class="product-image mb-3">
                    Product Image
                     <img src="Images/<?= $image ?>" alt="<?= $productName ?>" class="img-fluid">
                </div>

                <div class="d-flex justify-content-between mb-2">
                    <span><?= $productName ?? "Product Name" ?></span>
                    <strong>$<?= number_format($price ?? 120, 2) ?></strong>
                </div>

                <div class="d-flex justify-content-between mb-2">
                    <span>Shipping</span>
                    <span>$10.00</span>
                </div>

                <hr>

                <div class="d-flex justify-content-between">
                    <strong>Total</strong>
                    <strong>
                        $<?= number_format(($price ?? 120) + 10, 2) ?>
                    </strong>
                </div>
            </div>
        </div>

    </div>
</div>

</body>
</html>
