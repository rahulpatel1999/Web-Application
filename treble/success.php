<?php include('s.php'); ?>
<!DOCTYPE html>
<html>
<head>
    <title> Index</title>
</head>
<body>
    <div>
    <h1> Index Bitchhh</h1>
    </div>
    <?php 
        if (isset ($_SESSION['success']))
        {
            echo "hello: {$_SESSION['username']} ";
            header('location: index1.php');
        }
    else
    {
       // echo $out;
        
    }
    ?>
</body>

</html>
