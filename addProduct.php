<?php
    include_once("config.php");

    if(empty($_SESSION['username']) || $_SESSION['is_admin'] != "true"){
        header("Location: login.php");
    }

    if(isset($_POST['submit'])) {

        $product_name = $_POST['name'];
        $product_type = $_POST['type'];
        $product_price = $_POST['price'];
        $product_image = $_POST['image'];
        
        


          $sql = "INSERT INTO products (name , type , price , image )
    VALUES (:name , :type , :price , :image  ) ";

    $insertproduct = $conn->prepare($sql);

    $insertproduct->bindParam(":name", $product_name);
    $insertproduct->bindParam(":type", $product_type);
    $insertproduct->bindParam(":price", $product_price);
    $insertproduct->bindParam(":image", $product_image);
    

    $insertproduct->execute();

    header("Location:manageProducts.php");
    }

  
?>



    

    <div class="container-fluid">
        <div class="row">
            <?php include_once("navbar.php"); ?>
            <?php include_once("sidebar.php"); ?>

            <div class="col-10">
                <div class="container mt-5">
                    <div class="row">
                        <div class="col">
                            <h2 class="mt-5">Add product</h2>
                            <form action="" method="POST">
                                <input type="text" name="name" placeholder="Name" class="form-control mb-3">

                                <input type="text" name="type" placeholder="Type" class="form-control mb-3">

                                <input type="text" name="price" placeholder="Price" class="form-control mb-3">

                                

                                <input type="file" name="image"  class="form-control mb-3">

                                

                                <button type="submit" name="submit" class="btn btn-success">Add Product</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
