<?php session_start(); ?>
<?php if (isset($_SESSION['user'])) {
  include('../server/db_connect.php');
  $result = mysqli_query($connection, "SELECT username FROM users WHERE username = '$_SESSION[user]'");
  $adminPriv = mysqli_query($connection, "SELECT admin FROM users WHERE username = '$_SESSION[user]'");
  if (!$result) {
    echo "Error: " . mysqli_error($connection);
  }
  $username = mysqli_fetch_assoc($result)['username'];
  $isAdmin = mysqli_fetch_assoc($adminPriv)['admin'];
} ?>
<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <script>src = "jquery-3.1.1.min.js"</script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
</head>
<body class = "bg-light">

<header>
    <div class="container-fluid">
    <div class="row bg-dark">
    <div class="container text-center">
        <p><h1 style="color:white">Golf BC</h1><p>
                    
        </div>
</div>
    </div>
    <div class = "row">
    <div class="container-fluid">
    <nav class="navbar navbar-expand-sm sticky-top bg-dark navbar-dark">
            <!-- <img src="Images/PonderLogo.png" alt="Ponder Logo" height="40"> 
            <img src="Images/Ponder.png" alt="Ponder" height="40"> 
            </a> -->

        <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#partialnav" aria-controls="partialnav"
                aria-label="Expand Navigation Options" aria-expanded="false">
                <span class="navbar-toggler-icon"></span>
        </button>

        <ul class="navbar-nav me-auto ms-auto">
        <li class="nav-item">
        <select class="form-select form-select-sm " aria-label="Default select example">
        <option selected>Community</option>
        <option value="1">Okanagan</option>
        <option value="2">Vancouver</option>
        <option value="3">Vancouver Island</option>
        </select>
        </li>
</ul>
        <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link active" href="home.php" target="_top" aria-current="page">Home</a>
            </li>
            <li class="nav-item">
            <a class="nav-link active" href="courses.php" target="_top" aria-current="page">Courses</a>
            </li>
            <li class="nav-item">
            <a class="nav-link active" href="forums.php" target="_top" aria-current="page">Forums</a>
            </li>
            <li class="nav-item">
            <a class="nav-link active" href="home.php" target="_top" aria-current="page">Marketplace</a>
            </li>
            <li class="nav-item">
            <a class="nav-link active" href="home.php" target="_top" aria-current="page">Instruction</a>
            </li>
            <li class="nav-item">
            <a class="nav-link active" href="home.php" target="_top" aria-current="page">Merchandise</a>
            </li>
        <div class="collapse navbar-collapse" id="partialnav">

            </ul>

            <ul class="navbar-nav ms-auto mb-auto ">
            <li class="nav-item" >
                <form method="post" action="searchForum.php" class="d-flex" role="search">
                    <input class="form-control me-2" name = "search" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-dark" type="submit">Search</button>
                </form>
            </li>
            <?php if (isset($isAdmin)){
                echo' <li class="nav-item"> <a class="nav-link" href="admin.php" target="_top">Admin</a> </li>';
            } ?>
            <?php if (isset($username)){
                    echo '<li class="nav-item"><a class="nav-link disabled" href="#">Logged in as: ' . $username . '</a>';
                    } ?>
            <div class="btn-group">
                <li class="nav-item" >
                    <button class="btn btn-dark dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                            <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0Zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4Zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10Z"/>
                        </svg>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-end me-auto">
                        <?php
                            if (!isset($_SESSION['user'])) {
                            echo '<li><a class="dropdown-item" href="login.php" target="_top">Login/Signup</a></li>';
                            }else if(!isset($isAdmin)){
                                echo '<li><a class="dropdown-item" href="profile.php" target="_top">Profile</a></li>
                                <li><a class="dropdown-item" href="logout.php" target="_top">Logout</a></li>';
                            } else{
                                echo '<li><a class="dropdown-item" href="profile.php" target="_top">Profile</a></li>
                                <li><a class="dropdown-item" href="admin.php" target="_top">Admin</a></li>
                                <li><a class="dropdown-item" href="logout.php" target="_top">Logout</a></li>';
                            } ?>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#" target="_top">Help</a></li>
                    </ul>
                </li>
                </div>
            </ul>
        </div>
        </div>
        </div>
    </nav>
</header>