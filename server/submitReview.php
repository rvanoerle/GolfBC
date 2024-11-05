<?php
include "db_connect.php";
if ($error) {
  exit(json_encode([
    'status' => 'db_error',
    'message' => 'Error',
  ]));
}

error_reporting(E_ALL);
ini_set('display_errors', '1');

if ($_SERVER["REQUEST_METHOD"] === "POST") {
  if (isset($_POST['courseId']) && isset($_POST['user']) && isset($_POST['comments'])&& isset($_POST['rating']) && isset($_POST['date'])) {
    $reviewId = uniqid();
    $courseId = $_POST['courseId'];
    $user = $_POST['user'];
    $comments = $_POST['comments'];
    $rating = $_POST['rating'];
    $date = $_POST['date'];

    $sql = "INSERT INTO reviews VALUES (?,?,?,?,?,?)";
    $stmt2 = mysqli_prepare($connection, $sql);
    mysqli_stmt_bind_param($stmt2, "sissis",$reviewId,$courseId,$user,$comments,$rating,$date);
    mysqli_stmt_execute($stmt2);
    $sql = "SELECT * FROM reviews WHERE id = ?";
    $stmt = mysqli_prepare($connection, $sql);
    mysqli_stmt_bind_param($stmt, "s", $reviewId);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    if(mysqli_num_rows($result) < 1){
      exit(json_encode([
        "status" => "error",
        "message" => "Review failed to post."
      ]));
    } else{
      exit (json_encode([
        "status" => "success",
        "message" => "Review posted successfully"
      ]));
      
    } 
  }else{
      //If the user did not enter a username, name, email, or password, display an error message and send an error code to signupValidation.js to display the error message
      exit( json_encode([
        "status" => "error",
        "message" => "Please submit a review"
      ]));
    }

  }

  
?>