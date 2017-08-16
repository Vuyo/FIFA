<?php
 
session_start();

// 20 mins in seconds
$inactive = 1200;

$session_life = time() - $_session['timeout']; 
if($session_life > $inactive) {

   session_destroy(); header("Location: ../../index.php");

}
$_session['timeout']=time();

?>