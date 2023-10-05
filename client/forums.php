<?php $title = "Homepage";
require('components/headerNav.php');
require('../server/db_connect.php');

if ($error != null){
    $output ="<p> Unable to connect to database <p>" .$error;
    exit($output);
}

?>

        <div style = "background-color:#BEBEBE">
            <div class = "container-fluid">
                <div class="row">
                    <div class = "col" style = "padding:20px">
                        <h3 class ="text-muted">Recent Posts</h3>
                        <?php include 'getPosts.php'?>
                    </div>

                    <div class = "col" style= "max-width:25%">
                        <div class="card w-100 bg-dark ms-auto mb-auto" style ="height:100vh">
                            <div class="card-body">
                                <p class="text-muted">Topics</p>
                                <ul class="flex-column">
                                    <?php include 'getNavTopics.php'?>
                                </ul>
                            </div>
                        </div>    
                    </div>
                </div>
            </div>
        </div>
       
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>