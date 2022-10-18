<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=Source+Sans+Pro&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>


    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nikas Blogs - Write</title>
</head>

<body>

    <?php include('nav.php');

    if (isset($_POST['creds'])) {
        $creds = $_POST['creds'];
        if ($creds == "N1i2k3a4s5#") {
    ?>
            <div class="content create">
                <form action="post.php" method="POST" enctype="multipart/form-data" id="form">
                    <input type="text" name="title" placeholder=""><br><br>
                    <textarea id="summernote" name="content" id="" cols="30" rows="10"></textarea><br>
                    <input type="file" name="image" id=""><br><br>
                    <input type="submit" value="CREATE POST" name="submit">
                </form>
            </div>
        <?php
        } else {
            header("Location: index.php");
            exit();
        }
    } else {
        ?>
        <div class="content">
            <form action="write.php" method="POST">
                <input type="password" name="creds" placeholder=""><br><br>
                <input type="submit" value="LOG IN">
            </form>
        </div>
    <?php
    }
    include('footer.php');
    ?>

</body>
<script src="action.js"></script>
<script>
    $('#summernote').summernote({
        placeholder: '',
        tabsize: 2,
        height: 120,
        toolbar: [
            ['style', ['style']],
            ['font', ['bold', 'underline', 'clear']],
            ['color', ['color']],
            ['para', ['ul', 'ol', 'paragraph']],
            ['table', ['table']],
            ['insert', ['link', 'picture', 'video']],
            ['view', ['fullscreen', 'codeview', 'help']]
        ]
    });
</script>

</html>