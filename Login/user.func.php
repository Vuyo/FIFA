<?php
 
##### User Functions #####

function changePassword($username,$currentpassword,$newpassword,$newpassword2){	

include("conn.php");
require_once "funcs.php";
    
    if ($newpassword <> $newpassword2)
    {
        echo "your passwords do not match";
    }
    else 
    {
        
    $sql = "UPDATE campaign_users SET Password='$newpassword' WHERE Username='$username'";
    $result = $conn->query($sql);
   
        if($result){
            session_destroy();
				die("Your pass has been changed.<a href='index.php'>Return</a> to Login page");
            header('Location: index.php');
            }
            else
            {
                mysqli_error($conn);
                die("Failure");
                return false;
            }
    }
}

function user_exists($username)
{
    if (!valid_username($username))
    {
        return false;
    }
 
    $query = "SELECT Username FROM campaign_users WHERE Username='$username'";
 
    $result = $conn->query($query);
 
    if ($result->num_rows > 0)
    {
        return true;
    } else
    {
        return false;
    }
 
    return false;
 
}
 
function activateUser($uid, $actcode)
{
 
    $query = sprintf("select activated from login where loginid = '%s' and actcode = '%s' and activated = 0  limit 1",
        mysql_real_escape_string($uid), mysql_real_escape_string($actcode));
 
    $result = mysql_query($query);
 
    if (mysql_num_rows($result) == 1)
    {
 
        $sql = sprintf("update login set activated = '1'  where loginid = '%s' and actcode = '%s'",
            mysql_real_escape_string($uid), mysql_real_escape_string($actcode));
 
        if (mysql_query($sql))
        {
            return true;
        } else
        {
            return false;
        }
 
    } else
    {
 
        return false;
 
    }
 
}
 
function registerNewUser($username, $password, $password2, $email)
{
 
 include("conn.php");
 require_once "funcs.php";
    
 
    if ($password <> $password2)
    {
        echo "your passwords do not match";
    }
    else 
    {

    $sql = "INSERT INTO campaign_users (Username, Password, Email) values ('$username', '$password','$email')";
    $result = $conn->query($sql);
   
        if($result){
            die("Your have succesfully registered.<a href='index.php'>Return</a> to Login page");
            header('Location: index.php');
            }
            else
            {
                mysqli_error($conn);
                die("Failure");
                return false;
            }
    }
}
 
function lostPassword($username, $email)
{
 
	global $seed;
    if (!valid_username($username) || !user_exists($username) || !valid_email($email))
    {
 
        return false;
    }
 
    $query = sprintf("select loginid from login where username = '%s' and email = '%s' limit 1",
        $username, $email);
 
    $result = mysql_query($query);
 
    if (mysql_num_rows($result) != 1)
    {
 
        return false;
    }
 
 
    $newpass = generate_code(8);
 
    $query = sprintf("update login set password = '%s' where username = '%s'",
        mysql_real_escape_string(sha1($newpass.$seed)), mysql_real_escape_string($username));
 
    if (mysql_query($query))
    {
 
            if (sendLostPasswordEmail($username, $email, $newpass))
        {
            return true;
        } else
        {
            return false;
        }      
 
    } else
    {
        return false;
    }
 
    return false;
 
}
 
?>