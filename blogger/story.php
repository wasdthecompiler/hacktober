<?php

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    include('conn.php');
    $posts_query = "SELECT * FROM posts WHERE id = $id";
    $posts_result = mysqli_query($conn, $posts_query);
    $data_row = mysqli_fetch_array($posts_result);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=Source+Sans+Pro&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="read.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta property=’og:image’ content="<?= $data_row['image']; ?>"/>
    <title>Nikas Blogs</title>
</head>

<body>
    <?php include('nav.php'); ?>

        <div class="content">
            <div class="post">
                <div class="postimage"><img src="<?php if($data_row['image'] == "uploads/"){echo 'uploads/default.jpg';} else echo $data_row['image']; ?>" alt=""></div>
                <div class="posttitle"><?= $data_row['title'] ?></div>
                <div class="postcontent"><?= $data_row['content'] ?></div>
                <div class="time"><?= $data_row['time'] ?></div>
            </div>
        </div>
    <?php
    } else {
        include('content.php');
    }
    ?>

    <div class="main">

    </div>

    <?php include('footer.php'); ?>
</body>
<script src="action.js"></script>

</html>