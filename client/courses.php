<?php $title = "Homepage";
require('components/headerNav.php');
require('../server/db_connect.php');

if ($error != null){
    $output ="<p> Unable to connect to database <p>" .$error;
    exit($output);
}


?>

<div class = "container" style = "justify-content:center;width:100%;">
<br><br>
<?php include 'getCourses.php'?>
</div>
