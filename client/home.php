<link rel="stylesheet" href= "style.css">
<?php $title = "Homepage";
require('components/headerNav.php');
require('../server/db_connect.php');


if ($error != null){
    $output ="<p> Unable to connect to database <p>" .$error;
    exit($output);
}

?>
<div class = "container" style = "justify-content:center;width:100%;user-select: none;">
<br>

<div class = "card">
    <div class = "card-header text-bg-primary">
        <h4>Welcome to GolfBC<h4>
    </div>
    <div class = "card-body">
        Welcome to GolfBC, an online local golf community. With material scattered from Facebook groups, castanet and other golf sites or apps, 
        finding local golf information can be challenging. The goal behind this website is to centralize all this information, bringing our
        local golf communities together. Here you can find information regarding courses such as conditions, pricing and peer reviews 
        as well as information on simulators, instructors and practice facilities. We also have a forum section to interact with 
        your local golfers and a marketplace where the club you've been looking for doesnt turn out to be from Alberta. 
    </div>
</div>
<br>

<!--
<div class = "container">
    <div class = "row">
    <div class = "col-12 text-center ">
        <div id="locationHead">
        <h1 class="align-middle">Okanagan</h1>
        </div>
    </div>
    </div>

</div>
-->
<div class = "col-4 col-xs-12">                              
<div id = "course-card" class= "card mb-3 mt-2 bg-dark text-light text-center position" style="min-height:400px;border-color:#d3d3d3;">  
            <div id = "cImg" class ="z-0" style = "background-image:url(images/courses/1.jpg);height:100%;width:100%;position:absolute;opacity:70%;">
            </div>
   
            <div class="z-1 card-body top-50 start-50 translate-middle" style="position:absolute;">
            <h2 id = "name" class="card-title" style = "font-size:30px;">Tower Ranch</h2>
            <p class="card-text mb-0 mt-1"><i>Par 69</i></p>
            <p class="card-text mt-0 mb-4"><i>6969 yds</i></p>
            <form method="post" action="viewCourse.php">
                <input type = "hidden" name = "courseId" value = "6">
            <span class="bottom-0 end-0" style = "padding:10px;"><button class="btn btn-primary stretched-link" type = "submit">View Course</button></span>
            </form>
            </div>
        
        <div class = "z-1 badge " style="width: 6rem;height:2rem;position:absolute;">
            <span class = "fs-5">4
            <button id = "rate" class="btn m-0 p-0" type="button" data-bs-toggle="modal" data-bs-target="#xxx">
            <i class="bi bi-star"></i>
            <i class ="bi bi-star-fill"></i>
            </button></span>
        </div>
        <?php if (isset($_SESSION['user'])){
            echo '
        <form>
        <div class="modal fade" id="xxx" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content bg-dark">
            <div class="modal-header text-center">
                <h1 class="modal-title fs-5 text-center w-100" id="exampleModalLabel">Tower Ranch</h1>
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
                <input type="hidden" id="courseId" value="6" class="form-control" required>
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
</form>' ;
        } else{
            echo '
             <div class="modal fade" id="xxx" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content bg-dark">
            <div class="modal-header text-center">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                  <p>Must be logged in to review course.</p>
                </div>
                <div class="modal-footer">
                  <a href = "login.php"><button type="button" class="btn btn-primary">Login</button></a>
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div> ';
        }?>
            <div class = "z-1 badge  text-wrap top-0 end-0" style="width:6rem;height:2rem;position:absolute;">
                <h5>$$$<h5>
            </div>
</div>
</div>
        <br>
</div>
<script src ="js/courseSort.js"></script>
<script src ="js/ratingsubmit.js"></script>
<script>

$('div.rating button').on('click',function(){
    $("#finalRate").val($(this).attr("id"));
    $.each($("div.rating").find("button"),function(){
        $(this).find( "i.bi.bi-star" ).css( "display", "inline" );
        $(this).find( "i.bi.bi-star-fill" ).css( "display", "none" );
    }); 
    var rate = $(this).attr('id');
    var btns =  $('.rating button'); 
    $.each($("div.rating").find("button"),function(){
        //alert($(this).attr('id'));
        //alert(rate);
        if($(this).attr('id') > rate){
            return false;
        }else{
        $(this).find( "i.bi.bi-star-fill" ).css( "display", "inline" );
        $(this).find( "i.bi.bi-star-fill" ).css( "color", "white" );
        $(this).find( "i.bi.bi-star" ).css( "display", "none" );
        }
    });
});
    
</script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
       