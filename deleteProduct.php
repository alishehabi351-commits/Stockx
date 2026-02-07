<?php 

    include("config.php");

    if(empty($_SESSION['username']) || $_SESSION['is_admin'] != 'true') {
        header("Location:login.php");
        exit;
    }

    

    $id = $_GET['id'];

    $sql = "DELETE FROM products WHERE id= :id";

    $prep = $conn->prepare($sql);

    $prep->bindParam(':id', $id);

    $prep -> execute();

    header("Location:manageProducts.php"); 
    exit;
   

    
?>