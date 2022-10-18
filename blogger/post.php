<?php

include('conn.php');

if (isset($_POST['submit'])) {

  $title = $_POST['title'];
  $title = addslashes($title);
  $content = $_POST['content'];
  $content = addslashes($content);
  $target_path = "uploads/";  

  $target_path = $target_path.basename( $_FILES['image']['name']);   
    
  if(move_uploaded_file($_FILES['image']['tmp_name'], $target_path)) {  
      echo "File uploaded successfully!";  
  } else{  
      echo "Sorry, file not uploaded, please try again!";  
  }  

  $path = $target_path;

  $sql = "INSERT INTO `posts` (`title`, `content`, `image`) VALUES ('$title', '$content', '$path');";
  if (mysqli_query($conn, $sql)) {
    header("Location: index.php");
    exit();
  } else {
    echo "ERROR: Could not be able to execute $sql." . mysqli_error($conn);
  }
} else {
    echo "Submit button not pressed";
}
