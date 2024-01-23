<?php
include "db_connect.php";
if ($error) {
  exit(json_encode([
    'status' => 'db_error',
    'message' => 'Error',
  ]));
}



if ($_SERVER["REQUEST_METHOD"] === "POST") {
  if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    /*
    $sql = "SELECT status FROM users WHERE username=?";
    $stmt = mysqli_prepare($connection, $sql);
    mysqli_stmt_bind_param($stmt, "s", $username);
    mysqli_stmt_execute($stmt);
    $results = mysqli_stmt_get_result($stmt);
    if ($row = mysqli_fetch_assoc($results)) {
      if ($row['status'] == 0) {
        echo json_encode([
          "status" => "error",
          "message" => "Account is not activated"
        ]);
        exit();
      }
    } */
    $sql = "SELECT username, password FROM users WHERE username=?";
    $stmt2 = mysqli_prepare($connection, $sql);
    mysqli_stmt_bind_param($stmt2, "s", $username);
    mysqli_stmt_execute($stmt2);
    $results = mysqli_stmt_get_result($stmt2);
    if ($row = mysqli_fetch_assoc($results)) {
      if($password = $row['password']){
      //(password_verify($password, $row['password'])) {
        session_start();
        $_SESSION['user'] = $row['username'];
        exit (json_encode([
          'status' => 'success',
          'message' => 'nice',
        ]));
      } else {
        exit (json_encode([
          "status" => "error",
          "message" => "Username and/or password are invalid"
        ]));
      }
    } else {
      exit(json_encode([
        "status" => "error",
        "message" => "Username does not exist"
      ]));
    }
    mysqli_free_result($results);
    mysqli_stmt_close($stmt);
    mysqli_stmt_close($stmt2);
    mysqli_close($connection);
  
  } else {
    echo json_encode([
      "status" => "error",
      "message" => "Please enter a username and password"
    ]);
  }
} else {
  echo json_encode([
    "status" => "error",
    "message" => "invalid request",
  ]);
}