<?php require_once("./include/DB.php"); ?>
<?php require_once("./include/session.php"); ?>
<?php require_once("./include/function.php"); ?>

<?php
    if(isset($_POST["btn-login"])){
        
        //grab the form data
        
        $email = mysqli_real_escape_string($conn, $_POST["email"]);
        $password = mysqli_real_escape_string($conn, $_POST["password"]);
       
        //check empty field
        if(empty($email) || empty($password) ){
            $_SESSION["errMsg"] = "Fields cannot be Empty";
            redirect_to("login.php");
            return;
        }

        
    
        
        $found_acc = loginAttempt($email,$password);
        $_SESSION["user_id"] = $found_acc["id"];
        $_SESSION["user_name"] = $found_acc["name"];
        if($found_acc){
            //redirect to create event page
           redirect_to("index.php");
        }else{
            $_SESSION["errMsg"] = "Invalid user Credentials";
            redirect_to("login.php");
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
                <!--<li><input type="submit" value="Create Event" id="createEvent" name="createEvent"></li>-->
                <li><a href="./createEvent.php">Create Event</a></li>
                <li><a href="./contact.php">Contact</a></li>
                <?php
                    if(isset($_SESSION['user_id'])) { ?>
                <li><a id="login_btn"><?php echo $_SESSION["user_name"] ?></a></li>
                <?php } else { ?>
                <li><a id="login_btn" href="./login.php">Log In</a></li>
                <?php } ?>
            </ul>
        </nav>

        <div class="container login bg-yellow">
            <h1
                data-sal-duration="800"
                data-sal="slide-up"
                data-sal-delay="400"
                data-sal-easing="ease-out-bounce"
            >Login</h1>
            <p
                data-sal-duration="800"
                data-sal="slide-down"
                data-sal-delay="400"
                data-sal-easing="ease-out-bounce"
            >Please enter your email and password to log in.</p>
            <div><?php echo success_msg();
                    echo warn_msg();
                    echo err_msg();
                    echo exception_msg(); ?>
            <form action="login.php"  method="post" enctype="multipart/form-data">
                <input type="text" id="email" name="email" placeholder="Email" onblur="validate(this)" required
                    
                >
                <input type="password" id="password" name="password" placeholder="Password" onblur="validate(this)" required
                    
                >
                <input type="submit" id="btn-login" name="btn-login" value="Login"
                    
                >
            </form>
            <a href="./signup.php"
                 data-sal-duration="1200"
                data-sal="slide-up"
                data-sal-delay="400"
                data-sal-easing="ease-out-bounce"
            >Create a new account</a>
        </div>
    </div>
    </div>

    <script src="./node_modules/sal.js/dist/sal.js"></script>
    <script src="./scripts/animate.js"></script>
</body>
</html>