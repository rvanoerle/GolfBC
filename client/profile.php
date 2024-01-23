<?php 
error_reporting(E_ALL);
ini_set('display_errors','0');
require('components/headerNav.php');
require('../server/db_connect.php');

if ($error != null){
    $output ="<span> Unable to connect to database <span>" .$error;
    exit($output);
}
$username = "exampleuser";
  $name = "Johnny Appleseed";
  $email = "example@gmail.com";
/*
$sql = "SELECT username,name,email FROM users WHERE username = '{$_SESSION['user']}'";
$result = mysqli_query($connection, $sql);

if ($row = mysqli_fetch_assoc($result)) {
  $username = $row['username'];
  $name = $row['name'];
  $email = $row['email'];
}
mysqli_close($connection);
//$sql2 = "SELECT * FROM forums WHERE user_id =" . $_SESSION['user'] . ";";
//$forums = mysqli_fetch_all(mysqli_query($connection, $sql2), MYSQLI_ASSOC);
//mysqli_close($connection);
*/
?> 
<div class = "container-fluid">
    <div class="row">
        <div class = "col" style = "padding:10px;height:100%">
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="Images/blank_profile1.jpg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Profile</h5>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><b>Username: </b><span id="username"><?php echo $username ?></span></li>
                    <li class="list-group-item"><b>Name: </b><span id="name"><?php echo $name ?></span></li>
                    <li class="list-group-item"><b>Email: </b><span id="email"><?php echo $email ?></span></li>
                    <li class="list-group-item"><b>Upload Profile Image: </b></li>
                </ul>
                <div class="card-body">
                    <a href="" class="card-link">Delete Account</a>
                </div>
            </div>
        </div>
        <div class = "col" style = "padding:10px">
            <div class="card" style="width: 60rem;">
                <div class="card-body">
                    <h5 class="card-title">Create Post</h5>
                    <form style = "padding:10px">
                        <div class="form-group" style = "margin:10px" >
                            <label for="postTopic" class="form-label">Topic</label>
                            <select id="postTopic" class="form-select">
                                    <?php include '../server/getTopics.php' ?>
                            </select>
                            <label for="postTitle">Post Title</label>
                            <input type="text" maxlength = "100" class="form-control" id="postTitle" placeholder="Title">
                            <label for="postContent">Post Content</label>
                            <textarea class="form-control" id="postContent" rows="5" placeholder="Content"></textarea>
                            <button type="button" id = "postButton" class="btn btn-primary" style = "margin:10px">Post</button>
                        </div>
                    </form>
                    <div class="alert alert-danger" role="alert" id="postError"></div>
                </div>
            </div>
        </div>
    </div>
    <?php include '../server/getUserPosts.php'?>
</div>

<script type="text/javascript" src = "js/createPost.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>