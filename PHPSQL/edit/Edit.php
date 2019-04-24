<!DOCTYPE html>
<html lang="en">
<head>
<title>Gelor | Search for Albums</title>
<meta charset="utf-8">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="../css/mystyleTwo.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<?php
require '../Config.php';
?>
</head>
        <body>
        <div class="Header">
            <h1><a href="../WebPage.php">Lissen</a></h1>      
        </div>

                <div class="Search">
                    <form action ="editResult.php" method="POST">
                         <input type="text" placeholder="Search for album info to edit" name="query">
                         <input type="submit" value="Search">
                    </form>
                </div>

        

        </body>
</html>