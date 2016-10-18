<?php
include('connection.php');
$id = $_GET['id'];  
$sql = "select * from buy where id = $id";  
$result = mysqli_query($conn, $sql);  
if ($result){  
$row = mysqli_fetch_array($result);  
$title = $row['beds'];  
$content = $row['baths'];  
}  
?>  

<html>  
<head>  
<title><?php echo $title ?></title>  
</head>  
<body>  
<h1><?php echo $title ?></h1>  
<p><?php echo $content ?></p>  
</body>  
</html>  