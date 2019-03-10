<?php 
    session_start();
    function warn_msg() {
        if(isset($_SESSION["warnMsg"])) {
            $output = "<div class=\"alert alert-warning\">";
            $output .= htmlentities($_SESSION["warnMsg"]);
            $output .= "</div>";

            $_SESSION["warnMsg"] = null; // null for the first time

            return $output;
        }
    }

    function success_msg() {
        if(isset($_SESSION["successMsg"])) {
            $output = "<div class=\"alert alert-success\">";
            $output .= htmlentities($_SESSION["successMsg"]);
            $output .= "</div>";

            $_SESSION["successMsg"] = null; // null for the first time

            return $output;
        }
    }

    function err_msg() {
        if(isset($_SESSION["errMsg"])) {
            $output = "<div class=\"alert alert-danger\">";
            $output .= htmlentities($_SESSION["errMsg"]);
            $output .= "</div>";

            $_SESSION["errMsg"] = null; // null for the first time

            return $output;
        }
    }

    function exception_msg() {
        if(isset($_SESSION["exceptionMsg"])) {
            $output = "<div class=\"alert alert-info\">";
            $output .= htmlentities($_SESSION["exceptionMsg"]);
            $output .= "</div>";

            $_SESSION["exceptionMsg"] = null; // null for the first time

            return $output;
        }
    }
?>