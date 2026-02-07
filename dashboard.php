<?php include("config.php");

    if(empty($_SESSION['username']) || $_SESSION['is_admin'] != 'true') {
        header("Location:login.php");
    }


    $sql = "SELECT * FROM users";

    $selectUsers = $conn->prepare($sql);
    $selectUsers->execute();
    $users = $selectUsers->fetchAll();






    // Set the number of users per page
    $usersPerPage = 10;

    // Get the current page number from the URL, default to page 1 if not set
    $currentPage = isset($_GET['page']) ? (int)$_GET['page'] : 1;

    // Calculate the offset for the query
    $offset = ($currentPage - 1) * $usersPerPage;

    // Get the total number of users
    $sqlTotal = "SELECT COUNT(*) FROM users";
    $totalusers = $conn->query($sqlTotal)->fetchColumn();

    // Fetch the users for the current page
    $sql = "SELECT * FROM users LIMIT :limit OFFSET :offset";
    $selectusers = $conn->prepare($sql);
    $selectusers->bindValue(':limit', $usersPerPage, PDO::PARAM_INT);
    $selectusers->bindValue(':offset', $offset, PDO::PARAM_INT);
    $selectusers->execute();
    $users = $selectusers->fetchAll();

    $totalPages = ceil($totalusers / $usersPerPage);







?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="dashboard.css?v=<?php echo time(); ?>">
</head>
<body class="sidebar-close">
    

    
<?php  include("navbar.php");?>
<?php  include_once("sidebar.php");?>   
    <div class="container-fluid">
        <div class="row">
            <div class="col-10">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <h1 class="m-4">Dashboard</h1>
                            <div class="col-12">
                                <table class="table table-striped border">
                                    <thead>
                                        <h1>Users</h1>
                                        <tr class="bg-dark">
                                            <th>Username</th>
                                            <th>Email</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php foreach($users as $user) { ?>
                                            <tr>
                                                <td> <?php echo $user['username']; ?> </td>
                                                <td> <?php echo $user['email']; ?></td>
                                                <td>
                                                    <a href="editUser.php?id=<?php echo $user['id']; ?>" class="text-decoration-none">
                                                    
                                                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#000000"><path d="M200-200h57l391-391-57-57-391 391v57Zm-80 80v-170l528-527q12-11 26.5-17t30.5-6q16 0 31 6t26 18l55 56q12 11 17.5 26t5.5 30q0 16-5.5 30.5T817-647L290-120H120Zm640-584-56-56 56 56Zm-141 85-28-29 57 57-29-28Z"/></svg>
                                                    </a>


                                                    <a href="deleteUser.php?id=<?php echo $user['id']; ?>" class="text-decoration-none" 
                                                     onclick="return confirm('Are you sure you want to delete this user? This cannot be undone!');"
                                                    >
                                                    
                                                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#000000"><path d="M280-120q-33 0-56.5-23.5T200-200v-520h-40v-80h200v-40h240v40h200v80h-40v520q0 33-23.5 56.5T680-120H280Zm400-600H280v520h400v-520ZM360-280h80v-360h-80v360Zm160 0h80v-360h-80v360ZM280-720v520-520Z"/></svg>
                                                    </a> 
                                                </td>
                                            </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                            

                                <div class="pagination justify-content-center mt-4">
                            <?php if ($currentPage > 1): ?>
                                <a href="?page=1" class="page-item page-link me-4 text-dark">First</a>
                                <a href="?page=<?php echo $currentPage - 1; ?>" class="page-item page-link me-4 text-dark">Previous</a>
                            <?php endif; ?>

                            <span class="page-info page-item me-4 ms-4">
                                Page <?php echo $currentPage; ?> of <?php echo $totalPages; ?>
                            </span>

                            <?php if ($currentPage < $totalPages): ?>
                                <a href="?page=<?php echo $currentPage + 1; ?>" class="page-item page-link ms-4 text-dark">Next</a>
                                <a href="?page=<?php echo $totalPages; ?>" class="page-item page-link ms-4 text-dark">Last</a>
                            <?php endif; ?>
                        </div>


                       </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




</body>
</html>






