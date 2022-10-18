<?php


require_once('create.php');

include('conn.php');

if (isset($_POST['submit'])) {

  $author = "1";
  $content = $_POST['content'];


  ///////////////////////////////////////////////////////////


  $target_path = "uploads/";  
  $target_path = $target_path.basename( $_FILES['image']['name']);   
    
  if(move_uploaded_file($_FILES['image']['tmp_name'], $target_path)) {  
      echo "File uploaded successfully!";  
  } else{  
      echo "Sorry, file not uploaded, please try again!";  
  }  

  /////////////////////////////////////////////////////////////

  $path = $target_path;

  $sql = "INSERT INTO posts (author, content, image) VALUES ('$author', '$content', '$path')";

  if (mysqli_query($conn, $sql)) {
    header("Location: index.php");
    exit();
  } else {
    echo "ERROR: Could not be able to execute $sql." . mysqli_error($conn);
  }
}
