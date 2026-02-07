<?php  

include_once "config.php";

if(isset($_POST['submit'])) {
    $id = $_POST['id'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $current_password = $_POST['current_password'] ?? '';
    $new_password = $_POST['new_password'] ?? '';

    $sql = "SELECT * FROM users WHERE id = :id";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(":id", $id);
    $stmt->execute();
    $user = $stmt->fetch();

    if(!$user){
        die("User not found.");
    }

    // Base update SQL (username + email)
    $sql = "UPDATE users SET username = :username, email = :email";

    // If user wants to change password
    if(!empty($current_password) && !empty($new_password)) {
        if(password_verify($current_password, $user['password'])) {
            $hashed_password = password_hash($new_password, PASSWORD_DEFAULT);
            $sql .= ", password = :password";
        } else {
            die("Current password is incorrect.");
        }
    }

    $sql .= " WHERE id = :id";

    $updateUser = $conn->prepare($sql);
    $updateUser->bindParam(":id", $id);
    $updateUser->bindParam(":username", $username);
    $updateUser->bindParam(":email", $email);

    if(!empty($current_password) && !empty($new_password)) {
        $updateUser->bindParam(":password", $hashed_password);
    }

    $updateUser->execute();

    if(isset($_SESSION['username']) && $_SESSION['is_admin']) {
        header("Location:dashboard.php");
    } else {
        header("Location:index.php");
    }
}
?>
