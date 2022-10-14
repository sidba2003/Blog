<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Monthly view</title>
    <link rel="stylesheet" href="blogview.css">
</head>
<body>
<?php
    $servername = "127.0.0.1";
    $username = "root";
    $password = "";
    $dbname = "minip";

    $conn = new mysqli($servername, $username, $password, $dbname);    
    for ($x = 1; $x <= 12; $x++)
    {
        $sql = "SELECT * from content where month='$x'";
        $query = mysqli_query($conn, $sql);
        $result = mysqli_fetch_assoc($query);

        if($result == null)
        {
            echo "no blog entries as of now!!!";
            echo "<hr>";
        }

        else{
            do {
                echo "<p id='title'><strong>". $result['title']. "</strong> posted at ". $result['date']. " at time ". $result['time'];
                echo "<br>";
                echo "<p>". $result['body'];
                echo "<hr>";
            }while($result = mysqli_fetch_assoc($query));
        }
        echo "<hr>";
        echo "<hr>";
    }
?>
</body>
</html>