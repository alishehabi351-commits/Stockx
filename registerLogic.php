<?php 

    include_once("config.php");

    if(isset($_POST['submit'])) {
        
        $username = $_POST['username'];
        $email = $_POST['email'];

        $tempPass = $_POST['password'];
        $password = password_hash(  $tempPass , PASSWORD_DEFAULT);
        
       
        $confirmTempPass = $_POST['confirm_password'];
        $confirmPassword = password_hash(  $confirmTempPass , PASSWORD_DEFAULT);





        if(
            
            empty($username) || 
            empty($email)    || 
            empty($tempPass) || 
            empty($confirmTempPass)) {
                echo "Please fill all the fields!";
        }

        else {
            if($tempPass != $confirmTempPass) {
                echo "Passwords do not match";
                return;
            }

            $sql = "INSERT INTO users (username, email, password, confirm_password) 
            
            VALUES(:username, :email, :password, :confirm_password)";

            $insertUser = $conn->prepare($sql);

           
            $insertUser -> bindParam(':username' , $username);
            $insertUser -> bindParam(':email' , $email);
            $insertUser -> bindParam(':password' , $password);
            $insertUser -> bindParam(':confirm_password' , $confirmPassword);


            $insertUser -> execute();

            header("Location:login.php");





        }

    }

?>