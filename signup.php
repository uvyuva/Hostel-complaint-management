<!DOCTYPE html>
<html lang="en">

<head>
    <title>SIGNUP PAGE</title>
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
    <h1>Hostel Complaint Management System</h1>
    <div class=" w3l-login-form">
        <h2>Sign Up Here</h2>
        <form action="includes/signup.inc.php" method="POST">

            <div class=" w3l-form-group">
                <label>Student USN</label>
                <div class="group">
                    <i class="fas fa-id-badge"></i>
                    <input type="text" class="form-control" name="student_roll_no" placeholder="USN" required="required"
                        autocomplete="off" onchange="u_validation()" id="usn" />
                </div>
            </div>
            <div class=" w3l-form-group">
                <label>First Name</label>
                <div class="group">
                    <i class="fas fa-user"></i>
                    <input type="text" class="form-control" name="student_fname" placeholder="First Name"
                        required="required" />
                </div>
            </div>
            <div class=" w3l-form-group">
                <label>Last Name</label>
                <div class="group">
                    <i class="fas fa-user"></i>
                    <input type="text" class="form-control" name="student_lname" placeholder="Last Name"
                        required="required" />
                </div>
            </div>
            <div class=" w3l-form-group">
                <label>Mobile No</label>
                <div class="group">
                    <i class="fas fa-phone"></i>
                    <input type="text" class="form-control" name="mobile_no" placeholder="Mobile No" required="required"
                        id="mobile" onchange="m_validation()" />
                </div>
            </div>
            <div class=" w3l-form-group">
                <label>Department</label>
                <div class="group">
                    <i class="fas fa-graduation-cap"></i>
                    <div class="contact-fields-w3ls">
                        <select class="form-select" style="width: 340px;
								  height: 25px;" name="department" aria-label="Default select example">
                            <option>Department</option>
                            <option value="CSE">CSE</option>
                            <option value="ISE">ISE</option>
                            <option value="ECE">ECE</option>
                            <option value="Mechanical">Mechanical</option>
                            <option value="Civil">Civil</option>
                            <option value="MBA">MBA</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class=" w3l-form-group">
                <label>Year of Study</label>
                <div class="group">
                    <i class="fas fa-calendar"></i>
                    <div class="contact-fields-w3ls">
                        <select class="form-select" style="width: 340px;
                                      height: 25px; " name="year_of_study" aria-label="Default select example">
                            <option>Year Of Study</option>
                            <option value="4th Year">4th Year</option>
                            <option value="3rd Year">3rd Year</option>
                            <option value="2nd year">2nd year</option>
                            <option value="1st year">1st year</option>
                            <option value="MBA">MBA</option>
                        </select>
                    </div>
                </div>
            </div>

            <!--  <div class=" w3l-form-group">
                <label>Email:</label>
                <div class="group">
                    <i class="fas fa-envelope"></i>
                    <input type="text" class="form-control" name="mail" placeholder="Email" required="required" />
                </div>
            </div>-->

            <div class=" w3l-form-group">
                <label>Password:</label>
                <div class="group">
                    <i class="fas fa-unlock"></i>
                    <input type="password" class="form-control" name="pwd" placeholder="Password" required="required"
                        id="password" onchange="p_validation()" />
                </div>
            </div>

            <div class=" w3l-form-group">
                <label>Confirm Password:</label>
                <div class="group">
                    <i class="fas fa-unlock"></i>
                    <input type="password" class="form-control" name="confirmpwd" placeholder="Confirm Password"
                        required="required" />
                </div>
            </div>
            <!--<div class="forgot">
                <a href="#">Forgot Password?</a>
                <p><input type="checkbox">Remember Me</p>
            </div>-->
            <button type="submit" name="signup-submit" id="sign_up">Sign Up</button>
        </form>
        <p class=" w3l-register-p">Already a member?<a href="index.php" class="register"> Login</a></p>
    </div>
    <footer>
        <!-- <p class="copyright-agileinfo"> &copy; 2018 DBMS Project. All Rights Reserved | Design by <a href="https://www.linkedin.com/in/bharat-reddy/">Bharat-Prajwal-Rakesh</a></p> -->
    </footer>

    <style>
        .error {
            background-color: rgb(255, 0, 0) !important;
        }
    </style>
    <script>
        let m_val = false;
        let u_val = false;
        let p_val = false;
        function u_validation() {
            // let u_val=false;
            let usn = document.getElementById("usn");
            let usn_r = /4[a-zA-Z]+[0-9]+[a-zA-Z]+[0-9]+/i;
            if (usn_r.test(usn.value)) {
                u_val = true;
                usn.classList.remove("error");
                validation();

            }
            else {
                usn.classList.add("error");
                validation();
            }
        }

        function m_validation() {
            // let m_val=false;
            let mobile = document.getElementById("mobile");
            let mobile_r = /[0-9]+/i;
            if (mobile_r.test(mobile.value)) {
                m_val = true;
                mobile.classList.remove("error");
                validation();

            }
            else {
                mobile.classList.add("error");
                validation();
            }
        }

        function p_validation() {
            // let p_val=false;
            let password = document.getElementById("password");
            let pwd = password.value;
            if (pwd.length >= 6) {
                p_val = true;
                password.classList.remove("error");
                validation();
            }
            else {

                password.classList.add("error");
            }
        }

        function validation() {
            console.log("@val");
            let sub_button = document.getElementById("sign_up");
            if (!u_val && !m_val && !p_val) {
                sub_button.setAttribute("hidden", "");

            }
            else {
                sub_button.removeAttribute("hidden");
            }
        }


    </script>

</body>

</html>