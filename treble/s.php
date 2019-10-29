<?php
$username = "";
$Fname = "";
$Lname = "";
$errors = array();

    $db = mysqli_connect('localhost', 'root', '', 'backend');

    if (isset($_POST['register']))
    {
        $username = mysqli_real_escape_string($db, $_POST['username']);
        
        $Fname = mysqli_real_escape_string($db, $_POST['Fname']);
        
        $Lname = mysqli_real_escape_string($db, $_POST['Lname']);
        
        $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
        
        $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);
        
        if (empty($username))
        {
            array_push($errors, "Username is required");
        }
        if (empty($Fname))
        {
            array_push($errors, "First name is required");    
        }
        if (empty($Lname))
        {
            array_push ($errors, "Last name is required");
        }
        if (empty($password_1))
        {
            array_push($errors, "Password is required");
        }
        if (empty($password_2))
        {
            array_push($errors, "Confirm your password");
        }
        if ($password_1 != $password_2)
        {
            array_push($errors, "Password doesnot match");
        }
        if (count($errors) == 0)
        {
            $password = md5($password_1);
            $sql = "INSERT INTO usernames (username, password, firstname, lastname) VALUES ('$username', '$password', '$Fname','$Lname')";
            mysqli_query($db,$sql);
            header('location: login.php');
        }
}
    session_start();
if (isset($_POST['login']))
{
        $username = mysqli_real_escape_string($db, $_POST['username']);
        
        $password = mysqli_real_escape_string($db, $_POST['password_1']);
            
        if (empty($username))
        {
            array_push($errors, "Username is required");
        }
        if (empty($password))
        {
            array_push($errors, "Password is required");
        }
        if (count($errors) == 0)
        {

            $password = md5($password);
            $query = "SELECT * FROM usernames WHERE username = '$username' AND password = '$password'";
            $result = mysqli_query($db, $query);
            if (mysqli_num_rows($result) == 1){
                $_SESSION['username'] = $username;
                $_SESSION['success'] = "You are logged in";
                header ('location: index1.html');
            }
            else 
            {
                array_push ($errors, "THe username/password is wrong");
               // header('location: login.php');
            }
        }
    }
    if (isset($_GET['logout']))
    {
        header('location: Index.html');
    }


?>
