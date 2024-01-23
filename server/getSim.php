
<?php
include('../server/db_connect.php');
?>
<?php 
if ($_SERVER["REQUEST_METHOD"] === "GET") {
if(isset($_GET["pNav"]))
{ 
      $results = mysqli_fetch_all(mysqli_query($connection, "SELECT * FROM sims"), MYSQLI_ASSOC);
    
    }
    mysqli_close($connection);

    if(!$results){
      exit(json_encode(['status' => 'error', 'message' => 'Error fetching']));
    }
    if (empty($results)) {
      exit(json_encode(['status' => 'error', 'message' => 'No courses found']));
    }
    exit(json_encode(['status' => 'success','practice' => $results]));
    
}

?>