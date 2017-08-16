<?php
include_once 'go_back.php';

require_once "header.php";

 if (!isset($_SESSION['username'])){
     session_destroy();
     echo "You are not logged in! \n <br/><br/> <a href='./index.php'>Return to homepage</a>";
 }else{
    if (isset($_POST['change']))
    {

        if (changePassword($_SESSION['username'], $_POST['oldpassword'], $_POST['password'],
            $_POST['password2']))
            {
            echo "Your password has been changed ! <br /> <a href='./index.php'>Return to homepage</a>";
             session_destroy();
            $conn->close();
 
        } else
        {
            echo "Password change failed! Please try again.";
            show_changepassword_form();
        }
     }else{
        show_changepassword_form();
    }
      }
 
require_once "footer.php";
 
?>