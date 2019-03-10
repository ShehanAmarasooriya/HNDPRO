<?php require_once("./include/DB.php"); ?>
<?php require_once("./include/session.php"); ?>
<?php require_once("./include/function.php"); ?>


<!doctype html>
<html lang="en">
  <head>
       <link rel="stylesheet" href="./css_files/main.css">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS 
    <link rel="stylesheet" type="text/css" media="screen" href="css_bootstrap/bootstrap.css">
      <link rel="stylesheet" href="./css_files/main.css">-->
       <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.0/css/bootstrap.min.css" integrity="sha384-PDle/QlgIONtM1aqA2Qemk5gPOE7wFq8+Em+G/hmo5Iq0CCmYZLv3fVRDJ4MMwEA" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/main.css" type="text/css">
      
    <title>admin</title>
      <style>
          .card-header{
              margin-top: 65px;
          }
          h3{
              font-size: 50px;
          }
          .contain 
          {
            background-color: #2ba6cb;
                padding: 8px 20px;
            }
          .card-header{
              margin-top: 5px;
          }
      </style>
  </head>
  <body>
      <!-- Navigation bar -->
        <nav class="navbar bg-black" >
            <a href="./index.php"><img src="./Resources/Images/eblogo.png"></a>
             <ul>
                <?php
                    if(isset($_SESSION['user_id'])) { ?>
                <li><a id="logout_btn" href="logout.php"><?php echo $_SESSION["user_name"] ?></a></li>
                
                <?php } else { ?>
                <li><a id="login_btn" href="./admin-login.php">Log In</a></li>
                <?php } ?>
            </ul>
        </nav>
      <div class="card-header">
            <h3 style="margin-left:425px;">Manage Events</h3>
        </div>
    <div class="contain bg-black">
        
        <div class="admin">
    <div class="card">
  
  <div class="card-body">

  <!--create a table-->
  <table class="table table-bordered">
        <thead>
            <tr>
            <th>ID</th>
            <th>Event Name</th>
            <th>Category</th>
            <th>Start Date</th>
            <th>Start Time</th>
            <th>End Date</th>
            <th>End Time</th>
            <th>Location</th>
            <th>Actions</th>
            </tr>
        </thead>
        <tbody>
  <?php
    $sql = "SELECT * FROM event";
    $res = mysqli_query($conn,$sql);

    while($row = mysqli_fetch_array($res)){  
        $id = $row["id"];    
        $name = $row["event_name"]; 
        $category = $row["category"];
        $st_date = $row["event_start_date"];
        $st_time = $row["event_start_time"];
        $end_date = $row["event_end_date"];
        $end_time = $row["event_end_time"];
        $loc = $row["location"];
        
        
    ?> 
        <tr>
            <th><?php echo($id);?></th>
            <td><?php echo($name);?></td>
            <td><?php echo($category);?></td>
            <td><?php echo($st_date);?></td>
            <td><?php echo($st_time);?></td>
            <td><?php echo($end_date);?></td>
            <td><?php echo($end_time);?></td>
            <td><?php echo($loc);?></td>
            <td>
            <a href="edit.php?id=<?php echo $id;?>">
            <span class="btn btn-info"><i class="fa fa-pencil-square" aria-hidden="true"></i>&nbsp; Edit</span></a>
            &nbsp;&nbsp;
            <a href="delete.php?id=<?php echo $id;?>">
            <span class="btn btn-danger"> <i class="fa fa-trash" aria-hidden="true"></i>&nbsp;Delete</span></a>
      </td>
            </tr>
    <?php }?>
    </tbody>
    </table>
  </div>
</div>
</div>
</div>
      <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.0/js/bootstrap.min.js" integrity="sha384-7aThvCh9TypR7fIc2HV4O/nFMVCBwyIUKL8XCtKE+8xgCgl/PQGuFsvShjr74PBp" crossorigin="anonymous"></script>
  </body>
</html>