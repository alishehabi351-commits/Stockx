

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="navbar.css?v=<?php echo time();?>">
    <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">

    
</head>



<body class="sidebar-close">



   <nav class="navbar sticky-top navbar-expand-lg navbar-light bg-light py-2 px-4">

    
    <a href="index.php">
        <img src="Images/stockx_logo-removebg-preview.png" style="max-height:64px;" class="img-fluid" alt="">
    </a>

    <!-- Toggle -->
    <button class="navbar-toggler ms-2" type="button"
        data-bs-toggle="collapse"
        data-bs-target="#mainNavbar"
        aria-controls="mainNavbar"
        aria-expanded="false"
        aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <!-- DESKTOP SEARCH -->
    <form class="d-none d-lg-flex flex-grow-1 mx-3" method="GET" id="searchForm" action="index.php">
        <input class="form-control me-2 search-input" name="search" type="search" placeholder="Search for brand, color, etc." 
        
        id="searchInput" 
        
        value="<?= isset($_GET['search']) ? htmlspecialchars($_GET['search']) : '' ?>">
    </form>

    <?php if (!empty($_GET['search'])): ?>
    <a href="index.php" class="btn btn-sm xbutton ms-1">
        <svg xmlns="http://www.w3.org/2000/svg"
             width="20"
             height="20"
             viewBox="0 -960 960 960"
             fill="#000">
            <path d="m256-200-56-56 224-224-224-224 56-56 224 224 224-224 56 56-224 224 224 224-56 56-224-224-224 224Z"/>
        </svg>
    </a>
<?php endif; ?>

    
    <div class="collapse navbar-collapse mainnav" id="mainNavbar">

        <!-- mobile search -->
        <form class="d-lg-none my-3"
              method="GET"
              action="index.php">
            <input class="form-control search-input"
                   name="search"
                   type="search"
                   placeholder="Search for brand, color, etc."
                   value="<?= isset($_GET['search']) ? htmlspecialchars($_GET['search']) : '' ?>">
        </form>

        <ul class="navbar-nav align-items-lg-center ms-auto">

            <li class="nav-item">
                <a class="nav-link" href="shipping.php">Shipping</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="contact.php">Contact</a>
            </li>

            <?php if(!isset($_SESSION['username'])) : ?>
                <li class="nav-item mt-2 mt-lg-0">
                    <a class="btn btn-outline-dark login-btn" href="login.php">Login</a>
                </li>
                <li class="nav-item ms-lg-2 mt-2 mt-lg-0">
                    <a class="btn btn-dark signup-btn" href="signup.php">Sign Up</a>
                </li>
            <?php else: ?>
                <li class="nav-item mt-2 mt-lg-0">
                    <a class="btn btn-danger signup-btn" href="logout.php">Log Out</a>
                </li>
            <?php endif; ?>

        </ul>
    </div>
</nav>

<script>
document.addEventListener("DOMContentLoaded", () => {
    const form = document.getElementById("searchForm");
    if (!form) return;

    form.addEventListener("submit", function (e) {
        const currentPage = window.location.pathname.split("/").pop();
        const allowedPages = ["index.php", "page2.php"];

        if (!allowedPages.includes(currentPage)) {
            e.preventDefault();
            const query = document.getElementById("searchInput").value;
            window.location.href = "index.php?search=" + encodeURIComponent(query);
        }
    });
});


function handleSidebarClass() {
    if (window.innerWidth < 992) {
        document.body.classList.remove('sidebar-close');
        
    } else {
        document.body.classList.add('sidebar-close');
        
    }
}


handleSidebarClass();

// Run on resize
window.addEventListener('resize', handleSidebarClass);
</script>

</body>
</html>
