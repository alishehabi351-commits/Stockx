<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup Page</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="signup.css?v=<?php echo time(); ?>">
</head>
<body class="login-page">

<?php include_once 'config.php'; ?>

<div class="login-wrapper">
    <div class="login-card">

        <h2 class="text-center mb-4">Create Account</h2>

        <form action="registerLogic.php" method="post">

            <div class="mb-3">
                <input type="text" class="form-control" 
                       placeholder="Username" 
                       name="username" required>
            </div>

            <div class="mb-3">
                <input type="email" class="form-control" 
                       placeholder="Email" 
                       name="email" required>
            </div>

            <div class="mb-3">
                <input type="password" class="form-control" 
                       placeholder="Password" 
                       name="password" required>
            </div>

            <div class="mb-4">
                <input type="password" class="form-control" 
                       placeholder="Confirm Password" 
                       name="confirm_password" required>
            </div>

            <button type="submit" class="btn btn-login w-100" name="submit">
                Sign Up
            </button>
        </form>

        <p class="text-center mt-4">
            Already have an account? <a href="login.php">Log in</a>
        </p>

        <p class="text-center backhome">
            <a href="index.php">← Back to main page</a>
        </p>

    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
