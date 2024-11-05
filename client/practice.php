<link rel="stylesheet" href= "style.css">
<?php $title = "practice";
require('components/headerNav.php');
require('../server/db_connect.php');
?>


    <br>
    <div class = "" style = "width:100%;height:100%;">
    <nav class = "">
    <ul class="nav nav-pills justify-content-center">
  <li class="nav-item">
    <button class="nav-link active" id = "ranges" aria-current="page" href="#">Practice Facilities</button>
  </li>
  <li class="nav-item">
    <button class="nav-link" id= "sims">Simulators</button>
  </li>
  <li class="nav-item">
    <button class="nav-link" id = "instruct">Instructors</button>
  </li>
</nav>
</ul>
  <div class = "container">
    <br>
    <div class = "row" id="practiceContent"> 
      <?php include ("../server/getRanges.php")?>
    </div>
  </div>
</div>
<br>
</div>
<script src ="js/practiceNav.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>