<link rel="stylesheet" href= "style.css">
<?php
include('../server/db_connect.php');
?>
<?php 
$courses = mysqli_fetch_all(mysqli_query($connection, "SELECT * FROM courses ORDER BY name ASC"), MYSQLI_ASSOC);
mysqli_close($connection);
empty($courses) ? $isArray = false : $isArray = true;
                        if ($isArray) {
                            foreach ($courses as $course){ 
                                echo '<div class = "col-md-4 col-xs-12">                              
                                <div id = "course-card" class= "card mb-3 mt-2 bg-dark text-light text-center position" style="min-height:400px;border-color:#d3d3d3;">  
                                            <div id = "cImg" class ="z-0" style = "background-image:url(images/courses/'.$course['id'].'.jpg);height:100%;width:100%;position:absolute;opacity:70%;">
                                            </div>
                                   
                                            <div class="z-1 card-body top-50 start-50 translate-middle" style="position:absolute;">
                                            <h2 id = "name" class="card-title" style = "font-size:30px;">'.$course['name'].'</h2>
                                            <p class="card-text mb-0 mt-1"><i>Par '.$course['par'].'</i></p>
                                            <p class="card-text mt-0 mb-4"><i>'.$course['course_len'].' yds</i></p>
                                            <form method="post" action="viewCourse.php">
                                                <input type = "hidden" name = "courseId" value = "'.$course['id'].'">
                                                <input type = "hidden" name = "courseName" value = "'.$course['name'].'">
                                            <span class="bottom-0 end-0" style = "padding:10px;"><button class="btn btn-primary stretched-link" type = "submit">View Course</button></span>
                                            </form>
                                            </div>
                                        
                                        <div class = "z-1 badge " style="width: 6rem;height:2rem;position:absolute;">
                                            <span class = "fs-5">'.$course['rating'].'
                                            <button id = "rate" class="btn m-0 p-0" type="button" data-bs-toggle="modal" data-bs-target="#xxx">
                                            <i class="bi bi-star"></i>
                                            <i class ="bi bi-star-fill"></i>
                                            </button></span>
                                        </div>
                                        <form>
                                        <div class="modal fade" id="xxx" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content bg-dark">
                                            <div class="modal-header text-center">
                                                <h1 class="modal-title fs-5 text-center w-100" id="exampleModalLabel">'.$course['name'].'</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <div class = "rating mb-3">
                                                    <button id = "1" class="btn m-0 p-0" type="button" value ="1">
                                                    <i class="bi bi-star"></i>
                                                    <i class ="bi bi-star-fill"></i>
                                                    </button>
                                                    <button id = "2" class="btn m-0 p-0" type="button" value ="2">
                                                    <i class="bi bi-star"></i>
                                                    <i class ="bi bi-star-fill"></i>
                                                    </button>
                                                    <button id = "3" class="btn m-0 p-0" type="button" value ="3">
                                                    <i class="bi bi-star"></i>
                                                    <i class ="bi bi-star-fill"></i>
                                                    </button>
                                                    <button id = "4" class="btn m-0 p-0" type="button" value ="4">
                                                    <i class="bi bi-star"></i>
                                                    <i class ="bi bi-star-fill"></i>
                                                    </button>
                                                    <button id = "5" class="btn m-0 p-0" type="button" value ="5">
                                                    <i class="bi bi-star"></i>
                                                    <i class ="bi bi-star-fill"></i>
                                                    </button>
                                                </div>
                                                <input type="hidden" id="finalRate" value="" class="form-control" required>
                                                <input type="hidden" id="courseId" value="'.$course['id'].'" class="form-control" required>
                                                <input type="hidden" id="userId" value="ryderv" class="form-control" required>
                                                    <div>
                                                        <label for="reviewComments" class="form-label"></label>
                                                        <textarea maxlength="255" class="form-control bg-dark text-light" id="reviewComments" rows="3" placeholder="Comments regarding course."></textarea>
                                                    </div>
                                                    <div class=" mt-1 form-text fs-6 text-light text-end">ryderv</div>
                                                    <div class="alert alert-danger" role="alert" hidden="hidden" id="failedReview"></div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" id="close" data-bs-dismiss="modal">Close</button>
                                                    <button type="button" id = "sub" class="btn btn-primary">Submit</button>
                                                </div>
                                                </div>
                                            </div>
                                            </div>
                                </form>
                                            <div class = "z-1 badge  text-wrap top-0 end-0" style="width:6rem;height:2rem;position:absolute;">
                                                <h5>'.$course['cost'].'<h5>
                                            </div>
                                </div>
                                </div>
                                  ';
                            }

                        }
?>