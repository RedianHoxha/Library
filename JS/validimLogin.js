$(function() {

    $("#username_error_message").hide();
    $("#password_error_message").hide();

    var error_username=false;
    var error_password = false;

    $("#username").focusout(function(){
       check_username();
    });
    $("#password").focusout(function() {
       check_password();
    });
    function check_username() {
       var usernameLength=$("#username").val().length;
       if(usernameLength < 5 || usernameLength ==' ' ){
         $("#username_error_message").html("Username nuk duhet te jete bosh dhe duhet te kete mbi 5 karaktere!");
         $("#username_error_message").show();
         $("#username").css("border-bottom","2px solid #F90A0A");
         $("#username_error_message").css("color","#962727");
         error_username= true;
       }
       else{
         $("#username_error_message").hide();
         $("#username").css("border-bottom","2px solid #34F458");
       }
    }

    function check_password() {
       var password_length = $("#password").val().length;
       if (password_length < 8) {
          $("#password_error_message").html("Passwordi duhet te permbaje 8 ose me shume karaktere!");
          $("#password_error_message").show();
          $("#password").css("border-bottom","2px solid #F90A0A");
          $("#password_error_message").css("color","#962727");
          error_password = true;
       } else {
          $("#password_error_message").hide();
          $("#password").css("border-bottom","2px solid #34F458");
       }
    }

    $("#login_form").submit(function() {
       error_username = false;
       error_password = false;

       check_username();
       check_password();

       if (error_username === false && error_password === false ) {
      
         return true;
      } else {
         alert("Ju lutem plotesoni formen sakte!");
         return false;
      }

    });
});
