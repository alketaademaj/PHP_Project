<!doctype html>
<html>
<head>
<title>Gelor | Search for Albums</title>
<meta charset="utf-8">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="../css/mystyletwo.css">
<?php
require '../Config.php';
?>
</head>
<body>
    <div class="Header">
     <h1><a href="../WebPage.php">Lissen</a></h1>      
    </div>  
<div class="crazy">
<?php
$info = $_GET['info'];
$alb = $_GET['album'];

$infoEdit = "UPDATE album_artist SET info = '$info' WHERE albumName = '$alb';";

mysqli_select_db($conn,'database');
$res=mysqli_query($conn,$infoEdit);
echo "The info was updated.";
?>
</div>
<A HREF = "../WebPage.php">Back To The Main Page</A>
</body>
</html>