<?php

  $id = $_GET['id'];
  // do some validation here to ensure id is safe

  require("connection.php");
  
  $sql = "SELECT image FROM buy WHERE id=$id";
  $result = mysqli_query($conn,$sql);
  $row = mysqli_fetch_assoc($result);

  header("Content-type: image/jpeg");
  echo $row['image'];
?>