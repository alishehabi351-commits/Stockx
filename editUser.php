<?php
    
    
    include_once("config.php");

    if(empty($_SESSION['username'])){
        header("Location: login.php");
        exit;
    }


    $id = $_GET['id'];


    $sql = "SELECT * FROM users WHERE id = :id";

    $selectUser = $conn->prepare($sql);
    $selectUser->bindParam(":id", $id);
    $selectUser->execute();

    $user_data = $selectUser->fetch();
?>

    
   
   <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="editUser.css?v<?php echo time(); ?>">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<?php include("navbar.php"); ?>
<?php include("sidebar.php"); ?>
<body class="sidebar-close">



<div class="container-fluid">
    <div class="row">

        <!-- MAIN -->
        <main class="col-12 col-lg-10 offset-lg-1 px-3 px-md-5">

            <div class="edit-user-wrapper">
                <div class="edit-user-card">
                    <h2 class="mb-4">Edit User</h2>

                    <form action="updateUser.php" method="POST">

                        <div class="form-group">
                            <label>User ID</label>
                            <input type="text" name="id" class="form-control"
                                value="<?php echo $user_data['id']; ?>" readonly>
                        </div>

                        <div class="form-group">
                            <label>Username</label>
                            <input type="text" name="username" class="form-control"
                                value="<?php echo $user_data['username']; ?>">
                        </div>

                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" name="email" class="form-control"
                                value="<?php echo $user_data['email']; ?>">
                        </div>

                        <hr>

                        <h5 class="mb-3">Change Password</h5>

                        <div class="form-group">
                            <input type="password" name="current_password" class="form-control"
                                placeholder="Current Password">
                        </div>

                        <div class="form-group">
                            <input type="password" name="new_password" class="form-control"
                                placeholder="New Password">
                        </div>

                        <button type="submit" name="submit" class="btn btn-success w-100 mt-3">
                            Update User
                        </button>

                        <a href="deleteUser.php?id=<?php echo $user_data['id']; ?>"
                           class="btn btn-danger w-100 mt-3"
                           onclick="return confirm('Are you sure you want to delete this user? This cannot be undone!');">
                            Delete User
                        </a>

                    </form>
                </div>
            </div>
        </main>

    </div>
</div>

</body>