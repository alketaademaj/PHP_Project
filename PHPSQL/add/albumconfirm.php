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
<div class="Header">
     <h1><a href="../WebPage.php">Lissen</a></h1>      
</div>  

<div class="crazy">
<?php
//Values from AddAlbum
$art = $_GET['Artist'];
$alb = $_GET['Album'];
$date = $_GET['Date'];
$info = $_GET['Info'];
$str = "Thanks for contributing! Fans of $art will be pleased that $alb will be released on $date";

//Validating data into correct format
$time = strtotime($date);
$newtime = date('Y-m-d',$time);

$sql = "INSERT INTO album (albumname)
VALUES ('$alb')";

$sql1 = "INSERT INTO artist (artistName)
VALUES ('$art')";

$sql2 = "INSERT INTO album_artist (artistName, albumName, releaseDate, info)
VALUES ('$art','$alb','$date','$info')";

$artist = "SELECT * FROM artist WHERE (`artistName` LIKE '%".$art."%');";
$res=mysqli_query($conn,$artist);


if ($art == '' or $alb == '') {
    echo "Artist and album must be given.";
}
else  {
    if (mysqli_num_rows($res) > 0) {
        echo "Artist already exists";
        mysqli_select_db($conn,'database');
        $retval = mysqli_query($conn,$sql,);
        $kappaval = mysqli_query($conn,$sql2,);
        echo "Only Album was added";
    }

    else {
        echo "Artist Doesn't Exist.";
        mysqli_select_db($conn,'database');
        $retval = mysqli_query($conn,$sql,);
        $yeetval = mysqli_query($conn,$sql1);
        $kappaval = mysqli_query($conn,$sql2,);
        echo "Artist and Album Added.";
    }
}



?>
</div>
<A HREF = "../WebPage.php">Back To The Main Page</A>
</body>
</html>