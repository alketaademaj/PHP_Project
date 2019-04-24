<!doctype html>
<html>
<head>
<title>Gelor | Search for Albums</title>
<meta charset="utf-8">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="../css/mystyleTwo.css">
<?php
require '../Config.php';
?>
</head>
<body>

<div class="crazy">
<?php
//Album that will be removed
$alb = $_GET['Album'];

$query = "SELECT * FROM album WHERE (`albumName` LIKE '%".$alb."%');";
$res=mysqli_query($conn,$query);

if ($alb == '') {
    echo "Album must be given.";
}
else  {
    if (mysqli_num_rows($res) > 0) {
        $album = "DELETE FROM album WHERE (`albumName` LIKE '%".$alb."%');";
        $album1 = "DELETE FROM album_artist WHERE (`albumName` LIKE '%".$alb."%');";

        mysqli_select_db($conn,'localdb');
        $res=mysqli_query($conn,$album);
        $rees=mysqli_query($conn,$album1);
        echo"Album deleted succesfully";

    }
    else {
        echo "Album doesn't exist within the database.";
    }
}


?>
</div>
<A HREF = "../WebPage.php">Back To The Main Page</A>
</body>
</html>
