<link rel="stylesheet" href= "style.css">
<?php $title = "Forums";
require('components/headerNav.php');
require('../server/db_connect.php');
?>

<div class = "container" style = "justify-content:center;width:100%;">

<br>
<div class = "card">
    <div class = "card-header text-bg-primary">
        <h4>GolfBC Okanagan Forums<h4>
    </div>
    <div class = "card-body">
    If this is your first visit, be sure to check out the FAQ by clicking the link above. 
    You may have to register before you can post: click the register link above to proceed.
     To start viewing messages, select the forum that you want to visit from the selection below.
    </div>
</div>
<br>
<div style = "">
        <form method="post" action="searchForum.php" class="d-flex" role="search">
          <input class="form-control me-2" name = "search" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-primary" type="submit">Search</button>
        </form>
    </div>
</div>
<div class = "container" style = "justify-content:center;width:100%;">

<br>
<div class = "card">
<div class = "card-header text-bg-primary">
    <h4>Pinned</h4>
</div>
<table class="table table-bordered table-hover">
  <thead class = "table-dark">
    <tr>
     <th scope="col">User</th>
      <th scope="col">Post</th>
      <th scope="col">Date</th>
      <th scope="col">Topic</th>
      <th scope="col">Replies</th>
    </tr>
  </thead>
  <tbody>
    <?php include '../server/getPinned.php'?>
  </tbody>
</table>
</div>
<br>
<div class = "card">
    <div class = "card-header text-bg-primary">
    <h4>Trending</h4>
</div>
<table class="table table-bordered table-hover">
  <thead class = "table-dark">
    <tr>
     <th scope="col">User</th>
      <th scope="col">Post</th>
      <th scope="col">Date</th>
      <th scope="col">Topic</th>
      <th scope="col">Replies</th>
    </tr>
  </thead>
  <tbody>
    <?php include '../server/getTrending.php'?>
  </tbody>
</table>
</div>

<br>

<div class = "card">
<div class = "card-header text-bg-primary">
    <h4>Recent Posts</h4>
</div>
<table class="table table-bordered table-hover">
  <thead class = "table-dark">
    <tr>
     <th scope="col">User</th>
      <th scope="col">Post</th>
      <th scope="col">Date</th>
      <th scope="col">Topic</th>
      <th scope="col">Replies</th>
    </tr>
  </thead>
  <tbody>
  <?php include '../server/getTrending.php'?>
  </tbody>
</table>
</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>