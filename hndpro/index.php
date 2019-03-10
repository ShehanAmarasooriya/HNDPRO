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
    <style type="text/css">
           .additional p
           {
               padding-right:5px;
               padding-left:5px;
           } 
    </style>
</head> 
<body>
    <!-- Main Container -->
    <div class="container-fluid">

        <!-- Navigation bar -->
        <nav class="navbar">
            <a href="#"><img src="./Resources/Images/eblogo.png"></a>
            <ul>
                <li><a href="./browse-events.php">Browse Events</a></li>
                <li><a href="./createEvent.php">Create Event</a></li>
                <li><a href="./contact.php">Contact</a></li>
                <li><a id="admin_btn" href="./admin-login.php">Admin</a></li>
                <?php
                    if(isset($_SESSION['user_id'])) { ?>
                <li><a id="logout_btn" href="logout.php"><?php echo $_SESSION["user_name"] ?></a></li>
                
                <?php } else { ?>
                <li><a id="login_btn" href="./login.php">Log In</a></li>
                <?php } ?>
            </ul>
        </nav>

        <!-- Container with video -->
        <div class="container-fluid bg-black shape">
            <div class="hero">
                <video autoplay muted loop id="video">
                    <source src="./Resources/Video/Video.mp4" type="video/mp4">
                </video>
            </div>
            <div class="hero-text">
                <h1 
                    data-sal-duration="1200"
                    data-sal="slide-up"
                    data-sal-delay="600"
                    data-sal-easing="ease-out-bounce"
                >Discover events happening in your city</h1>
                <h2 
                    data-sal-duration="1200"
                    data-sal="slide-up"
                    data-sal-delay="900"
                    data-sal-easing="ease-out-bounce"
                >Do more of what you love</h2>
            </div>
            <div class="arrow bounce">
                <i class="fa fa-angle-down fa-2x txt-white"></i>
            </div>
        </div>

        <!-- Container with the Gallery -->
        <div class="container mt-2">
            <h1 class="g-head"
                data-sal-duration="1200"
                data-sal="slide-right"
                data-sal-delay="400"
                data-sal-easing="ease-out-bounce"
            >Categories to Explore</h1>
            <h3 class="g-subhead"
                data-sal-duration="1200"
                data-sal="slide-left"
                data-sal-delay="700"
                data-sal-easing="ease-out-bounce"
            >Find out the events in the moods for...</h3>
            <div class="gallery">
                
                <div 
                    data-sal-duration="800"
                    data-sal="slide-up"
                    data-sal-delay="400"
                    data-sal-easing="ease-out-bounce" 
                >
                    <div class="card">
                        <img src="./Resources/Images/food.png">
                        <div class="caption">
                            <h3>Food & Drink</h3>
                            <div class="additional">
                                <p> BEST GUIDE TO FOOD AND DRINK EVENTS IN SEATTLE</p>
                               <!-- <input type="submit" value="Explore" id="btnFoodDrink" name="btnFoodDrink">-->
                               <a href="browse-events.php?category=food_and_drink" id="btnFoodDrink" name="btnFoodDrink">Explore</a>
                            </div>
                        </div>
                    </div>
                </div>




                <div
                    data-sal-duration="800"
                    data-sal="slide-up"
                    data-sal-delay="500"
                    data-sal-easing="ease-out-bounce"
                >
                    <div class="card">
                        <img src="./Resources/Images/concerts.png">
                        <div class="caption">
                            <h3>Concerts</h3>
                            <div class="additional">
                                <p>SOMETIMES THEN CALLED A RECTICAL</p>
                                <a href="browse-events.php?category=concerts">Explore</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div
                    data-sal-duration="800"
                    data-sal="slide-up"
                    data-sal-delay="600"
                    data-sal-easing="ease-out-bounce"
                >
                    <div class="card">
                        <img src="./Resources/Images/artdrama.png">
                        <div class="caption">
                            <h3>Art & Drama</h3>
                            <div class="additional">
                                <p>COLLABORATIVE FORM OF FINE ART</p>
                                <a href="browse-events.php?category=art_and_drama">Explore</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div
                    data-sal-duration="800"
                    data-sal="slide-up"
                    data-sal-delay="700"
                    data-sal-easing="ease-out-bounce"
                >
                    <div class="card">
                        <img src="./Resources/Images/business.png">
                        <div class="caption">
                            <h3>Business</h3>
                            <div class="additional">
                                <p>ACTIVITY OF MAKING ONE'S LIVING OR MAKING MONEY </p>
                                <a href="browse-events.php?category=Business">Explore</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div
                    data-sal-duration="800"
                    data-sal="slide-up"
                    data-sal-delay="800"
                    data-sal-easing="ease-out-bounce"
                >
                    <div class="card">
                        <img src="./Resources/Images/exhibitions.png">
                        <div class="caption">
                            <h3>Exhibitions</h3>
                            <div class="additional">
                                <p>TRADITIONALLY THE SPACE IN WHICH ART OBJECTS</p>
                                <a href="browse-events.php?category=exhibition">Explore</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div
                    data-sal-duration="800"
                    data-sal="slide-up"
                    data-sal-delay="400"
                    data-sal-easing="ease-out-bounce"
                >
                    <div class="card">
                        <img src="./Resources/Images/meetups.png">
                        <div class="caption">
                            <h3>Meetups</h3>
                            <div class="additional">
                                <p>YOU CAN DO MORE OF WHAT MATTERS TO YOU</p>
                                <a href="browse-events.php?category=meetups">Explore</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div
                    data-sal-duration="800"
                    data-sal="slide-up"
                    data-sal-delay="500"
                    data-sal-easing="ease-out-bounce"
                >
                    <div class="card">
                        <img src="./Resources/Images/party.png">
                        <div class="caption">
                            <h3>Party</h3>
                            <div class="additional">
                                <p>GET THE PARTY STARTED! FIND EVERYTHING YOU NEED </p>
                                <a href="browse-events.php?category=party">Explore</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div
                    data-sal-duration="800"
                    data-sal="slide-up"
                    data-sal-delay="600"
                    data-sal-easing="ease-out-bounce"
                >
                    <div class="card">
                        <img src="./Resources/Images/sports.png">
                        <div class="caption">
                            <h3>Sports</h3>
                            <div class="additional">
                                <p>COMPETITIVE PHYSICAL ACTIVITY OR GAMES WHICH, THROUGH CASUAL</p>
                                <a href="browse-events.php?category=sports">Explore</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div
                    data-sal-duration="800"
                    data-sal="slide-up"
                    data-sal-delay="700"
                    data-sal-easing="ease-out-bounce"
                >
                    <div class="card">
                        <img src="./Resources/Images/health.png">
                        <div class="caption">
                            <h3>Health & Wellness</h3>
                            <div class="additional">
                                <p>EXPLORE CURRENT CONCEPTS IN HEALTH, EXERCISE, AND WELLNESS </p>
                                <a href="browse-events.php?category=health_and_wellness">Explore</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div
                    data-sal-duration="800"
                    data-sal="slide-up"
                    data-sal-delay="800"
                    data-sal-easing="ease-out-bounce"
                >
                    <div class="card">
                        <img src="./Resources/Images/tech.png">
                        <div class="caption">
                            <h3>Technology</h3>
                            <div class="additional">
                                <p>KNOWLEDGE OF TECHNIQUES, PROCESSES, AND THE LIKE </p>
                                <a href="browse-events.php?category=technology">Explore</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Create event banner -->
        <div class="container bg-black-solid banner mt-3"
            data-sal-duration="1400"
            data-sal="fade"
            data-sal-delay="500"
            data-sal-easing="ease-out-bounce"
        >
            <h1 class="banner-text"
                data-sal-duration="800"
                data-sal="slide-right"
                data-sal-delay="400"
                data-sal-easing="ease-out-bounce"
            >Want to create an <span>event ?</span></h1>
            <a class="btn-secondary" href="#">Start Now</a>
        </div>

        <!-- Latest Events -->
        <div class="container mt-2">
            <h1 class="g-head"
                data-sal-duration="1200"
                data-sal="slide-right"
                data-sal-delay="400"
                data-sal-easing="ease-out-bounce"
            >Recent Events</h1>
            <h3 class="g-subhead"
                data-sal-duration="1200"
                data-sal="slide-left"
                data-sal-delay="700"
                data-sal-easing="ease-out-bounce"
            >Find out all the latest events happening...</h3>

            <!-- Recent Events Gallery -->
            <div class="gallery mt-3">
                <!--event box-->
                <?php 
            
                $sql = "SELECT * FROM event ORDER BY event_start_date limit 5";
                $res = query_execute($sql);

                while($dr = mysqli_fetch_array($res)){
                    $id = $dr["id"];
                    $eventname = $dr["event_name"];
                    $loc = $dr["location"];
                    $sdate = $dr["event_start_date"];
                    $stime = $dr["event_start_time"]; 
                    $image =  $dr["image"];          
                    
                ?>

                <div 
                    data-sal-duration="800"
                    data-sal="slide-up"
                    data-sal-delay="400"
                    data-sal-easing="ease-out-bounce" 
                >
                    <div class="card">
                        <img src="./upload/<?php echo $image; ?>">
                        <div class="caption">
                            <h3><?php echo(htmlentities($eventname));?></h3>
                            <div class="additional">
                                <p>Location: <?php echo(htmlentities($loc));?><br>Date : <?php echo(htmlentities($sdate));?><br>Time : <?php echo(htmlentities($stime));?></p>
                                <a href="event-display.php?id=<?php echo $id; ?>">Info</a>
                                <input type="submit" value="Mark Going">
                            </div>
                        </div>
                    </div>
                </div>
                <?php }?>
            </div>
        </div>
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