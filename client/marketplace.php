<link rel="stylesheet" href= "style.css">
<?php $title = "Courses";
require('components/headerNav.php');
require('../server/db_connect.php');
?>
<div class = "container" style = "justify-content:center;width:100%;">
<br>
<div class = "row">
    <div class = "col">
        <div class="dropdown" style = "float:left;">
            <button class="btn btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
            Filter By
            </button>
            <ul class="dropdown-menu">
            <li class= "srt" id = "rating"><a class="dropdown-item">Rating</a></li>
            <li class= "srt" id = "length"><a class="dropdown-item">Length</a></li>
            <li class= "srt" id = "pLow"><a class="dropdown-item" id = "pLow">Price-low to high</a></li>
            <li class= "srt" id = "pHigh"><a class="dropdown-item">Price-high to low</a></li>
            </ul>
            <ul>
        </div>
    </div>
    <div class = "col">
        <div style = "float:right;max-width:50%">
            <form method="post" action="searchForum.php" class="d-flex" role="search">
            <input class="form-control me-2" name = "search" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-primary" type="submit">Search</button>
            </form>
        </div>
    </div>
</div>
<div class = "row">
    <div class = "col">
        <div class="card" style="width:18rem;">
        <img src="images/marketplace/clubs.jpg" class="card-img-top" alt="...">
            <div class="card-body">
            <h5 class="card-title">$325</h5>
                <h5 class="card-title">Callaway Full Set</h5>
                <p class="card-text">Brand new hardly used, bought last year for son who didnt get into it.</p>
                <a href="#" class="btn btn-primary">Message Seller</a>
            </div>
        </div>
    </div>
    <div class = "col">
        <div class="card" style="width:18rem;">
        <img src="images/marketplace/clubs.jpg" class="card-img-top" alt="...">
            <div class="card-body">
            <h5 class="card-title">$325</h5>
                <h5 class="card-title">Callaway Full Set</h5>
                <p class="card-text">Brand new hardly used, bought last year for son who didnt get into it.</p>
                <a href="#" class="btn btn-primary">Message Seller</a>
            </div>
        </div>
    </div>
    <div class = "col">
        <div class="card" style="width:18rem;">
        <img src="images/marketplace/clubs.jpg" class="card-img-top" alt="...">
            <div class="card-body">
            <h5 class="card-title">$325</h5>
                <h5 class="card-title">Callaway Full Set</h5>
                <p class="card-text">Brand new hardly used, bought last year for son who didnt get into it.</p>
                <a href="#" class="btn btn-primary">Message Seller</a>
            </div>
        </div>
    </div>
</div>
<div class = "row">
    <div class = "col">
        <div class="card" style="width:18rem;">
        <img src="images/marketplace/clubs.jpg" class="card-img-top" alt="...">
            <div class="card-body">
            <h5 class="card-title">$325</h5>
                <h5 class="card-title">Callaway Full Set</h5>
                <p class="card-text">Brand new hardly used, bought last year for son who didnt get into it.</p>
                <a href="#" class="btn btn-primary">Message Seller</a>
            </div>
        </div>
    </div>
    <div class = "col">
        <div class="card" style="width:18rem;">
        <img src="images/marketplace/clubs.jpg" class="card-img-top" alt="...">
            <div class="card-body">
            <h5 class="card-title">$325</h5>
                <h5 class="card-title">Callaway Full Set</h5>
                <p class="card-text">Brand new hardly used, bought last year for son who didnt get into it.</p>
                <a href="#" class="btn btn-primary">Message Seller</a>
            </div>
        </div>
    </div>
    <div class = "col">
        <div class="card" style="width:18rem;">
        <img src="images/marketplace/clubs.jpg" class="card-img-top" alt="...">
            <div class="card-body">
            <h5 class="card-title">$325</h5>
                <h5 class="card-title">Callaway Full Set</h5>
                <p class="card-text">Brand new hardly used, bought last year for son who didnt get into it.</p>
                <a href="#" class="btn btn-primary">Message Seller</a>
            </div>
        </div>
    </div>
</div>
</div>
