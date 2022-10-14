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
    $title = $_POST['title'];
    $body = $_POST['body'];
    $date = date('Y-m-d');
    $time = date("h:i:s");
    $month = date("n");
    $seconds = time(); 

    $servername = "127.0.0.1";
    $username = "root";
    $password = "";
    $dbname = "minip";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) 
    {
        die("Connection failed: " . $conn->connect_error);
    }

    if ($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        $sql = "INSERT INTO content (title, body, date, time, month, seconds) VALUES ('$title', '$body', '$date', '$time', '$month', '$seconds')";

        if ($conn->query($sql) === TRUE) 
        {
            header("Location https://127.0.0.1/viewblog.php");
        } 
        else 
        {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
        $conn->close();
    }
    ?>
</body>
</html>