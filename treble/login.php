<?php include('s.php'); ?>
<!DOCTYPE html>
<html>
    <link rel="stylesheet" type="text/css" href="login.css" />
<head>
    <title> Login </title>
    
</head>
<body>
    <div>
        <h2> Login </h2>
    </div>
    
    <form method="post"  action="login.php">
        <?php include('e.php'); ?>
        <div> 
            <p> Username </p>
            <input type="text" name="username">
        </div>
        <div> 
            <p> Password </p>
            <input type="password" name="password_1">
        </div>
        <div>
            <button type="submit" name="login"> Sign-in</button>
        </div>
    </form>
</body>
</html>