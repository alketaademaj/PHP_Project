<!DOCTYPE html>
<html lang="en">
<head>
<title>Gelor | Search for Albums</title>
<meta charset="utf-8">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="../css/mystyletwo.css">
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
<?php
if (isset($_POST["query"])) {
        $query = $_POST['query']; 
        // gets value sent over search form
            
            
            $raw_results = mysqli_query($conn,"SELECT * FROM album_artist WHERE (`albumName` LIKE '%".$query."%') OR (`artistName` LIKE '%".$query."%')") or die(mysqli_connect_error());
            // Checks if the unser input is found in any of the columns within the table
            
           
            
            if(mysqli_num_rows($raw_results) > 0){ // if one or more rows are returned do following
                
                while($results = mysqli_fetch_array($raw_results)){
                // $results = mysql_fetch_array($raw_results) puts data from database into array, while it's valid it does the loop
                
                    echo "<p><h3>".$results['info']."</h3>"."Is the info of ".$results['albumName'].". Edit it from below."."</p>";
                    // posts results gotten from database(title and text) you can also show id ($results['id'])
                    
                    print("<td> 
                    <form action=\"editConfirm.php\" method=\"GET\">
                        <input type=\"hidden\" value=\"".$results['albumName']."\" name =\"album\" >
                        <input type=\"text\" value=\"\" name =\"info\" >
                        <input type=\"submit\" name=\"toedit\" value=\"Submit\" >
                    </form>
                    </td>");
                }
                
            }
            else{ // if there is no matching rows do following
                echo "Album with that name Doest not exist.";
            }       
}
else {
    echo "Virhe bois";
}
?>



</body>
</html>