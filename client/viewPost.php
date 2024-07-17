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

<div style = "height:100%">
<?php

if (isset($_POST['id'])) {
    $id = $_POST['id'];
    $sql = "SELECT * FROM posts WHERE id ='$id'";
    echo '';
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
}
?>

<?php 

$comments = mysqli_fetch_all(mysqli_query($connection, "SELECT * FROM comments WHERE postId ='$id'"), MYSQLI_ASSOC);
$error = mysqli_error($connection);
empty($comments) ? $isArray = false : $isArray = true;
                        if ($isArray) {
                            foreach ($comments as $comment){ 
                                echo 
                                    '<div class="row" style = "padding:10px">
                                        <div class="card w-50 mx-auto">
                                        <div class="card-body"> 
                                        <p class = "card-text">'.$comment['content'].'</p> 
                                    </div>
                                    <div class="card-footer text-muted"><span>2 days ago</span><span class = "float-end">Commented by: '.$comment['user'].'</span></div>
                                    </div>
                                    </div>';
                            }

                        }else {
                            }
                            mysqli_close($connection);
?>

<div class="card w-50 mx-auto" style="">
                <div class="card-body">
                    <h5 class="card-title">Create Comment</h5>
                    <form style = "padding:10px">
                        <div class="form-group" style = "margin:10px" >
                            <textarea class="form-control" id="content" rows="5" placeholder="Comment"></textarea>
                            <?php 
                            echo '<input type="hidden" id="postId" class="form-control" value ="'.$id.'">'; ?>
                            <button type="button" id = "postComment" class="btn btn-primary" style = "margin:10px">Comment</button> 

                            <div hidden class="alert alert-danger" role="alert" id="failedComment"></div>
                            
                        </div>
                    </form>
                </div>
            </div>
</div>

<script type="text/javascript" src = "js/createComment.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
