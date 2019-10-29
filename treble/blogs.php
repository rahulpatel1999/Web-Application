
<!DOCTYPE html>
<html lang = "en">
    <link rel="stylesheet" type="text/css" href="blogs.css">
    <head>
        <title>Blogs</title>
        <a class="aa" href="Index.html"> logout </a>
    </head>
    
    <body>
        <header>
            <h1> Posts </h1>
        </header>
        
        <main>
            <ul>
                <li><a href="index1.html">Home</a></li>
                <li><a class = "active" href = "blogs.php">Posts</a></li>
                <li><a href = "aboutus.html">About Us</a></li>
            </ul>
            
            
        </main>
        
        <br><br><br>
        <form action="insert.php" method="POST">
        
            Title : <input type="text" name="title" placeholder="Title">
            <br>
            Review/Question : <input class = "d" type="text" name="review" placeholder="Review" size="">
            <br>
            Link : <input type="text" name="link" placeholder="YouTube Link">
            <br>
            <button type="submit" name="submit">Submit</button>
        
        </form>
        <br><br><br>
        <?php
            include_once 'con.php';
            
            $sql = "SELECT * FROM review ORDER BY ReviewID DESC";
            $posts = $conn->query($sql);
            
            if($posts->num_rows > 0) {
                while($row = $posts->fetch_assoc()) {
        ?>
                    <div class="post">
                        <h2 class="post-title"><a href="#"><?php echo $row['Title1']; ?></a></h2>
                        <p class="post-meta"><?php echo $row['Date1']; ?> by <a href="#"><?php echo $row['Username1']; ?></a></p>
                        
                        <?php echo $row['Content']; ?>
                        <br>
                        <iframe id="<?php echo $row['ReviewID'] ?>" width="300" height="169" frameborder="0" allowfullscreen></iframe>
                        <script>
                            var embed = function(url) {
                                var id = url.split("?v=")[1];
                                var embedlink = "https://www.youtube.com/embed/" + id;
                                document.getElementById("<?php echo $row['ReviewID'] ?>").src = embedlink;
                            }
                            var link = "<?php echo $row['links'] ?>";
                            embed(link);
                        </script>
                    </div>



               <?php }
            } ?>
    </body>
</html>
