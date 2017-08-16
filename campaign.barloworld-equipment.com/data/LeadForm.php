<?php

// Add leads for any campaign 
//include("Database.php");
//$db = new Database();

$Campaign = filter_input(INPUT_POST, 'Campaign');
$Company = filter_input(INPUT_POST, 'Company');
$FirstName = filter_input(INPUT_POST, 'FirstName');
$Surname = filter_input(INPUT_POST, 'Surname');
$Email = filter_input(INPUT_POST, 'Email');
$CellNumber = filter_input(INPUT_POST, 'CellNumber');
$City = filter_input(INPUT_POST, 'City');
$Country = filter_input(INPUT_POST, 'Country');
$Questions = filter_input(INPUT_POST, 'Questions');
$Terms = filter_input(INPUT_POST, 'Terms');
$Url = filter_input(INPUT_POST, 'Url');
$ip = filter_input(INPUT_POST, 'ip');

$op = filter_input(INPUT_POST, 'op');
$sendMail = 'Marketing2@barloworld-equipment.com';
/*$sendMail = 'brendan@hitchdigital.com';*/

$servername = "localhost:3306";
$username = "campaign_user";
$password = "A1b1c1d1$$";
$dbname = "campaign_db";
$table = "campaign_leads";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

// Add record to table returns insert ID 
if (filter_input(INPUT_POST, 'op') == "add") {
    $query = "INSERT INTO `$table` (`Campaign`,`Company`,`Firstname`,`Surname`,`Email`,`CellNumber`,`City`,`Country`,`Questions`,`Terms`,`Url`,`PageID`,`ip`) VALUES ('$Campaign','$Company','$FirstName','$Surname', '$Email','$CellNumber','$City','$Country','$Questions','$Terms','$Url','$Campaign','$ip')";
    
    if ($conn->query($query) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $query . "<br>" . $conn->error;
    }
    
    // Now send email
    $to      = $sendMail;
    $subject = 'Enquiry via campaign website: ' .$Campaign;

    // Load Emailer
    $emailer = file_get_contents("LeadFormEmailer.html");
    
    
    $vars = array(
        "#Company" => $Company,
        "#FirstName" => $FirstName,
        "#Surname" => $Surname,
        "#Email" => $Email,
        "#CellNumber" => $CellNumber,
        "#City" => $City,
        "#Country" => $Country,
        "#Questions" => $Questions
    );

    $body = strtr($emailer, $vars);

    
    $headers = 'From: ' . $email . "\r\n" .
        'Reply-To: ' . $email . "\r\n" .
        'X-Mailer: PHP/' . phpversion();
    $headers .= "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    
    mail($to, $subject, $body, $headers);
    
    
}

$conn->close();


if ( $op == "remove") {
    $query = "DELETE FROM `$table` WHERE email='$email';";
    $result = $db->delete($query);
    echo ("Your have been unsubscribed");  
}

?>