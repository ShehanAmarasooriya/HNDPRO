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
</head>
<body>
    <!-- Main Container -->
    <div class="container-fluid">

        <!-- Navigation bar -->
        <nav class="navbar bg-black">
            <a href="./index.php"><img src="./Resources/Images/eblogo.png"></a>
            <ul>
                <li><a href="./browse-events.php">Browse Events</a></li>
                <li><input type="submit" value="Create Event" id="createEvent" name="createEvent"></li>
                <li><a href="./contact.html">Contact</a></li>
                <?php
                    if(isset($_SESSION['user_id'])) { ?>
                <li><a id="login_btn"><?php echo $_SESSION["user_name"] ?></a></li>
                <?php } else { ?>
                <li><a id="login_btn" href="./login.php">Log In</a></li>
                <?php } ?>
            </ul>
        </nav>
        <?php 
        
        $eventIDFromURL = $_GET["id"];
        $sql = "SELECT * FROM event WHERE id='$eventIDFromURL'";
        $res = query_execute($sql);

        while($dr = mysqli_fetch_array($res)){
            $ename = $dr["event_name"];
            $dec = $dr["description"];
            $category = $dr["category"];
            $cdate = $dr["event_create_datetime"];
            $sdate = $dr["event_start_date"];
            $stime = $dr["event_start_time"];
            $edate = $dr["event_end_date"];
            $etime = $dr["event_end_time"];
            $loc = $dr["location"];
            if(!empty($dr["image"])){
                $image = $dr["image"];
            }else{
                $image = "business.png";
            }
            
        
        
        
        ?>

        <div class="container event mt-3">
            <img src="./upload/<?php echo $image; ?>"
                data-sal-duration="800"
                data-sal="slide-down"
                data-sal-delay="600"
                data-sal-easing="ease-out-bounce"
            >
            <div class="details">
                <h1
                    data-sal-duration="800"
                    data-sal="slide-up"
                    data-sal-delay="600"
                    data-sal-easing="ease-out-bounce"
                ><?php echo(htmlentities($ename));?></h1>
                <div class="e-type">

                    <p
                        data-sal-duration="800"
                        data-sal="fade"
                        data-sal-delay="700"
                        data-sal-easing="ease-out-bounce"
                    ><?php echo(htmlentities($category));?></p>
                    <!--event type here-->
                    <p
                        data-sal-duration="800"
                        data-sal="fade"
                        data-sal-delay="700"
                        data-sal-easing="ease-out-bounce"
                    ><?php echo(htmlentities($category));?></p>
                </div>
                <div class="event-detail"
                    data-sal-duration="1000"
                    data-sal="fade"
                    data-sal-delay="800"
                    data-sal-easing="ease-out-bounce"
                >
                    <p>Venue: <?php echo(htmlentities($loc));?></p>
                    <p>Start Date: <?php echo(htmlentities($sdate));?></p>
                    <p>Start Time: <?php echo(htmlentities($stime));?></p>
                    <p>End Date: <?php echo(htmlentities($edate));?></p>
                    <p>End Time: <?php echo(htmlentities($etime));?></p>
                </div>
                <div class="description"
                    data-sal-duration="1000"
                    data-sal="fade"
                    data-sal-delay="800"
                    data-sal-easing="ease-out-bounce"
                >
                    <p><?php echo(htmlentities($dec));?></p>
                </div>
                <div
                    data-sal-duration="800"
                    data-sal="slide-down"
                    data-sal-delay="800"
                    data-sal-easing="ease-out-bounce"  
                >
                    <input type="submit" id="btnGoing" value="Mark Going">
                </div>
            </div>
        </div>

        <?php }?>

    </div>

    <!-- footer-->
    <div class="container footer bg-yellow mt-3">
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