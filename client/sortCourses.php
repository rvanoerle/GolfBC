
<?php
include('../server/db_connect.php');
?>
<?php 
if ($_SERVER["REQUEST_METHOD"] === "GET") {
if(isset($_GET["sortBy"]))
{ 
    $sort = $_GET["sortBy"];
    if($sort == "pLow"){
      $results = mysqli_fetch_all(mysqli_query($connection, "SELECT * FROM courses ORDER BY length(cost) ASC,rating DESC"), MYSQLI_ASSOC);
    }else if($sort == "pHigh"){
      $results = mysqli_fetch_all(mysqli_query($connection, "SELECT * FROM courses ORDER BY length(cost) DESC,rating DESC"), MYSQLI_ASSOC);
    }else if($sort =="length"){
      $results = mysqli_fetch_all(mysqli_query($connection, "SELECT * FROM courses ORDER BY course_len DESC"), MYSQLI_ASSOC);
    }else{
      $results = mysqli_fetch_all(mysqli_query($connection, "SELECT * FROM courses ORDER BY $sort DESC"), MYSQLI_ASSOC);
    }
    
    }
    mysqli_close($connection);

    if(!$results){
      exit(json_encode(['status' => 'error', 'message' => 'Error fetching courses']));
    }
    if (empty($results)) {
      exit(json_encode(['status' => 'error', 'message' => 'No courses found']));
    }
    exit(json_encode(['status' => 'sim','courses' => $results]));
    
}

?>