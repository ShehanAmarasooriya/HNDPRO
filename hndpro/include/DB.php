<?php require_once("./include/session.php"); ?>
<?php require_once("./include/function.php"); ?>

<?php
//setting up database connection

    $servername = "localhost";
    $username = "root";
    $password = '';
    $dbname = 'eventbrite';

    //create connection
     $conn = mysqli_connect($servername,$username,$password, $dbname) or die($conn);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
        $_SESSION["warnMsg"] = "Category is already there";
        //redirect_to("category.php");
    }
        

    function query_execute($query) {
        try{
            
            $res = mysqli_query($GLOBALS['conn'],$query);
            echo '<script>console.log("here")</script>';
            //mysqli_close($GLOBALS['conn']); //close the connection when inser is done
        }catch(Exception $e){
            $_SESSION["errMsg"] = $e->getMessage();
            redirect_to("exception.php");
            echo '<script>console.log("$e->getMessage()")</script>';
        }
        return $res;
    }
?>