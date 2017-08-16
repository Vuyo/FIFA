<?php
session_start();
if (!isLoggedIn())
{    
    if (isset($_POST['submit']))
    {
        $_SESSION['username'] = $_POST['username'];
        // retrieve the username and password sent from login form & check the login.
        if ( checkLogin($_POST['username'], $_POST['password']))
        {
            show_userbox();
        } else
        {
            echo "Incorrect Login information !";
            show_loggedIn();
            session_destroy();//unlink incorrect username from Global session variable
        }
    } else
    {
        // User is not logged in and has not pressed the login button
        // so we show him the loginform
        show_loggedIn();
    }
 
} else
{
    // The user is already loggedin, so we show the userbox.
    show_userbox();
}
?>