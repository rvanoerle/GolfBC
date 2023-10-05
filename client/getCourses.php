<link rel="stylesheet" href="style.css">
<?php 
$courses = mysqli_fetch_all(mysqli_query($connection, "SELECT * FROM courses ORDER BY id DESC"), MYSQLI_ASSOC);
mysqli_close($connection);
empty($courses) ? $isArray = false : $isArray = true;
                        if ($isArray) {
                            foreach ($courses as $course){ 
                                echo 
                                '<div class = "container">
                                  <div class="card mb-3 bg-dark text-light w-80 hover-overlay" style="min-height:250px;">
                                    <div class="row g-0" style="width:100%;min-height:250px;">
                                      <div class="col-md-4 position-relative">
                                          <div class="card-body text-center">
                                            <h2 id = "name" class="card-title">'.$course['name'].'</h2>
                                            <p class="card-text">'.$course['description'].'</p>
                                            <span class="bottom-0 end-0" style = "padding:10px;"><a href="#" class="btn btn-success">View Course</a></span>
                                          </div>
                                      </div>
                                      <div class="col-md-8 bg-dark" style="min-height:250px;position:relative;"> <a href="#">
                                        <a class="bgimg" href="home.php">
                                          <div id = "cImg" class ="z-0" style = "background-image:url(images/courses/'.$course['id'].'.jpg);height:100%;width:100%;position:absolute;">
                                          </div>
                                        </a> 
                                        <div class = "z-1 badge bg-dark" style="width: 6rem;height:2rem;position:absolute;">
                                           <span class = "fs-5"><strong>'.$course['rating'].'</strong>
                                           <i class="bi bi-star"></i></span>
                                        </div>
                                        <div class = "z-1 badge bg-dark text-wrap top-0 end-0" style="width:6rem;height:2rem;position:absolute;">
                                          <h5><strong>'.$course['cost'].'</strong><h5>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>  ';
                            }

                        }else {
                            echo '<script>alert("Unable to display posts")</script>';
                            }
?>