<link rel="stylesheet" href= "style.css">
<?php $title = "View Couse";
require('components/headerNav.php');
require('../server/db_connect.php');

error_reporting(E_ALL);
ini_set('display_errors','0');

if ($error != null){
    $output ="<p> Unable to connect to database <p>" .$error;
    exit($output);
}
?>

<div class = "container" style = "justify-content:center;width:100%;">
<?php
if (isset($_POST['courseId']) && isset($_POST['courseName'])) {
    $id = $_POST['courseId'];
    $name = $_POST['courseName'];
    echo '<span hidden id ="courseId" value ="'.$id.'"></span>
    <div id = "cWrap" class="course-wrap" style="background-image:url(images/courses/'.$id.'.jpg);opacity:100%;background-repeat:no-repeat;background-position:center;background-size:cover;">
    <div class="course-content text-center">
    <h1 class = "fs-1" style = "user-select: none;">'.$name.'</h1>
        </div></div>
    ';
} ?>
<br>
<nav class = "courseNav">
    <ul class="nav nav-pills justify-content-center">
  <li class="nav-item">
    <button class="nav-link active" id="about" aria-current="page">About</button>
  </li>
  <li class="nav-item">
    <button class="nav-link" id= "scorecard" >Scorecard</button>
  </li>
  <li class="nav-item">
    <button class="nav-link" id = "reviews">Reviews</button>
  </li>
  <li class="nav-item">
    <button class="nav-link disabled" id = "conditions" >Current Conditions</button>
  </li>
</nav>
<br>
<div class = "container" id= "navContent">

</div>
</div>



<script src ="js/courseNav.js">
<script type="text/javascript" src = "js/createComment.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
