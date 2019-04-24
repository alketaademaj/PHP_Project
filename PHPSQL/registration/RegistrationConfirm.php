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

<?php
    $User = $_POST['Username'];
    $Email = $_POST['email'];
    $Pass = $_POST['psw'];

    $sql = "INSERT INTO User (userName,userEMail,userPassword)
    VALUES ('$User','$Email','$Pass');";

    $Userq = "SELECT * FROM User WHERE (`userName` = '$User');";
    $Emailq = "SELECT * FROM User WHERE (`userEMail` = '$Email');";

    mysqli_select_db($conn,'localdb');
    $ret = mysqli_query($conn,$Userq);
    $reet = mysqli_query($conn,$Emailq);

    if (mysqli_num_rows($ret) > 0 ) {
        echo "USERNAME ALREADY REGISTERED!!";
        echo "<a href=Registration.php>Try again</a>";
    }

    else if (mysqli_num_rows($reet) > 0) {
        echo "EMAIL ARLEADY REGISTERED!";
        echo "<a href=Registration.php>Try again</a>";
    }

    else {
        mysqli_select_db($conn,'localdb');
        $retval = mysqli_query($conn,$sql);
       
        echo "User registered Succesfully.";
        echo "<a href=../WebPage.php>Back to the mainpage</a>";

    }
?>

</body>
