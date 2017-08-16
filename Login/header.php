<?php
//error_reporting(0); // we don't want to see errors on screen
// Start a session
session_start();
require_once ('conn.php'); // include the database connection
require_once ('funcs.php'); // include all the functions
//require_once ('includes/auto_kill_session.php');

$seed="0dAfghRqSTgx"; // the seed for the passwords
$domain =  "Barlow"; // the domain name without http://www.
 
?>
<!--<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd"> -->
<html>
<head>
<title>Welcome to - <?php echo $domain; ?> Website</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>
<body>
    
    </body>
</html>