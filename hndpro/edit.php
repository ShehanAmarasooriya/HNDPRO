<?php require_once("./include/DB.php"); ?>

<?php
    if(isset($_POST["btn-submit"])){
        
        $name = $_POST["event_name"];
        $category = $_POST["category"];
        $stdate = $_POST["st_date"];
        $sttime = $_POST["st_time"];
        $endate = $_POST["end_date"];
        $entime = $_POST["end_time"];
        $location = $_POST["loc"];
        
       
        if(empty($name) || empty($category)){
           
            echo '<script language="javascript">';
            echo 'alert("some feilds are empty")';
            echo '</script>';
            unset($_POST["btn-submit"]);
            
        }else{
            $id = $_GET["editId"];
            $sql = "UPDATE event 
            SET 
            event_name = '$name',
            category = '$category',
            event_start_date = '$stdate',
            event_start_time = '$sttime',
            event_end_date = '$endate',
            event_end_time = '$entime',
            location = '$location'
            WHERE id='$id'";

            if(mysqli_query($conn,$sql)){
                echo '<script language="javascript">';
                echo 'alert("Inserted successfully")';
                echo '</script>';
                unset($_POST["btn-submit"]);
                header("Location:admin.php");
            }
            else
            {
                 echo '<script type="text/javascript">alert("INFO:  '.mysqli_error($conn).'");</script>';
            }
        }
    }

?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.0/css/bootstrap.min.css" integrity="sha384-PDle/QlgIONtM1aqA2Qemk5gPOE7wFq8+Em+G/hmo5Iq0CCmYZLv3fVRDJ4MMwEA" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/main.css" type="text/css">
    <title>Edit Events</title>
  <style>
       .container {
  background-color: black;
  padding: 8px 20px;
}
      h3{
          font-size: 50px;
      }
     

</style>
    </head>
  <body class="container">

  <div class="card">
  <div class="card-header">
    <h3 style="text-align:center;">Edit Event</h3> 
  </div>
  <div class="card-body">
  

  <!--grab the values-->
  <?php
    $id = $_GET['id'];
    $sql = "SELECT * FROM event WHERE id = '$id'";
    $res = mysqli_query($conn, $sql);

    while($row = mysqli_fetch_array($res)){
        $name = $row["event_name"];
        $category = $row["category"];
        $st_date = $row["event_start_date"];
        $st_time = $row["event_start_time"];
        $end_date = $row["event_end_date"];
        $end_time = $row["event_end_time"];
        $loc = $row["location"];
    }
    ?>
<form action="edit.php?editId=<?php echo($id);?>" method="post" enctype="multipart/form-data">
<div class="form-group">
    <label for="name">Event Name</label>
    <input type="text" class="form-control" id="event_name"  name="event_name" placeholder="Event Name" value="<?php echo($name);?>">
  </div>
 
  <div class="form-group">
    <label for="price">Category</label>
    <input type="text" class="form-control" id="category" name="category" placeholder="Category" value="<?php echo($category);?>">
  </div>
    
    <div class="form-group">
    <label for="price">Start Date</label>
    <input type="text" class="form-control" id="st_date" name="st_date" placeholder="Enter product price" value="<?php echo($st_date);?>">
  </div>

    <div class="form-group">
    <label for="price">Start Time</label>
    <input type="text" class="form-control" id="st_time" name="st_time" placeholder="Enter product price" value="<?php echo(  $st_time);?>">
  </div>
    
    <div class="form-group">
    <label for="price">End Date</label>
    <input type="text" class="form-control" id="end_date" name="end_date" placeholder="Enter product price" value="<?php echo($end_date);?>">
  </div>
    
    <div class="form-group">
    <label for="price">End Time</label>
    <input type="text" class="form-control" id="end_time" name="end_time" placeholder="Enter product price" value="<?php echo($end_time);?>">
  </div>
    
    <div class="form-group">
    <label for="price">Location</label>
    <input type="text" class="form-control" id="loc" name="loc" placeholder="Enter product price" value="<?php echo($loc);?>">
  </div>
  <input class="btn btn-success" type="submit" id="btn-submit" name="btn-submit" value="Edit Event">
</form>

   
  
  
  
  
  
  </div>
</div>
    
  

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.0/js/bootstrap.min.js" integrity="sha384-7aThvCh9TypR7fIc2HV4O/nFMVCBwyIUKL8XCtKE+8xgCgl/PQGuFsvShjr74PBp" crossorigin="anonymous"></script>
  </body>
</html>