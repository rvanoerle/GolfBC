<link rel="stylesheet" href= "./style.css">
<?php 
session_start(); ?>
<?php if (isset($_SESSION['user'])) {
  include('../server/db_connect.php');
  $result = mysqli_query($connection, "SELECT username FROM users WHERE username = '$_SESSION[user]'");
  //$adminPriv = mysqli_query($connection, "SELECT admin FROM users WHERE username = '$_SESSION[user]'");
  if (!$result) {
    echo "Error: " . mysqli_error($connection);
  }
  $username = mysqli_fetch_assoc($result)['username'];
  //$isAdmin = mysqli_fetch_assoc($adminPriv)['admin'];
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
<body style = "background-color:#EBEBEB;">
<header class = "sticky-top">

<div>
    <nav class="navbar navbar-expand-sm sticky-top bg-dark navbar-dark justify-content-center">
        <a class="navbar-brand">
        <img src="./images/logo3.png" alt="Logo" width="197" height="57" class="d-inline-block align-text-center">
        </a>
    </nav>
 
<nav class="navbar navbar-expand-lg sticky-top bg-light navbar-light justify-content-center">
    <div class = "container">
    <ul class="nav">
            <li class="nav-item">
                <select class="form-select form-select-sm " aria-label="Default select example">
                    <option selected>Community</option>
                    <option value="1">Okanagan</option>
                    <option value="2">Vancouver</option>
                    <option value="3">Vancouver Island</option>
                </select>
            </li>
    </ul>
    <div class = "d-flex flex-row mx-auto">
        <ul class="navbar-nav justify-content-center">
            <li class="nav-item">
            <a class="nav-link" href="home.php" target="_top" aria-current="page">Home</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="forums.php" target="_top" aria-current="page">Forums</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="courses.php" target="_top" aria-current="page">Courses</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="marketplace.php" target="_top" aria-current="page">Marketplace</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="practice.php" target="_top" aria-current="page">Practice</a>
            </li>
            <li class="nav-item">
            <a class="nav-link disabled" href="" target="_top" aria-current="page">Merchandise</a>
            </li>
            
        </ul>
    </div>
    
    <div class="btn-group">
    <?php if (isset($_SESSION['user'])){
                    echo '<ul class = "nav"><li class="nav-item"><a class="nav-link disabled" href="#">' . $username . '</a><li></ul>';
                    } ?>
                    <button class="btn btn-light dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                            <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0Zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4Zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10Z"/>
                        </svg>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-end me-auto">
                        <?php
                            if (!isset($username)) {
                            echo '<li><a class="dropdown-item" href="login.php" target="_top">Login</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#signup.php">Sign Up</a></li>';
                            }else if(!isset($isAdmin)){
                                echo '<li><a class="dropdown-item" href="profile.php" target="_top">Profile</a></li>
                                <li><a class="dropdown-item" href="logout.php" target="_top">Logout</a></li>
                                <li><hr class="dropdown-divider"></li>';
                            } else{
                                echo '<li><a class="dropdown-item" href="profile.php" target="_top">Profile</a></li>
                                <li><a class="dropdown-item" href="logout.php" target="_top">Logout</a></li>
                                <li><hr class="dropdown-divider"></li>';
                            } ?>
                            <li><a class="dropdown-item" href="#" target="_top">Help</a></li>
                   </ul>
        </div>
</div>
</nav>
</div>
</header>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        
<script> 
        //alert('/golfbc/client/' + $(this).find('a.nav-link').attr('href'));
        //alert(window.location.pathname);
    $.each($('ul.navbar-nav li.nav-item').find('a.nav-link'), function() {
        $(this).toggleClass('active',
            '/golfbc/client/' + $(this).attr('href') == window.location.pathname);

            
    });
    //$('a.active').css("text-decoration","underline");
    $('a.active').css("color","blue");
    $('a.active').css("font-weight","bold");

</script>