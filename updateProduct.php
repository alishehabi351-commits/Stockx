<?php  

    include_once "config.php";

    if(isset($_POST['submit'])) {
        $id = $_POST ['id'];
        $name = $_POST ['name'];
        $type = $_POST ['type'];
        $price = $_POST ['price'];
        

        $sql = "UPDATE products SET id=:id , name=:name , type=:type , price=:price 
        WHERE id =:id";

        $updateProduct = $conn -> prepare ($sql);

        $updateProduct -> bindParam("id" , $id);
        $updateProduct -> bindParam("name" , $name);
        $updateProduct -> bindParam("type" , $type);
        $updateProduct -> bindParam("price" , $price);
        
    
        

        $updateProduct -> execute();

        header("Location:manageProducts.php");
        
    }
?>