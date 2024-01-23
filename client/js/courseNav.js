document.addEventListener('DOMContentLoaded', function(e){
       
    $("#about").on('click',function() {
        e.preventDefault();
        $("ul.nav").find(".active").removeClass("active");
        $(this).addClass("active");
        $("#navContent").empty();
        sortBy = $(this).attr("id");
        /*$.get(
            "sortCourses.php",
            {
                courseNav: courseNav,
            },
            function(data,status) {
                data = data && JSON.parse(data);
                if(status === "success") {
                    data.courses.forEach((course) =>{
                        }
                        )
                    }
                }
                );
            }); */
            $("#navContent").append(

                `<table class="table table-striped">
                <thead>
                </thead>
                <tbody>
                  <tr>
                          <th scope="row">Type</th>
                          <td>Semi-Private</td>
                  </tr>
                  <tr>    <th scope="row">Par</th>
                          <td>72</td>
                  </tr>
                  <tr>
                          <th scope="row">Length</th>
                          <td>6927</td>
                  </tr>
                  <tr>
                          <th scope="row">Designer</th>
                          <td>Thomas Mcbroom</td>
                  </tr>
                  <tr>
                          <th scope="row">Slope</th>
                          <td>133</td>
                  </tr>
                  <tr>
                          <th scope="row">Practice Facility</th>
                          <td>Range✓ Practice Green✓ Short Game Area✓</td>
                  </tr>
                  <tr>
                          <th scope="row">Green Fees</th>
                          <td><a href="https://www.golftowerranch.com/wp-content/uploads/2023/11/2024-Rates-Sheet.pdf">Click Here</a></td>
                  </tr>
                  <tr>
                          <th scope="row">Membership</th>
                          <td>Yes <a href="https://www.golftowerranch.com/membership/">Click For Information</a></td>
                  </tr>
                  <tr>
                          <th scope="row">Address</th>
                          <td>1789 Tower Ranch Drive, Kelowna, V1P 1T2</td>
                  </tr>
                  <tr>
                          <th scope="row">Website</th>
                          <td><a href="https://www.golftowerranch.com/">"https://www.golftowerranch.com/"</a></td>
                  </tr>
                </tbody>
              </table>`


                );
    });
    $("#scorecard").on('click',function() {
        e.preventDefault();
        $("ul.nav").find(".active").removeClass("active");
        $(this).addClass("active");
        $("#navContent").empty();
        $("#navContent").append(
        '<img src="./images/scorecards/tower.jpg" alt="Scorecard">'
        );

    });
    $("#conditions").on('click',function() {

    });
    $("#reviews").on('click',function() {

    });

});