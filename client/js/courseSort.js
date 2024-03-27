document.addEventListener('DOMContentLoaded', function(e){

    $(".srt").on('click',function() {
        e.preventDefault();
        $("#cards").empty();
        sortBy = $(this).attr("id");
        $.get(
            "sortCourses.php",
            {
                sortBy: sortBy,
            },
            function(data,status) {
                data = data && JSON.parse(data);
                if(status === "success") {
                    data.courses.forEach((course) =>{
                        $("#cards").append(

                        `
                        <div class = "col-4 col-xs-12">
                        
                        <div class="card mb-3 mt-2 bg-dark text-light text-center" style="min-height:400px;border-color:#d3d3d3;">
                        <a class="bgimg" href="home.php">
                                 <div id = "cImg" class ="z-0" style = "background-image:url(images/courses/${course.id}.jpg);height:100%;width:100%;position:absolute;opacity:60%;">
                                 </div>
                               </a>
                                 <div class="z-1 card-body top-50 start-50 translate-middle" style="position:absolute;">
                                 <h2 id = "name" class="card-title" style = "font-size:30px;">${course.name}</h2>
                                   <p class="card-text mb-0 mt-1"><i>Par ${course.par}</i></p>
                                   <p class="card-text mt-0 mb-4"><i>${course.course_len} yds</i></p>
                                   <span class="bottom-0 end-0" style = "padding:10px;"><a href="" class="btn btn-primary">View Course</a></span>
                                 </div>
                             
                               <div class = "z-1 badge " style="width: 6rem;height:2rem;position:absolute;">
                                  <span class = "fs-5">${course.rating}
                                  <button id = "rate" class="btn m-0 p-0" type="button" aria-expanded="false">
                                  <i class="bi bi-star"></i>
                                  <i class ="bi bi-star-fill"></i>
                                 </button></span>
                               </div>
                               <div class = "z-1 badge  text-wrap top-0 end-0" style="width:6rem;height:2rem;position:absolute;">
                                 <h5>${course.cost}<h5>
                               </div>
                        </div>
                        </div>
                        `
                        );
                    }
                    )
                }
            }
            );
        });
});
       
                    