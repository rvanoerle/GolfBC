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
<div class = "text-light">
<button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#xxx">Create Post</button>

        <form>
        <div class="modal fade" id="xxx" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content bg-dark">
            <div class="modal-header text-center">
                <h1 class="modal-title fs-5 text-center w-100" id="exampleModalLabel">Tower Ranch</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class = "rating mb-3">
                    <button id = "1" class="btn m-0 p-0" type="button" value ="1">
                    <i class="bi bi-star"></i>
                    <i class ="bi bi-star-fill"></i>
                    </button>
                    <button id = "2" class="btn m-0 p-0" type="button" value ="2">
                    <i class="bi bi-star"></i>
                    <i class ="bi bi-star-fill"></i>
                    </button>
                    <button id = "3" class="btn m-0 p-0" type="button" value ="3">
                    <i class="bi bi-star"></i>
                    <i class ="bi bi-star-fill"></i>
                    </button>
                    <button id = "4" class="btn m-0 p-0" type="button" value ="4">
                    <i class="bi bi-star"></i>
                    <i class ="bi bi-star-fill"></i>
                    </button>
                    <button id = "5" class="btn m-0 p-0" type="button" value ="5">
                    <i class="bi bi-star"></i>
                    <i class ="bi bi-star-fill"></i>
                    </button>
                </div>
                <input type="hidden" id="finalRate" value="" class="form-control" required>
                <input type="hidden" id="courseId" value="6" class="form-control" required>
                <input type="hidden" id="userId" value="ryderv" class="form-control" required>
                    <div>
                        <label for="reviewComments" class="form-label"></label>
                        <textarea maxlength="255" class="form-control bg-dark text-light" id="reviewComments" rows="3" placeholder="Comments regarding course."></textarea>
                    </div>
                    <div class=" mt-1 form-text fs-6 text-light text-end">ryderv</div>
                    <div class="alert alert-danger" role="alert" hidden="hidden" id="failedReview"></div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" id="close" data-bs-dismiss="modal">Close</button>
                    <button type="button" id = "sub" class="btn btn-primary">Submit</button>
                </div>
                </div>
            </div>
            </div>
</form>' ;
      <!--
             <div class="modal fade" id="xxx" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content bg-dark">
            <div class="modal-header text-center">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body text-center">
                  <p>Must be logged in to create post.</p>
                </div>
                <div class="modal-footer">
                  <a href = "login.php"><button type="button" class="btn btn-primary">Login</button></a>
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div> ';
        }?> -->
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