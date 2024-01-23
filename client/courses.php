<link rel="stylesheet" href= "style.css">
<?php $title = "Courses";
require('components/headerNav.php');
require('../server/db_connect.php');
?>

<div class = "container" style = "justify-content:center;width:100%;">
<br>
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
    <div style = "float:right;">
        <form method="post" action="searchForum.php" class="d-flex" role="search">
          <input class="form-control me-2" name = "search" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-primary" type="submit">Search</button>
        </form>
    </div>
</div>
<br><br>
  
<div class= "container">
  <div class = "row w-100" id= "cards">
<?php include ("../server/getCourses.php")?>
  </div>
</div>
</div>
<script>

  </script>
<script src ="js/courseSort.js">
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

