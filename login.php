<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login </title>
    <link rel="stylesheet" href="style.css">
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
    <div class="login-box">
        <form id="login_form" method="post" action="loginauth.php">
            <h1>Login</h1>
            <label>Email</label>
            <input type="email" id="form_email" name="email">
            <span class="error_form" id="email_error_message"></span>
            <label>Password</label>
            <input type="password" id="form_password" placeholder=""  name="password">
            <span class="error_form" id="password_error_message"></span>
            <input type="submit" value="Log In">

        </form>

    </div>
    <script type="text/javascript">
        $(function() {


            $("#email_error_message").hide();

            $("#password_error_message").hide();


            var error_email = false;

            var error_password = false;



            $("#form_email").focusout(function() {
                check_email();
            });

            $("#form_password").focusout(function() {
                check_password();
            });






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

            $("login_form").submit(function() {

                error_email = false;
                error_password = false;


                check_email();

                check_password();


                if (error_email === false && error_password === false) {
                    alert("Login Successfull");
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