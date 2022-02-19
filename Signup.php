<?php include 'connection.php'?> 
<!DOCTYPE html>
<html lang="en">

<head>
    <title>SignUp Page </title>
    <link rel="stylesheet" href="style.css" />
    <script src="https://code.jquery.com/jquery-3.2.1.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.js"></script>


</head>

<body>
    <nav>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="login.php">Login</a></li>
            <li><a href="signup.php">Signup</a></li>

        </ul>
    </nav>

    <div class="signup-box">
        <h1>Sign Up</h1>

        <form id="registration_form" action="dboperation.php" method="post">
            <label>Name</label>
            <input type="text" id="form_name" placeholder="" name="Name">
            <span class="error_form" id="name_error_message"></span>
            <label>Email</label>
            <input type="email" id="form_email" placeholder=""  name="Email">
            <span class="error_form" id="email_error_message"></span>
            <label>Age</label>
            <input type="number" min="0" id="form_ag" placeholder=""  name="Age">
            <span class="error_form" id="ag_error_message"></span>
            <label>salary</label>
            <input type="number" min="0" id="form_sal" placeholder=""  name="Salary">
            <span class="error_form" id="sal_error_message"></span>
            <label>Password</label>
            <input type="password" id="form_password" placeholder=""  name="Password">
            <span class="error_form" id="password_error_message"></span>
            <label>Confirm Password</label>
            <input type="password" id="form_retype_password" placeholder="">
            <span class="error_form" id="retype_password_error_message"></span>
            <input type="submit" value="submit">

        </form>


    </div>
    <script type="text/javascript">
        $(function() {

            $("#name_error_message").hide();
            $("#email_error_message").hide();
            $("#ag_error_message").hide();
            $("#sal_error_message").hide();
            $("#password_error_message").hide();
            $("#retype_password_error_message").hide();

            var error_name = false;
            var error_email = false;
            var error_ag = false;
            var error_sal = false;
            var error_password = false;
            var error_retype_password = false;

            $("#form_name").focusout(function() {
                check_name();
            });
            $("#form_email").focusout(function() {
                check_email();
            });
            $("#form_ag").focusout(function() {
                check_ag();
            });
            $("#form_sal").focusout(function() {
                check_sal();
            });
            $("#form_password").focusout(function() {
                check_password();
            });
            $("#form_retype_password").focusout(function() {
                check_retype_password();
            });



            function check_name() {
                var pattern = /^[a-zA-Z]*$/;


                var name = $("#form_name").val();
                if (pattern.test(name) && name !== '') {
                    $("#name_error_message").hide();
                    $("#form_name").css("border-bottom", "2px solid #34F458");
                } else {
                    $("#name_error_message").html("Should contain only Characters");
                    $("#name_error_message").show(" ");
                    $("#form_name").css("border-bottom", "2px solid #F90A0A");
                    error_name = true;
                }
            }

            function check_ag() {
                var Age;
                if (age == "") {
                    $("#ag_error_message").html("please enter your age");
                    $("#ag_error_message").show();
                    $("#form_ag").css("border-bottom", "2px solid #F90A0A");

                    error_ag = true;
                } else {
                    $("#ag_error_message").hide();
                    $("#form_ag").css("border-bottom", "2px solid #34F458");
                }
            }

            function check_sal() {
                var salary;
                if (sal == "") {
                    $("#sal_error_message").html("please enter your salary");
                    $("#sal_error_message").show();
                    $("#form_sal").css("border-bottom", "2px solid #F90A0A");

                    error_sal = true;
                } else {
                    $("#sal_error_message").hide();
                    $("#form_sal").css("border-bottom", "2px solid #34F458");
                }
            }





            function check_password() {
                var password_length = $("#form_password").val().length;
                if (password_length < 8) {
                    $("#password_error_message").html("Atleast 8 Characters");
                    $("#password_error_message").show();
                    $("#form_password").css("border-bottom", "2px solid #F90A0A");
                    error_password = true;
                } else {
                    $("#password_error_message").hide();
                    $("#form_password").css("border-bottom", "2px solid #34F458");
                }
            }

            function check_retype_password() {
                var password = $("#form_password").val();
                var retype_password = $("#form_retype_password").val();
                if (password !== retype_password) {
                    $("#retype_password_error_message").html("Passwords Did not Matched");
                    $("#retype_password_error_message").show();
                    $("#form_retype_password").css("border-bottom", "2px solid #F90A0A");
                    error_retype_password = true;
                } else {
                    $("#retype_password_error_message").hide();
                    $("#form_retype_password").css("border-bottom", "2px solid #34F458");
                }
            }

            function check_email() {
                var pattern = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
                var email = $("#form_email").val();
                if (pattern.test(email) && email !== '') {
                    $("#email_error_message").hide();
                    $("#form_email").css("border-bottom", "2px solid #34F458");
                } else {
                    $("#email_error_message").html("Invalid Email");
                    $("#email_error_message").show();
                    $("#form_email").css("border-bottom", "2px solid #F90A0A");
                    error_email = true;
                }
            }

            $("#registration_form").submit(function() {
                error_name = false;
                error_email = false;
                error_ag = false;
                error_sal = false;
                error_password = false;
                error_retype_password = false;

                check_name();
                check_email();
                check_ag();
                check_sal();
                check_password();
                check_retype_password();

                if (error_name === false && error_email === false && error_age === false && error_sal === false && error_password === false && error_retype_password === false) {
                    alert("Registration Successfull");
                    return true;
                } else {
                    alert("Please Fill the form Correctly");
                    return false;
                }

            });
        });
    </script>
</body>

</html>