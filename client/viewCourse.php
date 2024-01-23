<link rel="stylesheet" href= "style.css">
<?php $title = "Homepage";
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
<span hidden id ="1"></span>
<div class="course-wrap">
  <div class="course-content text-center">
    <h1 class = "fs-1">Tower Ranch</h1>
  </div>
</div>
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
    <button class="nav-link" id = "conditions" >Current Conditions</button>
  </li>
  <li class="nav-item">
    <button class="nav-link" id = "reviews">Reviews</button>
  </li>
</nav>
<br>
<div class = "container" id= "navContent">
<table class="table table-striped">
  <thead>
  </thead>
  <tbody>
    <tr>
            <th scope="row">Type</th>
            <td>Semi-Private</td>
    </tr>
    <tr>    <th scope="row">Par</th>
            <td>72</td>
    </tr>
    <tr>
            <th scope="row">Length</th>
            <td>6927</td>
    </tr>
    <tr>
            <th scope="row">Designer</th>
            <td>Thomas Mcbroom</td>
    </tr>
    <tr>
            <th scope="row">Slope</th>
            <td>133</td>
    </tr>
    <tr>
            <th scope="row">Practice Facility</th>
            <td>Range✓ Practice Green✓ Short Game Area✓</td>
    </tr>
    <tr>
            <th scope="row">Green Fees</th>
            <td><a href="https://www.golftowerranch.com/wp-content/uploads/2023/11/2024-Rates-Sheet.pdf">Click Here</a></td>
    </tr>
    <tr>
            <th scope="row">Membership</th>
            <td>Yes <a href="https://www.golftowerranch.com/membership/">Click For Information</a></td>
    </tr>
    <tr>
            <th scope="row">Address</th>
            <td>1789 Tower Ranch Drive, Kelowna, V1P 1T2</td>
    </tr>
    <tr>
            <th scope="row">Website</th>
            <td><a href="https://www.golftowerranch.com/">"https://www.golftowerranch.com/"</a></td>
    </tr>
  </tbody>
</table>
</div>
<!--
<a class="bgimg" href="home.php">
            <div id = "cImg" class ="z-0" style = "background-image:url(images/courses/1.jpg);height:100%;width:100%;position:absolute;opacity:60%;">
            </div>
        </a>
            <div class="z-1 card-body top-50 start-50 translate-middle" style="position:absolute;">
            <a href = "home.php" style = "color:white;text-decoration:none;"><h2 id = "name" class="card-title" style = "font-size:30px;">Tower Ranch</h2></a>
            <p class="card-text mb-0 mt-1"><i>Par 69</i></p>
            <p class="card-text mt-0 mb-4"><i>6969 yds</i></p>
            <span class="bottom-0 end-0" style = "padding:10px;"><a href="" class="btn btn-primary">View Course</a></span>
            </div>
        
        <div class = "z-1 badge " style="width: 6rem;height:2rem;position:absolute;">
            <span class = "fs-5">4
            <button id = "rate" class="btn m-0 p-0" type="button" data-bs-toggle="modal" data-bs-target="#xxx">
            <i class="bi bi-star"></i>
            <i class ="bi bi-star-fill"></i>
            </button></span>
        </div>
--->
</div>

<?php

/*if (isset($_POST['id'])) {
    $id = $_POST['id'];
    $sql = "SELECT * FROM posts WHERE id ='$id'";
    
    $results = mysqli_query($connection, $sql);
    $error = mysqli_error($connection);
    if ($row = mysqli_fetch_assoc($results)) {
        $title = $row['title'];
        $desc = $row['description'];
        $user = $row['user'];
        $topic = $row['topic'];
      
      echo 
      '
      <div class="row" style = "padding:10px">
          <div class="card w-50 mx-auto">
                <div class="card-body"> 
                    <h2 class="card-title">'.$title. '</h2>
                    <p class = "card-text">'.$desc.'</p>    
                </div>
                <div class="card-footer text-muted"><span>2 days ago</span><span class = "float-end">Posted by: '.$user.'</span></div>
            </div>
      </div>
      ';

    }else{
        echo "Db error = ".$error;
    }
}
else{
    echo 'failed to to get discussion';
} */
?>

<script src ="js/courseNav.js">
<script type="text/javascript" src = "js/createComment.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
