
<?php require_once("./include/DB.php"); ?>
<?php require_once("./include/session.php"); ?>
<?php require_once("./include/function.php"); ?>

<?php
$_SESSION["user_id"] = null;
$_SESSION["user_name"] = null;
session_destroy();
redirect_to("index.php");
?>