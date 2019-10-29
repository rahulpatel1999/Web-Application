<html>
<head>
    <title>Pagination</title>
</head>
<body>

<?php
    //connect to database
    $con = mysqli_connect('localhost','root','','backend');//password empty
    
    //define how many results you want on your page
    $results_per_page = 5;
    
    //find out the number stored in database
    $sql = "SELECT * FROM review"; //change table name
    $result = mysqli_query($con,$sql);
    $number_of_results = mysqli_num_rows($result);
    
    while($row = mysqli_fetch_array($result)) {
        echo $row['id'] . ' ' . $row['tableName'] . '<br>';
    }
    
    //determine number of total pages available
    $number_of_pages = ceil($number_of_results/$results_per_page);//round to nearest integer
    
    //determine which page number visitor is currentlly on
    if(!isset($_GET['page'])) {
        $page = 1;
    } else {
        $page = $_GET['page'];
    }
    
    //determine the sql LIMIT starting number for the results on the displaying page
    $this_page_first_result = ($page-1)*$results_per_page;
    
    //retrieve selected results from database and display them on page
    $sql='SELECT * FROM review LIMIT' . $this_page_first_result . ',' . $results_per_page;//change tableName
    $result = mysqli_query($con, $sql);
    
    while($row = mysqli_fetch_array($result)){
        echo $row['id'] . ' ' . $row['tableName']. '<br>';
    }
    
    //display the link to the page
    for($page=1;$page<=$number_of_pages;$page++)
        echo '<a href="index2.php?page=' . $page . '">' . $page . '</a>';
    
    ?>
    
    </body>
</html>
    
    
    
