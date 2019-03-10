<?php require_once("./include/DB.php"); ?>
<?php require_once("./include/session.php"); ?>
<?php require_once("./include/function.php"); ?>

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
    <style>
        .fm1{
            margin-top: -51px;
            position: relative; 
        }
    .contact form input[type="submit"] {
        color: aliceblue;
  display: block;
  margin-left: auto;
  margin-right: auto;
  margin-top: 25px;
  font-weight: bold;
  border-color: brown;
  padding: 8px 60px;
}
        .f1{
            margin-top: -30px;;
        }
    </style>
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
                <li><a href="./contact.php">Contact</a></li>
                <?php
                    if(isset($_SESSION['user_id'])) { ?>
                <li><a id="logout_btn" href="logout.php"><?php echo $_SESSION["user_name"] ?></a></li>
                <?php } else { ?>
                <li><a id="login_btn" href="./login.php">Log In</a></li>
                <?php } ?>
            </ul>
        </nav>

        <div class="container contact bg-yellow">
             <div class="fm1">
            <h1
                data-sal-duration="800"
                data-sal="slide-up"
                data-sal-delay="400"
                data-sal-easing="ease-out-bounce"
            >Contact</h1>
            <p
                data-sal-duration="800"
                data-sal="slide-down"
                data-sal-delay="400"
                data-sal-easing="ease-out-bounce"
            >Whether you've got a question about membership, creating events or anything in between,<br>you'll find the answer here.</p>
           
            <form >
                <input type="text" id="contact-name" placeholder="Your Name"
                    data-sal-duration="1200"
                    data-sal="fade"
                    data-sal-delay="700"
                    data-sal-easing="ease-out-bounce"
                >
                <input type="text" id="contact-email" placeholder="Email"
                    data-sal-duration="1200"
                    data-sal="fade"
                    data-sal-delay="500"
                    data-sal-easing="ease-out-bounce"
                >
                <input type="text" id="contact-subject" placeholder="Subject"
                    data-sal-duration="1200"
                    data-sal="fade"
                    data-sal-delay="700"
                    data-sal-easing="ease-out-bounce"
                >
                <textarea id="message"
                    data-sal-duration="1200"
                    data-sal="fade"
                    data-sal-delay="700"
                    data-sal-easing="ease-out-bounce"
                ></textarea>
                <input type="submit" id="contact-submit" value="Send"
                    data-sal-duration="1200"
                    data-sal="slide-up"
                    data-sal-delay="400"
                    data-sal-easing="ease-out-bounce"
                >
            </form>
                </div>
        </div>
    </div>

    <!-- footer-->
    <div class="container footer bg-yellow">
        <div class="main-section">
            <h1>Stay in Touch</h1>
            <p>Subscribe for the latest updates of top events and festivals nearby</p>
            <form>
                <input type="text" id="sub-email" placeholder="Enter your email address here">
                <input type="submit" id="sub-submit" value="Subscribe">
            </form>
        </div>
        <div class="sub-section">
            <p>Follow us on</p>
            <div class="social">
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-youtube"></i></a>
            </div>
        </div>
    </div>
    <div class="trademark">
        <p>Eventbrite Inc. &copy; 2018</p>
        <div class="terms">
            <a href="#">Terms of Services</a>
            <a href="#">FAQ</a>
            <a href="#">Privacy Policy</a>
        </div>
    </div>

    <script src="./node_modules/sal.js/dist/sal.js"></script>
    <script src="./scripts/animate.js"></script>
</body>
</html>