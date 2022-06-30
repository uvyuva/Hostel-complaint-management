<!DOCTYPE html>
<html lang="en">

<head>
    <title>HMS</title>
    <!-- meta tags -->
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="keywords"
        content="Art Sign Up Form Responsive Widget, Audio and Video players, Login Form Web Template, Flat Pricing Tables, Flat Drop-Downs, Sign-Up Web Templates,
		Flat Web Templates, Login Sign-up Responsive Web Template, Smartphone Compatible Web Template, Free Web Designs for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design" />
    <!-- /meta tags -->
    <!-- custom style sheet -->
    <link href="web/css/style.css" rel="stylesheet" type="text/css" />
    <!-- /custom style sheet -->
    <!-- fontawesome css -->
    <link href="web/css/fontawesome-all.css" rel="stylesheet" />
    <!-- /fontawesome css -->
    <!-- google fonts-->
    <link
        href="//fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <!-- /google fonts-->

</head>


<body>

    <style>
        body {
            background-image: url('dumping/web_profile/images/h3.jpg');
            background-repeat: no-repeat;
        }
    </style>

    <h1>Hostel Complaint Management System</h1>
    <div class=" w3l-login-form">
        <h2>Student Login</h2>
        <form action="includes/login.inc.php" method="POST">

            <div class=" w3l-form-group">
                <label>Student USN:</label>
                <div class="group">
                    <i class="fas fa-user"></i>
                    <input type="text" class="form-control" name="student_roll_no" placeholder="USN" required="required"
                        id="usn" autocomplete="off" />
                </div>
            </div>
            <div class=" w3l-form-group">
                <label>Password:</label>
                <div class="group">
                    <i class="fas fa-unlock"></i>
                    <input type="password" class="form-control" name="pwd" placeholder="Password" required="required"
                        id="password" />
                </div>
            </div>
            <!--<div class="forgot">
                <a href="#">Forgot Password?</a>
                <p><input type="checkbox">Remember Me</p>
            </div>-->
            <button type="submit" name="login-submit" onclick="validation()">Login</button>
        </form>
        <p class=" w3l-register-p">Login as<a href="login-hostel_manager.php" class="register"> Hostel-Manager/Admin</a>
        </p>
        <p class=" w3l-register-p">Don't have an account?<a href="signup.php" class="register"> Sign up</a></p>
    </div>

    <!-- <div class="alert" id="alert" >
       hsdthstjh
      </div> -->

    <footer>
        <!-- <p class="copyright-agileinfo"> &copy; 2018 DBMS Project. All Rights Reserved | Design by <a href="https://www.linkedin.com/in/bharat-reddy/">Bharat-Prajwal-Rakesh</a></p> -->
    </footer>

    <script>
        let x = window.location.href;
        const list = x.split("?");
        console.log(list);

        if (list.length > 1) {
            err = list[list.length - 1]
            alert(err);
            //    alert = document.getElementById("alert")
            //    alert.innerHtml = err;
        }
    </script>
</body>

</html>