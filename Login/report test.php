<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="content-type" content="text/plain; charset=UTF-8"/>
    <title>Report page</title>
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
                            <td align="center" colspan="3"><strong>Choose a city to filter by</strong></td>
                        </tr>
                        <tr>
                            <td width="78">City</td>
                            <td width="6">:</td>
                            <td width="294">                
<?php
require_once 'header.php';

    $sql = "SELECT DISTINCT City FROM campaign_leads";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
    // output data of each row
        echo '<select name="cities">';
        echo '<option selected="selected" value= ""></option>';
    while($row = $result->fetch_assoc()) {
        //echo $row['City'].' <br>';
        echo('<option value="'.$row['City'].'">'.$row['City'].'</option>');
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
     <?php
            $city = $_POST['cities'];

            $sql = "SELECT * FROM campaign_leads WHERE City = '$city'";

            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
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
            }
      get_export();
        ?>
            </tbody>
        <tbody>
            <tr>
    <td><a onclick="get_export(); return true;">Do it!</a> </td>
            </tr>
        </tbody>
            </table>    
    </body>
</html>

