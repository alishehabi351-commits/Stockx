<?php
include_once("config.php");


if(isset($_POST['submit'])) {

    $username = trim($_POST['username']);
    $email = trim($_POST['email']);
    $password = $_POST['password'];

    
    if(empty($username) || empty($email) || empty($password)) {
        $_SESSION['error'] = "Please fill all the fields!";
        header("Location: login.php");
        exit;
    }

    
    $sql = "SELECT * FROM users WHERE username=:username AND email=:email";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':username', $username);
    $stmt->bindParam(':email', $email);
    $stmt->execute();
    $user = $stmt->fetch();

    if(!$user) {
        $_SESSION['error'] = "User does not exist!";
        header("Location: login.php");
        exit;
    }

    
    if(!password_verify($password, $user['password'])) {
        $_SESSION['error'] = "Incorrect password!";
        header("Location: login.php");
        exit;
    }

    // login successful
    $_SESSION['id'] = $user['id'];
    $_SESSION['username'] = $user['username'];
    $_SESSION['email'] = $user['email'];
    $_SESSION['is_admin'] = $user['is_admin'];

    header("Location: index.php");
    exit;
}
?>
