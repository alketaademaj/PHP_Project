<!DOCTYPE html>
<html lang="en">
<head>
<title>Gelor | Search for Albums</title>
<meta charset="utf-8">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="../css/mystyle.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<?php
require '../Config.php';
?>
</head>
<body>
<?php
session_start();

    //Values from form
    $Username = $_POST['uname'];
    $Password = $_POST['psw'];

    //prevent injection
    $Username = stripcslashes($Username);
    $Password = stripcslashes($Password);
    $Username = mysqli_real_escape_string($conn,$Username);
    $Password = mysqli_real_escape_string($conn,$Password);

    //Form a connection
    require('../Config.php');

    //Query the Database for User
    $query = "SELECT * FROM user WHERE userName = '$Username' and userPassword = '$Password';";
        mysqli_select_db($conn,'localdb');
        $result = mysqli_query($conn,$query);
        $row = mysqli_fetch_array($result);
        if (isset($_POST["uname"]) && isset($_POST["psw"])) {
            if ($row['userName'] == $Username && $row['userPassword'] == $Password) {
                $_SESSION['userid'] = $row['userID'];
                $_SESSION['uname'] = $Username;
                echo "Login Succesfull! Welcome " .$row['userName'];
            }
            else {
                echo "Failed to login.";
            }
        }
        else {
            echo "Virhe Bois";
        }
?>
<A HREF = "../WebPage.php">Back To The Main Page</A>
</body>
