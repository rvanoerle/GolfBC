document.addEventListener('DOMContentLoaded', function(e){
  $("#close").click(function (e) {
    $("#failedReview").attr("hidden","true");
  });
    $("#sub").click(function (e) {
        $("#failedReview").attr("hidden","true");
      e.preventDefault();
      let courseId = $("#courseId").val();
      let user = $("#userId").val();
      let comments = $("#reviewComments").val();
      let rating = $("#finalRate").val();
      if (comments && rating) {
        $.post(
          "../server/submitReview.php",
          {
            courseId: courseId,
            user: user,
            comments: comments,
            rating: rating,
          },
          function (data, status) {
            data = data && JSON.parse(data);
            if (data.status === "success") {
                $("#failedReview").removeAttr("hidden");
                $("#failedReview").attr('class', 'alert alert-success');
                $("#failedReview").text(data.message);
              } else {
                $("#failedReview").removeAttr("hidden");
                $("#failedReview").text(data.message);
                
              }
          }
        );
      }else{
        $("#failedReview").removeAttr("hidden");
        $("#failedReview").text("Please fill in review.");
      }
    });
  
  })