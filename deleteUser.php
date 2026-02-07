<?php
include("config.php");

if (!isset($_SESSION['id'])) {
    header("Location: index.php");
    exit;
}

$id = $_GET['id']; 
$loggedInId = $_SESSION['id'];
$isAdmin = ($_SESSION['is_admin'] === 'true');


if (!$isAdmin && $id != $loggedInId) {
    die("Unauthorized");
}



$sql = "DELETE FROM users WHERE id = :id";
$prep = $conn->prepare($sql);
$prep->bindParam(':id', $id);
$prep->execute();

// user deletes account
if ($id == $loggedInId) {

    $_SESSION = [];
    session_unset();
    session_destroy();

    if (ini_get("session.use_cookies")) {
        $params = session_get_cookie_params();
        setcookie(
            session_name(),
            '',
            time() - 42000,
            $params["path"],
            $params["domain"],
            $params["secure"],
            $params["httponly"]
        );
    }

    header("Location: index.php");
    exit;
}

// admin deletes account
if ($isAdmin) {
    header("Location: dashboard.php");
    exit;
}


header("Location: index.php");
exit;
?>