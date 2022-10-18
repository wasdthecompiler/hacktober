<?php
        include('conn.php');
        $posts_query = "SELECT * FROM posts";
        $posts_result = mysqli_query($conn, $posts_query);

        //taking response as an array and running a loop untill all posts come in
        while ($data_row = mysqli_fetch_array($posts_result)) {
            // echoing html format 
        ?>  <div class="content">
            <div class="post">
            <div class="postimage"><img src="<?php if($data_row['image'] == "uploads/"){echo 'uploads/default.jpg';} else echo $data_row['image']; ?>" alt=""></div>
            <div class="posttitle"><a href="story.php?id=<?php echo($data_row['id']) ?>"><?= $data_row['title'] ?></a></div>
            </div>
            </div>
        <?php
        }
?>
