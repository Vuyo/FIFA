
    <?php 
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/includes/page-title.php";
   include_once($path);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php include('../../includes/meta-data.php'); ?>
    <?php include('../../includes/scripts.php'); ?>

    
</head>

<body>
    <?php 
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/header.php";
   include_once($path);
?>

    <div class="container">
        <div class="row">
            <div class="one-full column">
                <h1>Thank-You</h1>
                <p>Your request is being processed. Continue to browse the <a href="https://www.barloworld-equipment.com">website here >>></a></p>
            </div>
        </div>
    </div>
    
        <?php 
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/footer.php";
   include_once($path);
?>
</body>

</html>
