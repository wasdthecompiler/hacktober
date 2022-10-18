<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/create.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="gray">
    <link rel="apple-touch-icon" href="icons/192.png">
    <link rel="manifest" href="manifest.json">
    <link rel="icon" type="image/x-icon" href="/icons/192.png">
</head>

<body>
    <header>
        <?php
        include('header.php');
        ?>
    </header>

    <div class="main">
    <div class="content">
    <div id="card">Create a Post</div>
    <div class="post">
        <div class="article">
            <div class="create">
                
                <form action="post.php" method="post" class="form" enctype="multipart/form-data">
                    <textarea name="content" id="contentinput" cols="30" rows="10" placeholder="Content Here"></textarea><br><br>
                   <input type="file" name="image" id="imginput"><br><br>
                    <input type="submit" value="Create Post" id="submit" name="submit">
                </form>
            </div>
        </div>

    </div>
    </div>
    </div>

    <footer class="end">
        <?php
        include('footer.php');
        ?>
    </footer>
</body>

</html>