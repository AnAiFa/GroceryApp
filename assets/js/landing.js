$(function() {

    console.log( "landing ready!" );
    $("#loading").hide();
    $("#loading").ajaxStart(function () {
        $(this).show();
    });

    $("#loading").ajaxStop(function () {
        $(this).hide();
    });
    $("#formSignUp input").keyup(function () {
        if ($("#inputPassword").val() == $("#inputConfirmPassword").val() != "") {
            $("#validityPassword").text("");
        } else {
            $("#validityPassword").text("* Password didn't match!");
        }
    });
    $("#btnSignUp").click(function (e) { 
        if ($("#formSignUp")[0].checkValidity()) {
            e.preventDefault();
            if ($("#inputPassword").val() == $("#inputConfirmPassword").val() != "") {
                $("#validityPassword").text("");
                $.ajax({
                    type: "post",
                    url: "action.php",
                    data: $("#formSignUp").serialize()+"&action=register",
                    success: function (response) {
                        console.log(response)
                    },
                });
                $('#signUpModal').modal('hide');
                $("#formSignUp")[0].reset();
            }
        }
        
    });
    

});

