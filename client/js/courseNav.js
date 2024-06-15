document.addEventListener('DOMContentLoaded', function(e){
    var courseId = $("#courseId").attr("value");
    $.get(
        "../server/getCourseInfo.php",
        {
            courseId: courseId,
        },
        function(data,status) {
            data = data && JSON.parse(data);
            if(status === "success") {
                $("#navContent").append(

                    `<table class="table table-striped">
                    <thead>
                    </thead>
                    <tbody id = "courseTable"></tbody></table>`);
                data.course.forEach((course) =>{
                    $("#courseTable").append(
                        ` <tr>
                        <th scope="row">Type</th>
                        <td>Semi-Private</td>
                </tr>
                <tr>    <th scope="row">Par</th>
                        <td>${course.par}</td>
                </tr>
                <tr>
                        <th scope="row">Length</th>
                        <td>${course.course_len}</td>
                </tr>
                <tr>
                        <th scope="row">Designer</th>
                        <td>${course.designer}</td>
                </tr>
                <tr>
                        <th scope="row">Slope</th>
                        <td>${course.slope}</td>
                </tr>
                <tr>
                        <th scope="row">Practice Facility</th>
                        <td>${course.practiceFacility}</td>
                </tr>
                <tr>
                        <th scope="row">Green Fees</th>
                        <td><a href="${course.greenFees}">Click Here</a></td>
                </tr>
                <tr>
                        <th scope="row">Membership</th>
                        <td>Yes <a href="${course.membership}">Click For Information</a></td>
                </tr>
                <tr>
                        <th scope="row">Address</th>
                        <td>${course.address}</td>
                </tr>
                <tr>
                        <th scope="row">Website</th>
                        <td><a href="${course.website}"</a>${course.website}</td>
                </tr>`);
                    }
                    )
                }
            }
            );

    $("#about").on('click',function() {
        e.preventDefault();
        $("ul.nav").find(".active").removeClass("active");
        $(this).addClass("active");
        $("#navContent").empty();
        var courseId = $("#courseId").attr("value");
        $.get(
            "../server/getCourseInfo.php",
            {
                courseId: courseId,
            },
            function(data,status) {
                data = data && JSON.parse(data);
                if(status === "success") {
                    $("#navContent").append(

                        `<table class="table table-striped">
                        <thead>
                        </thead>
                        <tbody id = "courseTable"></tbody></table>`);
                    data.course.forEach((course) =>{
                        $("#courseTable").append(
                            ` <tr>
                            <th scope="row">Type</th>
                            <td>Semi-Private</td>
                    </tr>
                    <tr>    <th scope="row">Par</th>
                            <td>${course.par}</td>
                    </tr>
                    <tr>
                            <th scope="row">Length</th>
                            <td>${course.length}</td>
                    </tr>
                    <tr>
                            <th scope="row">Designer</th>
                            <td>${course.designer}</td>
                    </tr>
                    <tr>
                            <th scope="row">Rating/Slope</th>
                            <td>${course.slope}</td>
                    </tr>
                    <tr>
                            <th scope="row">Practice Facility</th>
                            <td>${course.practiceFacility}</td>
                    </tr>
                    <tr>
                            <th scope="row">Green Fees</th>
                            <td><a href="${course.greenFees}">Click Here</a></td>
                    </tr>
                    <tr>
                            <th scope="row">Membership</th>
                            <td>Yes <a href="${course.membership}">Click For Information</a></td>
                    </tr>
                    <tr>
                            <th scope="row">Address</th>
                            <td>${course.address}</td>
                    </tr>
                    <tr>
                            <th scope="row">Website</th>
                            <td><a href="${course.website}"</a></td>
                    </tr>`);
                        }
                        )
                    }
                }
                );
            }); 
    $("#scorecard").on('click',function() {
        e.preventDefault();
        $("ul.nav").find(".active").removeClass("active");
        $(this).addClass("active");
        $("#navContent").empty();
        $("#navContent").append(
        '<div w-100><img src="./images/scorecards/'+courseId+'.jpg" alt="Scorecard" style ="width:100%;"></div>'
        );

    });
    $("#conditions").on('click',function() {

    });
    $("#reviews").on('click',function() {
        e.preventDefault();
        $("ul.nav").find(".active").removeClass("active");
        $(this).addClass("active");
        $("#navContent").empty();
        var courseId = $("#courseId").attr("value");
        $.get(
            "../server/getReviews.php",
            {
                courseId: courseId,
            },
            function(data,status) {
                data = data && JSON.parse(data);
                if(data.status === "success") {
                    $("#navContent").append(`<table class="table table-bordered">
                        <thead class = "table-primary">
                          <tr>
                           <th scope="col">Rating</th>
                            <th scope="col">Comments</th>
                            <th scope="col">User</th>
                            <th scope="col">Date</th>
                          </tr>
                        </thead>
                        <tbody id = "tableBody"class="table-dark"></tbody></table>`);

                    data.reviews.forEach((review) =>{
                        $("#tableBody").append(`
                          <tr>
                              <td>
                                  <div id = "reviewRate" class = "reviewRating mb-3"></div>
                              </td>
                              <td>
                                  <p>${review.comments}</p>
                              </td>
                              <td>
                                  <p>${review.userId}</p>
                              </td>
                              <td>
                                  <p>${review.date}</p>
                              </td>
                          <tr> `);
                          for(var i=1;i<6;i++){
                            if(parseInt(review.rating)>=i){
                                $("#reviewRate").append(`<span>
                                <i class ="bi bi-star-fill" style = "color:white;"></i>
                                </span>`);
                            }else{
                                $("#reviewRate").append(`<span>
                                <i class ="bi bi-star style = "color:white;"></i>
                                </span>`);
                            }
                          }
                        }
                        )
                    }
                }
                );
            }); 

});