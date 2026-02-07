<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="login.css?v=<?php echo time();?>">
</head>
<body class="login-page">

<?php include_once 'config.php'; ?>

    <div class="login-wrapper sidebar-close">
        <div class="login-card">

            <h2 class="text-center mb-4">Welcome Back</h2>

            <?php
            if (isset($_SESSION['error'])) {
                echo "<div class='alert alert-danger text-center'>" . "Incorrect Credentials" . "</div>";
                unset($_SESSION['error']);
            }
            ?>

            <form action="loginLogic.php" method="post">

                <div class="mb-3">
                    <input type="text" class="form-control" placeholder="Username" name="username" required>
                </div>

                <div class="mb-3">
                    <input type="email" class="form-control" placeholder="Email" name="email" required>
                </div>

                <div class="mb-4">
                    <input type="password" class="form-control" placeholder="Password" name="password" required>
                </div>

                <button type="submit" class="btn btn-login w-100" name="submit">
                    Login
                </button>
            </form>

            <p class="text-center mt-4">
                Don't have an account? <a href="signup.php">Sign up</a>
            </p>

            <p class="text-center backhome">
                <a href="index.php">← Back to main page</a>
            </p>

        </div>
    </div>
</body>
</html>
