<?php
include('../server/db_connect.php');
?>
<?php 
if ($_SERVER["REQUEST_METHOD"] === "GET") {
if(isset($_GET["courseId"])){
    $cid = $_GET['courseId'];
    $sql = "SELECT * FROM reviews WHERE cid ='$cid'"; 
    $results = mysqli_fetch_all(mysqli_query($connection, $sql), MYSQLI_ASSOC);
    
    }
    mysqli_close($connection);

    if(!$results){
      exit(json_encode(['status' => 'error', 'message' => 'Error fetching']));
    }
    if (empty($results)) {
      exit(json_encode(['status' => 'error', 'message' => 'No reviews found']));
    }
    exit(json_encode(['status' => 'success','reviews' => $results]));
    
}

?>