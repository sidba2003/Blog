<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $gmailid = $_POST["email"];
    $passwrdd = $_POST["pass"];

    $servername = "127.0.0.1";
    $username = "root";
    $password = "";
    $dbname = "minip";

    $conn = new mysqli($servername, $username, $password, $dbname);

    $sql = "SELECT gmail from logininfo where password='$passwrdd'";

    $result = mysqli_query($conn, $sql);

    if($result)
    {
        if (mysqli_num_rows($result) > 0) 
        {
            session_start();
            $_SESSION['userID'] = 'SD231';
            header("Location: https://127.0.0.1/blogpost.html", true, 301);
        } 
        else 
        {                
            echo "your login credentials are wrong!!";
            header("Location: https://127.0.0.1/miniproject1.html", true, 301);
        }
    }

    else{
        echo 'Error: '.mysql_error();
    }

    $conn->close();
    ?>
</body>
</html>