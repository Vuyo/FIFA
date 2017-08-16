<!DOCTYPE html>
<html>
<head>
  <title>Export MySQL data to Excel in PHP</title>  
  <meta http-equiv="Content-Type"content="text/plain; charset=Windows-1252"> 
   
</head>
<body>
    <table align="center" bgcolor="#CCCCCC" border="0" cellpadding="0"
    cellspacing="1" width="300">
        <tr>
            <td>
                <form method="post" name="report">
                    <table bgcolor="#FFFFFF" border="0" cellpadding="3"
                    cellspacing="1" width="100%">
                        <tr>
                            <td align="center" colspan="3"><strong>Choose a Campaign to filter by</strong></td>
                        </tr>
                        <tr>
                            <td width="78">Campaign</td>
                            <td width="6">:</td>
                            <td width="294">                
<?php
require_once 'header.php';
header('Content-Type: application/xls');
      header('Content-Disposition: attachment; filename=Barlow_Campaign_report.xls');
    $sql = "SELECT DISTINCT Campaign FROM campaign_leads";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {

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
        
?>
                            </td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td><input name="submit" type="submit" value=
                            "Filter"> <input name="reset" type="reset" value=
                            "reset">
                            <input type="button" onClick="window.location='logout.php';" value="logout" />
                            </td>
                        </tr>
                    </table>
                </form>
            </td>
        </tr>
    </table>

    <table>

     <?php
        include("conn.php");
        require_once "funcs.php";
        
        if(isset($_POST["Campaigns"]))
        { 
            
         $campaign = $_POST['Campaigns'];

            $sql = "SELECT * FROM campaign_leads WHERE Campaign = '$campaign'";

            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                echo "
                        <thead>
            <tr>
            <td>FirstName</td>
            <td>Surname</td>
            <td>Email</td>
                <td>Campaign</td>
                <td>Company</td>
                <td>Country</td>
            </tr>
        </thead>
        <tbody> 
                ";
            while($row = $result->fetch_assoc()) {
             
                      echo "<tr> 
                        <td>".$row[FirstName]."</td> 
                        <td>".$row[Surname]."</td> 
                        <td>".$row[Email]."</td>
                        <td>".$row[Campaign]."</td>
                        <td>".$row[Company]."</td>
                        <td>".$row[Country]."</td>
                        </tr>";
                
                }
                echo "</tbody>";
            }
        }
        
           include("footer.php");
        include_once 'go_back.php';
        $conn->close();
        ?>
        <tbody>
        </tbody>
            </table>    
    </body>
</html>

