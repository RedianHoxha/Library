$(function() {
    $("#fname_error_message").hide();
    $("#lname_error_message").hide();
    $("#username_error_message").hide();
    $("#email_error_message").hide();
  //  $("#tel_error_message").hide();
    $("#address_error_message").hide();
    $("#pass1_error_message").hide();
    $("#pass2_error_message").hide();

    var error_fname = false;
    var error_lname = false;
    var error_username = false;
    var error_email = false;
  //  var error_tel = false;
    var error_address=false;
    var error_pass1 = false;
    var error_pass2 = false;

    $("#form_fname").focusout(function(){
    check_fname();
    });
    $("#form_lname").focusout(function() {
    check_lname();
    });
    $("#username").focusout(function() {
        check_username();
    });
    $("#form_email").focusout(function() {
    check_email();
    });
    // $("#form_tel").focusout(function() {
    //     check_tel();
    //     });
    $("#form_address").focusout(function() {
        check_address();
    });
    $("#form_password").focusout(function() {
    check_password();
    });
    $("#form_retype_password").focusout(function() {
    check_retype_password();
    });

    function check_fname() {
    var pattern = /^[a-zA-Z]*$/;
    var fname = $("#form_fname").val();
    if (pattern.test(fname) && fname !== '') {
        $("#fname_error_message").hide();
        $("#form_fname").css("border-bottom","2px solid #34F458");
    } else {
        $("#fname_error_message").html("Emri duhet te permbaje vetem shkronja dhe nuk duhet bosh!");
        $("#fname_error_message").show();
        $("#form_fname").css("border-bottom","2px solid #F90A0A");
        $("#fname_error_message").css("color","#9c0808");
        error_fname = true;
    }
    }

    function check_lname() {
    var pattern = /^[a-zA-Z]*$/;
    var sname = $("#form_lname").val()
    if (pattern.test(sname) && sname !== '') {
        $("#lname_error_message").hide();
        $("#form_lname").css("border-bottom","2px solid #34F458");
    } else {
        $("#lname_error_message").html("Mbiemri duhet te permbaje vetem shkronja dhe nuk duhet bosh!");
        $("#lname_error_message").show();
        $("#form_lname").css("border-bottom","2px solid #F90A0A");
        $("#lname_error_message").css("color","#9c0808");
        error_lname = true;
    }
    }
    function check_username() {
        var usernameLength=$("#username").val().length;
        if(usernameLength < 5 || usernameLength ==' ' ){
          $("#username_error_message").html("Username nuk duhet te jete bosh dhe duhet te kete mbi 5 karaktere!");
          $("#username_error_message").show();
          $("#username").css("border-bottom","2px solid #F90A0A");
          $("#username_error_message").css("color","#9c0808");
          error_username= true;
        }
        else{
          $("#username_error_message").hide();
          $("#username").css("border-bottom","2px solid #34F458");
        }
     }

    function check_email() {
        var pattern = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
        var email = $("#form_email").val();
        if (pattern.test(email) && email !== '') {
            $("#email_error_message").hide();
            $("#form_email").css("border-bottom","2px solid #34F458");
        } else {
            $("#email_error_message").html("Invalid Email");
            $("#email_error_message").show();
            $("#form_email").css("border-bottom","2px solid #F90A0A");
            $("#email_error_message").css("color","#9c0808");
            error_email = true;
        }
   
    }
    // function check_tel() {
    //     var tel = $("#form_tel").val();
    //     if (tel !== '') {
    //         $("#tel_error_message").hide();
    //         $("#form_tel").css("border-bottom","2px solid #34F458");
    //     } else {
    //         $("#tel_error_message").html("Vendoseni nr ne formatin e duhur");
    //         $("#tel_error_message").show();
    //         $("#form_tel").css("border-bottom","2px solid #F90A0A");
    //         $("#tel_error_message").css("color","#9c0808");
    //         error_tel = true;
    //     }
    //     }
    function check_address() {
            var pattern = /^[a-zA-Z0-9-\/] ?([a-zA-Z0-9-\/]|[a-zA-Z0-9-\/] )*[a-zA-Z0-9-\/]$/;
            var address = $("#form_address").val();
            if (pattern.test(address) && address !== '') {
                $("#address_error_message").hide();
                $("#form_address").css("border-bottom","2px solid #34F458");
            } else {
                $("#address_error_message").html("Invalid Address");
                $("#address_error_message").show();
                $("#form_address").css("border-bottom","2px solid #F90A0A");
                $("#address_error_message").css("color","#9c0808");
                error_address = true;
            }
    }
    function check_password() {
    var password_length = $("#form_password").val().length;
    if (password_length < 8) {
        $("#pass1_error_message").html("Passwordi duhet te permbaje te pakten 8 karaktere!");
        $("#pass1_error_message").show();
        $("#form_password").css("border-bottom","15px solid #F90A0A");
        $("#pass1_error_message").css("color","#9c0808");
        error_pass1 = true;
    } else {
        $("#pass1_error_message").hide();
        $("#form_password").css("border-bottom","15px solid #34F458");
    }
    }

    function check_retype_password() {
    var password = $("#form_password").val();
    var retype_password = $("#form_retype_password").val();
    if (password !== retype_password) {
        $("#pass2_error_message").html("Passwordet nuk perputhen!");
        $("#pass2_error_message").show();
        $("#orm_retypef_password").css("border-bottom","15px solid #F90A0A");
        $("#pass2_error_message").css("color","#9c0808");
        error_pass2 = true;
    } else {
        $("#pass2_error_message").hide();
        $("#form_retype_password").css("border-bottom","15px solid #34F458");
    }
    }

    $("#forme_regjistrimi").submit(function() {
        var error_fname = false;
        var error_lname = false;
        var error_username = false;
        var error_email = false;
        var error_address=false;
        var error_pass1 = false;
        var error_pass2 = false;

        check_fname();
        check_lname();
        check_username();
        check_email();
        check_address();
        check_pass1();
        check_retype_pass2();


        if (error_fname === false && error_lname === false && error_username === false && error_email === false && error_address === false && error_pass1 === false && error_pass2 === false ) {
            alert("Logimi i suksesshem!");
            return true;
         } else {
            alert("Ju lutem plotesoni formen sakte!");
            return false;
         }
    });
    });