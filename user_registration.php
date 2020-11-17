<!DOCTYPE html>
<html>

<head>
    <title>sign up form</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>

<body>

    <div class="container">
        <h4 class="text-success text-center">
            Sign Up
        </h4>
        <div class="col-lg-8 m-auto d-block">
            <form name="myform" class="bg-light" action="registration.php" onsubmit="return validation()" method="POST">
                <div class="form-group">
                    <div class="row">
                        <div class="col-lg-6 m-auto d-block">
                            First Name<input type="text" class="form-control" id="firstname" name="firstname" placeholder="first name" autocomplete="off" required>
                            <span id="fname" class="text-danger font-weight-bold"></span>
                        </div>
                        <div class="col-lg-6 m-auto d-block">
                            Surname<input type="text" class="form-control" id="surname" name="surname" placeholder="surname" autocomplete="off" required>
                            <span id="sname" class="text-danger font-weight-bold"></span>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="row">
                        <div class="col-lg-6 m-auto d-block">
                            Email<input type="email" class="form-control" id="email" name="email" placeholder="email" autocomplete="off" required>
                            <span id="mail" class="text-danger font-weight-bold"></span>
                        </div>
                        <div class="col-lg-6 m-auto d-block">
                            Phone Number<input type="text" class="form-control" id="phonenumber" name="phonenumber" placeholder="mobile number" autocomplete="off">
                            <span id="phone" class="text-danger font-weight-bold"></span>
                        </div>
                    </div>
                </div>





                <div class="form-group">
                    Username<input type="text" class="form-control" id="username" name="username" placeholder="username" autocomplete="off" required>
                    <span id="uname" class="text-danger font-weight-bold"></span>
                </div>


                <div class="form-group">
                    <div class="row">
                        <div class="col-lg-6 m-auto d-block">
                            Password<input type="password" class="form-control" id="userpassword" name="userpassword" placeholder="password" autocomplete="off" required>
                            <span id="passwords" class="text-danger font-weight-bold"></span>
                        </div>
                        <div class="col-lg-6 m-auto d-block">
                            Confirm Password<input type="password" class="form-control" id="confirmpassword" name="confirmpassword" placeholder="confirm password" autocomplete="off" required>
                            <span id="confirmpasswords" class="text-danger font-weight-bold"></span>
                        </div>
                    </div>
                </div>

                <div class="form-group">

                    Nationality  <input type="text" class="form-control" id="nationality" name="nationality" placeholder="Nationality " autocomplete="off" required>
                    <span id="nationality_country" class="text-danger font-weight-bold"></span>
                </div>


                <div class="form-group">

                    Identification number <input type="text" class="form-control" id="identificationNo" name="identificationNo" placeholder="identification number" autocomplete="off" required>
                    <span id="identity" class="text-danger font-weight-bold"></span>
                </div>
                <br>

                <div class="form-group">
                    <div class="row">
                        
                        <div class="col-md-4">
                            <div>Gender:</div>
                            <div>
                                <input type="radio" name="gender" value="male">Male<br>
                                <input type="radio" name="gender" value="female">Female
                            </div>
                        </div>
                        <div class="col-md-4">

                            Your image<input type="file" name="picture" onchange="document.getElementById('file_input').value = this.value;">

                        </div>
                    </div>
                </div>

                <div>
                    <input type="submit" value="Sign Up" name="Submit" class="btn btn-success">
                    <a href="index.php" class="btn btn-danger">Cancel</a>
                </div>
                <div class="form-group">
                    <h5 class="text-center text-light"><?= $msg; ?></h5>
                </div>
            </form>
        </div>
        <script type="text/javascript">
            function validation() {
                var email = document.getElementById('email').value;
                var confirmpassword = document.getElementById('confirmpassword').value;

                var firstname = document.getElementById('firstname').value;
                if (!isNaN(firstname)) {
                    document.getElementById('fname').innerHTML = " ** Please ONLY characters are allowed";
                    return false;
                }

                var surname = document.getElementById('surname').value;
                if (!isNaN(surname)) {
                    document.getElementById('sname').innerHTML = " ** Please ONLY characters are allowed";
                    return false;
                }

                var phonenumber = document.getElementById('phonenumber').value;
                if (isNaN(phonenumber)) {
                    document.getElementById('phone').innerHTML = " ** Please enter numbers only";
                    return false;
                }
                if (phonenumber.length != 10) {
                    document.getElementById('phone').innerHTML = " ** phone number must have 10 numbers only";
                    return false;
                }

                var username = document.getElementById('username').value;
                if ((username.length) <= 2 || (username.length > 20)) {
                    document.getElementById('uname').innerHTML = " ** username must be between 3 and 10 characters";
                    return false;
                }

                var userpassword = document.getElementById('userpassword').value;
                if ((userpassword.length) <= 2 || (userpassword.length > 20)) {
                    document.getElementById('passwords').innerHTML = " ** password must be between 3 and 10 characters";
                    return false;
                }
                if (userpassword != confirmpassword) {
                    document.getElementById('confirmpasswords').innerHTML = " ** passwords are not matching";
                    return false;
                }


                if (confirmpassword == "") {
                    document.getElementById('confirmpasswords').innerHTML = " ** Please fill in the confrm password";
                    return false;
                }

                var identificationNo = document.getElementById('identificationNo').value;
                if ((identificationNo.length) <= 2 || (identificationNo.length > 20)) {
                    document.getElementById('identity').innerHTML = " ** identificationNo must be between 3 and 10 characters";
                    return false;
                }


                if (email == "") {
                    document.getElementById('mail').innerHTML = "**Please fill in your email";
                    return false;
                }

                if (email.indexOf('@') <= 0) {
                    document.getElementById("mail").innerHTML = "** @ invalid position";
                    return false;

                }
                if ((email.charAt(email.length - 4) != '.') && (email.charAt(email.length - 3) != '.')) {
                    document.getElementById("mail").innerHTML = "**invalid email";
                    return false;
                }
            }
        </script>
</body>

</html>