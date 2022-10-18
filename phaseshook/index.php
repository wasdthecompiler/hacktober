<?php
include('conn.php');
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="assets/css/style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="gray">
    <link rel="apple-touch-icon" href="icons/192.png">
    <link rel="manifest" href="manifest.json">
    <link rel="icon" type="image/x-icon" href="/icons/192.png">
    <title>Home</title>
</head>

<body>
    <header>
        <?php
        include('header.php');
        ?>
    </header>

    <div class="content">


        <!-- FETCHING DATA AS ARRAY FROM DATABASE -->

        <?php

        $posts_query = "SELECT * FROM posts";
        $posts_result = mysqli_query($conn, $posts_query);

        //taking response as an array and running a loop untill all posts come in
        while ($data_row = mysqli_fetch_array($posts_result)) {
            // echoing html format 
        ?>

            <div class="post">
           <div id="card"><?= $data_row['author'] ?> </div>
                <div class="article">
                    
                    <div class="post_content"><?= $data_row['content'] ?></div><br>
                   
                    <div class="post_content"><img src="<?= $data_row['image'] ?>" alt=""></div><br>

                </div>
                <div id="card">
                    <?= $data_row['time']; ?>
                </div>
            </div>

        <?php

        }

        ?>

        <!-- DATABASE PROCESS ENDS -->

    </div>

    <a href="mailto:wasdthedebugger@gmail.com?subject=Bug Report of Phase Shook."><div id="bugs">
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="white" class="bi bi-bug-fill" viewBox="0 0 16 16">
  <path d="M4.978.855a.5.5 0 1 0-.956.29l.41 1.352A4.985 4.985 0 0 0 3 6h10a4.985 4.985 0 0 0-1.432-3.503l.41-1.352a.5.5 0 1 0-.956-.29l-.291.956A4.978 4.978 0 0 0 8 1a4.979 4.979 0 0 0-2.731.811l-.29-.956z"/>
  <path d="M13 6v1H8.5v8.975A5 5 0 0 0 13 11h.5a.5.5 0 0 1 .5.5v.5a.5.5 0 1 0 1 0v-.5a1.5 1.5 0 0 0-1.5-1.5H13V9h1.5a.5.5 0 0 0 0-1H13V7h.5A1.5 1.5 0 0 0 15 5.5V5a.5.5 0 0 0-1 0v.5a.5.5 0 0 1-.5.5H13zm-5.5 9.975V7H3V6h-.5a.5.5 0 0 1-.5-.5V5a.5.5 0 0 0-1 0v.5A1.5 1.5 0 0 0 2.5 7H3v1H1.5a.5.5 0 0 0 0 1H3v1h-.5A1.5 1.5 0 0 0 1 11.5v.5a.5.5 0 1 0 1 0v-.5a.5.5 0 0 1 .5-.5H3a5 5 0 0 0 4.5 4.975z"/>
</svg></a>
    </div>

    <footer class="end">
        <?php
        include('footer.php');
        ?>
    </footer>

</body>
<script>
    if('serviceWorker' in navigator){
        navigator.serviceWorker.register('sw.js').then(registration => {
            console.log("SW Registered");
            console.log(registration);
        }).catch(error => {
            console.log("SW Registration Failed");
            console.log(error);
        });
    }
</script>
</html>