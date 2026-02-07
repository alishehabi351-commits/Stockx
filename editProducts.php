<?php
    include_once("config.php");

    if(empty($_SESSION['username']) || $_SESSION['is_admin'] != "true"){
        header("Location: login.php");
    }

    $id = $_GET['id'];

    $sql = "SELECT * FROM products WHERE id = :id";

    $selectProduct = $conn->prepare($sql);
    $selectProduct->bindParam(":id", $id);
    $selectProduct->execute();

    $product_data = $selectProduct->fetch();
?>


    <head>
        <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">
    </head>

   

    <div class="container-fluid">
        <div class="row">
        <?php include "navbar.php"; ?>
        <?php include "sidebar.php"; ?>

            <div class="col-10"> 
                <div class="container mt-5">
                    <div class="row">
                        <div class="col">
                            <h2 class="mt-5">Edit Products</h2>
                            <form action="updateProduct.php" method="POST">
                                <input type="text" name="id" class="form-control mb-3"
                                value="<?php echo $product_data['id']; ?>" readonly>

                                <input type="text" name="name" class="form-control mb-3"
                                value="<?php echo $product_data['name']; ?>" placeholder="Name">

                                <input type="text" name="type" class="form-control mb-3"
                                value="<?php echo $product_data['type']; ?>" placeholder="Type">

                                <input type="text" name="price" class="form-control mb-3"
                                value="<?php echo $product_data['price']; ?>" placeholder="Price">

                                

                                

                                <button type="submit" name="submit" class="btn btn-success">Update</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

