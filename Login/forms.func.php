<?php
 
#### Display Functions ####

function show_userbox()
{
    // retrieve the session information
    
    //header("Location:Welcome.php");
   // session_start();
    
    $user = $_SESSION['username'];

    // display the user box
    echo "<div id='userbox'>
			Welcome $user
			<ul>
				<li><a href='./changepass.php'>Change Password</a></li>
				<li><a href='./logout.php'>Logout</a></li>
                <li><a href='./onscreen_report.php'>Onscreen report</a></li>
                <li><a href='./download_report.php'>Download report in excel</a></li>
			</ul>
		 </div>";
}
 
function show_changepassword_form(){

echo '<form action="./changepass.php" method="post"> 
  <fieldset> 
  <legend>Change Password</legend> 
  <input type="hidden" value="'.$_SESSION['username'].'" name="username"> 
  <dl> 
    <dt> 
      <label for="oldpassword">Current Password:</label> 
    </dt> 
    <dd> 
      <input name="oldpassword" type="password" id="oldpassword" maxlength="15"> 
    </dd> 
  </dl> 
  <dl> 
    <dt> 
      <label for="password">New Password:</label> 
    </dt> 
    <dd> 
      <input name="password" type="password" id="password" maxlength="15"> 
    </dd> 
  </dl> 
  <dl> 
    <dt> 
      <label for="password2">Re-type new password:</label> 
    </dt> 
    <dd> 
      <input name="password2" type="password" id="password2" maxlength="15"> 
    </dd> 
  </dl> 
  <p> 
    <input name="reset" type="reset" value="Reset"> 
    <input name="change" type="submit" value="Reset Password"> 
  </p> 
  </fieldset> 
</form>
';
}


function get_export($campaign)
{
    echo '  <table class="table" bordered="1" >  
   
           <tr>
            <td>Created date</td>
            <td>ID</td>
            <td>IP</td>
            <td>Page ID</td>
                <td>URL</td>
                <td>Campaign</td>
                <td>Company</td>
                 <td>First Name</td>
                <td>Surname</td>
                <td>Email</td>
                <td>Cell Number</td>
                <td>City</td>
                 <td>Country</td>
                <td>Questions</td>
                <td>Terms</td>
            </tr>';
            
            require_once 'header.php';
            
             $query = "SELECT * FROM campaign_leads WHERE Campaign='$campain'";
             $result = mysqli_query($conn, $query);
             if(mysqli_num_rows($result) > 0)
             {
              while($row = mysqli_fetch_array($result))
              {
               echo '
                <tr>  
                <td>'.$row["Created"].'</td> 
                <td>'.$row["id"].'</td> 
                <td>'.$row["IP"].'</td> 
                <td>'.$row["Page ID"].'</td> 
                <td>'.$row["URL"].'</td> 
                <td>'.$row["Campaign"].'</td> 
                <td>'.$row["Company"].'</td> 
                <td>'.$row["First Name"].'</td> 
                <td>'.$row["Surname"].'</td> 
                <td>'.$row["Email"].'</td> 
                <td>'.$row["Cell Number"].'</td> 
                <td>'.$row["City"].'</td> 
                <td>'.$row["Country"].'</td> 
                <td>'.$row["Questions"].'</td> 
                <td>'.$row["Terms"].'</td>
                </tr>
               ';
              }
             }
       echo ' </table>';
}



function show_loggedIn($disabled = false){
    
  echo '  <!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
    <table align="center" bgcolor="#CCCCCC" border="0" cellpadding="0"
    cellspacing="1" width="300">
        <tr>
            <td>
                <form method="post" name="" action="index.php">
                    <table bgcolor="#FFFFFF" border="0" cellpadding="3"
                    cellspacing="1" width="100%">
                        <tr>
                            <td align="center" colspan="3"><strong>User
                            Login</strong></td>
                        </tr>
                        <tr>
                            <td width="78">Username</td>
                            <td width="6">:</td>
                            <td width="294"><input id="username" name=
                            "username" type="text"></td>
                        </tr>
                        <tr>
                            <td>Password</td>
                            <td>:</td>
                            <td><input id="password" name="password" type=
                            "password"></td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td><input name="submit" type="submit" value=
                            "Login"> <input name="reset" type="reset" value=
                            "reset">
                    <input type="button"value="register" onClick=window.location=register.php></td>
                        </tr>
                    </table>
                </form>
            </td>
        </tr>
    </table>
      </body>
</html>';
    if ($disabled == true)
    {
        echo 'disabled="disabled"';
    }
}
 
function show_lostpassword_form(){
 
	echo '<form action="lostpass.php" method="post"> 
	<fieldset><legend>Reset Password</legend>
  <dl> 
    <dt><label for="username">Username:</label></dt> 
    <dd><input name="username" type="text" id="username" maxlength="30">
    </dd> 
  </dl> 
   <dl> 
    <dt><label for="email">email:</label></dt> 
    <dd><input name="email" type="text" id="email" maxlength="255">
    </dd> 
  </dl> 
  <p> 
    <input name="reset" type="reset" value="Reset"> 
    <input name="lostpass" type="submit" value="Reset Password"> 
  </p> 
  </fieldset>
</form>';
 
}
 
function show_registration_form(){
 
	echo '<form action="register.php" method="post"> 
	<fieldset><legend>Register</legend>
  <dl> 
    <dt><label for="username">Username:</label></dt> 
    <dd><input name="username" type="text" id="username" maxlength="30">
    </dd> 
  </dl> 
  <dl> 
    <dt><label for="password">Password:</label></dt> 
    <dd><input name="password" type="password" id="password" maxlength="15">
    </dd> 
  </dl> 
  <dl> 
    <dt><label for="password2">Re-type password:</label></dt> 
    <dd><input name="password2" type="password" id="password2" maxlength="15">
    </dd> 
  </dl> 
  <dl> 
    <dt><label for="email">email:</label></dt> 
    <dd><input name="email" type="text" id="email" maxlength="255">
    </dd> 
  </dl> 
  <p> 
    <input name="reset" type="reset" value="Reset"> 
    <input name="register" type="submit" value="Register"> 
  </p> 
  </fieldset>
</form>';
 
}
?>