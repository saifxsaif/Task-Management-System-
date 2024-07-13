<!DOCTYPE html>
<html lang="en">

<head>
    <?php
        $pageTitle = "Employee Login"; // Set the custom title for this page
        $cssFileName = "css/login.css";
        include "head.php"; // Include the common head section
    ?>
    <style>
        .container .col1 {
            background-image: url("images/employeeLogin.png");
        }
    </style>
</head>

<body>
    
    <div class="container">
        <div class="col1">
        </div>
        <div class="col2">
            <div class="row1">
                <h3>Welcome Back!</h3>
                <p>To keep connected with us please login to your account</p>
            </div>
            <div class="row2">
                <form action="php/process.php" method="post">
                    <div>
                        <span><i class="fas fa-envelope"></i></span>
                        <input type="email" id="email" name="email" placeholder=" Email Address" required/>
                    </div>
                    <div>
                        <span><i class="fa-solid fa-lock"></i></span>
                        <input type="password" id="pass" name="pass" placeholder=" Password" required/>
                    </div>
                    <input type="submit" value="Sign In" name="employeeLogin">
                    <p class="hint-text"><a href="#">Forgot Password?</a></p>
                </form>
            </div>
        </div>
    </div>
</body>
</html>