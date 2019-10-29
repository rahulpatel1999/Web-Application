<?php include('s.php'); ?>
<!DOCTYPE html>
<html>
    <link rel="stylesheet" type="text/css" href="login.css" />
<head>
    <title> Registration </title>
    
</head>
<body>
    <div>
        <h2> Register </h2>
    </div>
    
    <form method="post"  action="reg.php">
        <?php include('e.php'); ?>
        <div> 
            <p> Username </p>
            <input type="text" name="username">
        </div>
        <div> 
            <p> First Name </p>
            <input type="text" name="Fname">
        </div>
        <div> 
            <p> Last Name </p>
            <input type="text" name="Lname">
        </div>
        <div> 
            <p> Password </p>
            <input type="password" name="password_1">
        </div>
        <div> 
            <p> Re-type Password </p>
            <input type="password" name="password_2">
        </div>
        <div>
            <button type="submit" name="register"> Register</button>
        </div>
    </form>
</body>
</html>