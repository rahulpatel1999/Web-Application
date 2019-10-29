<?php
    include_once 'con.php';
    include_once 's.php';

    $title = $_POST['title'];
    $review = $_POST['review'];
    $link = $_POST['link'];
    
    $sql = "INSERT INTO review (Title1, Content, links, Username1) VALUES ('$title', '$review', '$link','$username');";
    mysqli_query($conn,$sql);
    
    header('location: blogs.php');
?>
