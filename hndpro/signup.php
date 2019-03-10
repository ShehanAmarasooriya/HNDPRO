<?php require_once("./include/DB.php"); ?>
<?php require_once("./include/session.php"); ?>
<?php require_once("./include/function.php"); ?>

<?php
    if(isset($_POST["btn_signup"])){
        
        //grab the form data
        $username = mysqli_real_escape_string($conn, $_POST["user_name"]);
        $email = mysqli_real_escape_string($conn, $_POST["signup_email"]);
        $password = mysqli_real_escape_string($conn, $_POST["signup_password"]);
        $password_c = mysqli_real_escape_string($conn, $_POST["signup_password_confirm"]);
        
        
        //check empty field
        if(empty($username) || empty($email) || empty($password) || empty($password_c)){
            $_SESSION["errMsg"] = "empty";
            redirect_to("signup.php");
            return;
        }

        //check username or email is already exist in database
        if(isEmailAlredyExist($email) || isUserNameAlredyExist($username)){
            $_SESSION["errMsg"] = "UserName is already there";
            redirect_to("signup.php");
            return;
        }
        

        //check passwords fields are same
        if($password != $password_c){
            $_SESSION["errMsg"] = "passwords are not same";
            redirect_to("signup.php");
            return;
        }

        $sql = "INSERT INTO login(name, email,password) VALUES('$username','$email','$password')";
        
        if(query_execute($sql) == true){
            redirect_to("login.php"); 
        }
        else{
            $_SESSION["errMsg"] = "somthing went wrong";
            redirect_to("signup.php");
        }
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Eventbrite</title>
    <link rel="stylesheet" href="./css_files/main.css">
    <link rel="stylesheet" href="./node_modules/sal.js/dist/sal.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.4/js/tether.min.js"></script>
</head>
<body>
    <!-- Main Container -->
    <div class="container-fluid">

        <!-- Navigation bar -->
        <nav class="navbar bg-black">
            <a href="./index.php"><img src="./Resources/Images/eblogo.png"></a>
            <ul>
                <li><a href="./browse-events.php">Browse Events</a></li>
                <li><a href="./createEvent.php">Create Event</a></li>
                <li><a href="./contact.html">Contact</a></li>
                <li><a href="./login.php">Log In</a></li>
            </ul>
        </nav>

        <div class="container signup bg-yellow">
            <h1
                data-sal-duration="800"
                data-sal="slide-up"
                data-sal-delay="400"
                data-sal-easing="ease-out-bounce"
            >Let's get started</h1>
            <p
                data-sal-duration="800"
                data-sal="slide-down"
                data-sal-delay="400"
                data-sal-easing="ease-out-bounce"
            >Please enter your email to sign up</p>
            <div><?php echo success_msg();
                    echo warn_msg();
                    echo err_msg();
                    echo exception_msg(); ?>
                </div>
            <form action="signup.php"  method="post" enctype="multipart/form-data">
                <input type="text" id="user_name" name="user_name" placeholder="User Name" onblur="validate(this)" required
                    data-sal-duration="1200"
                    data-sal="fade"
                    data-sal-delay="500"
                    data-sal-easing="ease-out-bounce"
                >
                <input type="text" id="signup_email" name="signup_email" placeholder="Email" onblur="validate(this)" required
                    data-sal-duration="1200"
                    data-sal="fade"
                    data-sal-delay="500"
                    data-sal-easing="ease-out-bounce"
                >
                <input type="password" id="signup_password" name="signup_password" placeholder="Password" onblur="validate(this)" required
                    data-sal-duration="1200"
                    data-sal="fade"
                    data-sal-delay="600"
                    data-sal-easing="ease-out-bounce"
                >
                <input type="password" id="signup_password_confirm" name="signup_password_confirm" placeholder="Confirm Password" onblur="matchPass(this)" required
                    data-sal-duration="1200"
                    data-sal="fade"
                    data-sal-delay="600"
                    data-sal-easing="ease-out-bounce"
                >
                <input type="submit" id="btn_signup" name="btn_signup" value="Sign Up">
            </form>
            <a href="./login.php"
                 data-sal-duration="1200"
                data-sal="slide-up"
                data-sal-delay="400"
                data-sal-easing="ease-out-bounce"
            >Have an existing account</a>
        </div>
    </div>

    <script src="./node_modules/sal.js/dist/sal.js"></script>
    <script src="./scripts/animate.js"></script>
</body>
</html>