<?php require_once("./include/DB.php"); ?>
<?php require_once("./include/session.php"); ?>

<?php
    function redirect_to($new_loc) {
        header("Location:".$new_loc);
         exit;
    }

    function isUserNameAlredyExist($username){
        $sql_user = "SELECT * FROM login WHERE name = '$username'";       
        $res_user = query_execute($sql_user);

        if(mysqli_fetch_assoc($res_user)){
            return true;
        }else{
            return false;
        }
        
    }
    function isEmailAlredyExist($email){
        $sql_email = "SELECT * FROM login WHERE email = '$email'";
        $res_email = query_execute($sql_email);

        if(mysqli_fetch_assoc($res_email)){
            return true;
        }else{
            return false;
        }
    }

    function isEventNameAlredyExist($name){
        $sql = "SELECT * FROM event WHERE event_name = '$name'";
        $res = query_execute($sql);

        if(mysqli_fetch_assoc($res)){
            return true;
        }else{
            return false;
        }
    }

    function loginAttempt($email, $pass){
        $sql = "SELECT * FROM login WHERE email='$email' AND password='$pass'";
        $rec = query_execute($sql);

        if($user = mysqli_fetch_assoc($rec)){
            return $user;
        }else{
            return null;
        }
    }
function adminloginAttempt($email, $pass)
        {
        $sql = "SELECT * FROM admin WHERE email='$email' AND password='$pass'";
        $rec = query_execute($sql);

        if($user = mysqli_fetch_assoc($rec)){
            return $user;
        }else{
            return null;
        }
    }

    function login(){
        if(isset($_SESSION["user_id"])){
            return true;
        }
    }

    function confirmLogin(){
        if(!login()){
            $_SESSION["errMsg"] = "Login reqired";
            redirect_to("login.php");
        }
    }

    
?>