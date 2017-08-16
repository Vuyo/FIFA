<?php  

if(isset($_POST["export"]))
{
 include("conn.php");
 require_once "funcs.php";
    
 header('Content-Type: application/xls');
 header('Content-Disposition: attachment; filename=Barlow_Campaign_report.xls');

echo '
<html>  
 <head>  
  <title>Export MySQL data to Excel in PHP</title>  
  <meta http-equiv=\"Content-Type\"content=\"text/plain; charset=Windows-1252\">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
 </head> ';

 
$camp = $_POST['Campaigns'];    
    
 $query = "SELECT * FROM campaign_leads WHERE Campaign = '$camp'";
 $result = mysqli_query($conn, $query);
 if(mysqli_num_rows($result) > 0)
 {
  $output .= '
  <body>  
  <div class="container">  
   <div class="table-responsive">  
    <h2 align="center">Campaign Report</h2><br /> 
   <table class="table" bordered="1">  
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
            </tr>
   
  ';
  while($row = mysqli_fetch_array($result))
  {
   $output .= '
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
  $output .= '</table>';
  echo $output;
 }

}
else{
    
 echo '
 
    <table align="center" bgcolor="#CCCCCC" border="0" cellpadding="0"
    cellspacing="1" width="300">
        <tr>
            <td>
                <form method="post" name="" action="">
                    <table bgcolor="#FFFFFF" border="0" cellpadding="3"
                    cellspacing="1" width="100%">
                        <tr>
                            <td align="center" colspan="3"><strong>Choose campaign to filter by: </strong></td>
                        </tr>
                        <tr>
                            <td width="78">Campaign</td>
                            <td width="6">:</td>
                            <td width="294">';
                            
                require_once 'header.php';

                $sql = "SELECT DISTINCT Campaign FROM campaign_leads";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                // output data of each row
                    echo '<select name="Campaigns">';
        echo '<option selected="selected" value= ""></option>';
            while($row = $result->fetch_assoc()) {
        //echo $row['City'].' <br>';
        echo('<option value="'.$row['Campaign'].'">'.$row['Campaign'].'</option>');
        }
                    echo '</select>';
                }else{
                    die("Fatal error");
                    }
                            
                    echo'        </td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td><input type="submit" name="export" value="Export" /> <input name="reset" type="reset" value=
                            "reset">
                    <input type="button"value="logout" onClick=window.location=logout.php></td>
                        </tr>
                    </table>
                </form>
            </td>
        </tr>
    </table>';   
}

$conn->close();

?>


