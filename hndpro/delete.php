<?php require_once("./include/DB.php"); ?>
<?php require_once("./include/function.php"); ?>

<?php
    if(isset($_GET["id"])){
        $idFromUrl = $_GET["id"];
        //set the db connection here
        $query= "DELETE FROM event WHERE id = '$idFromUrl'";
        if(mysqli_query($conn,$query))
        {
           echo '<script type="text/javascript">alert("Delete Successfully");</script>'; 
          redirect_to("admin.php");
        }
        else
        {
         echo '<script type="text/javascript">alert("INFO:  '.mysqli_error($conn).'");</script>';
          
        }
            
    }

?>
