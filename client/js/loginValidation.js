document.addEventListener('DOMContentLoaded', function(e){
  $("#loginButton").click(function (e) {
    e.preventDefault();
    let username = $("#accEmail").val();
    let password = $("#accPassword").val();
    if (username && password) {
      $.post(
        "../server/loginValidation.php",
        {
          username: username,
          password: password,
        },
        function (data, status) {
          data = data && JSON.parse(data);
          if (data.status === "success") {
              window.location.replace("home.php");
            } else {
              $("#failedLogin").removeAttr("hidden");
              $("#failedLogin").text(data.message);
              
            }
        }
      );
    }else{

    }
  });

})