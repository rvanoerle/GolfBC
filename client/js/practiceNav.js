document.addEventListener('DOMContentLoaded', function(e){

    $("button").on('click',function() {
      e.preventDefault();
      $("ul.nav").find(".active").removeClass("active");
      $(this).addClass("active");
        $("#practiceContent").empty();
        pNav = $(this).attr("id");

        if(pNav == "ranges"){
          $.get(
            "../server/getRanges2.php",
            {
                pNav: pNav,
            },
            function(data,status) {
                data = data && JSON.parse(data);
                if(status === "success") {
                    data.practice.forEach((practice) =>{
                        $("#practiceContent").append(
                          `
                          <div class = "col-4 col-xs-12">
                          <div class="card mb-3 mt-2 bg-dark text-light text-center" style="min-height:400px;">
                          <a class="bgimg" href="${practice.website}">
                                   <div id = "cImg" class ="z-0" style = "background-image:url(images/ranges/${practice.id}.jpg);height:100%;width:100%;position:absolute;opacity:60%;">
                                   </div>
                                 </a>
                                   <div class="z-1 card-body top-50 start-50 translate-middle" style="position:absolute;width:100%;"> 
                                     <h2 id = "name" class="card-title" style = "font-size:30px;">${practice.name}</h2>
                                     <p class="bottom-0 end-0"><i>Range✓ Practice Green✓ Short Game Area✓</i></p>
                                     <p class="card-text mb-0 mt-1 mb-4"><i>${practice.address}</i></p>
                                     <span class="bottom-0 end-0" style = "padding:10px;"><a href="${practice.website}" class="btn btn-dark">Website</a></span>
                                   </div>
                               

                               </div>
                              </div>`
                          );
                        }
                        )
                    }
                }
                );
              }
              if(pNav == "sims"){
                $.get(
                  "../server/getSim.php",
                  {
                      pNav: pNav,
                  },
                  function(data,status) {
                      data = data && JSON.parse(data);
                      if(status === "success") {
                          data.practice.forEach((practice) =>{
                              $("#practiceContent").append(
                                `
                                <div class = "col-4 col-xs-12">
                                <div class="card mb-3 mt-2 bg-dark text-light text-center" style="min-height:400px;">
                                <a class="bgimg" href="${practice.website}">
                                         <div id = "cImg" class ="z-0" style = "background-image:url(images/ranges/sim.jpg);height:100%;width:100%;position:absolute;opacity:60%;">
                                         </div>
                                       </a>
                                         <div class="z-1 card-body top-50 start-50 translate-middle" style="position:absolute;width:100%;"> 
                                           <h2 id = "name" class="card-title" style = "font-size:30px;">${practice.name}</h2>
                                           <p class="card-text mb-0 mt-1 mb-4"><i>${practice.address}</i></p>
                                           <span class="bottom-0 end-0" style = "padding:10px;"><a href="${practice.website}" class="btn btn-dark">Website</a></span>
                                         </div>
                                     
      
                                     </div>
                                    </div>`
                                );
                              }
                              )
                          }
                      }
                      );
                    }
                    if(pNav == "instruct"){
                      $.get(
                        "../server/getInstructors.php",
                        {
                            pNav: pNav,
                        },
                        function(data,status) {
                            data = data && JSON.parse(data);
                            if(status === "success") {
                                data.practice.forEach((practice) =>{
                                    $("#practiceContent").append(
                                      `
                                      
                                <div class = "col-4 col-xs-12">
                                <div class="card mb-3 mt-2 bg-dark text-light text-center" style="min-height:400px;">
                                <a class="bgimg" href="${practice.website}">
                                         <div id = "cImg" class ="z-0" style = "background-image:url(images/ranges/${practice.name}.jpg);height:100%;width:100%;position:absolute;opacity:60%;">
                                         </div>
                                       </a>
                                         <div class="z-1 card-body top-50 start-50 translate-middle" style="position:absolute;width:100%;"> 
                                           <h2 id = "name" class="card-title" style = "font-size:30px;">${practice.name}</h2>
                                           <p class="card-text mb-0 mt-1 mb-4"><i>${practice.location}</i></p>
                                           <span class="bottom-0 end-0" style = "padding:10px;"><a href="${practice.website}" class="btn btn-dark">Website</a></span>
                                         </div>
                                     
      
                                     </div>
                                    </div>`
                                      );
                                    }
                                    )
                                }
                            }
                            );
                          }
                                
      
});
});